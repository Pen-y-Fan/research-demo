<?php

declare(strict_types=1);

namespace Tests\Feature\Httd\Controllers;

use App\Contact;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\AbstractTestCase;

final class ContactUsTest extends AbstractTestCase
{
    use RefreshDatabase;

    public function testContactUsMessageIsSaved(): void
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('/contact', $this->data());

        $this->assertAuthenticatedAs($user, $guard = null);

        $response->assertRedirect();
        $this->assertCount(1, Contact::all());
    }

    public function testANameIsRequired(): void
    {
        $response = $this->post('/contact', array_merge($this->data(), ['name' => '']));

        $response->assertSessionHasErrors('name');
        $this->assertCount(0, Contact::all());
    }

    public function testAnEmailIsRequired(): void
    {
        $response = $this->post('/contact', array_merge($this->data(), ['email' => '']));

        $response->assertSessionHasErrors('email');
    }

    public function testAPhoneIsRequired(): void
    {
        $response = $this->post('/contact', array_merge($this->data(), ['phone' => '']));

        $response->assertSessionHasErrors('phone');
    }

    public function testAMessageIsRequired(): void
    {
        $response = $this->post('/contact', array_merge($this->data(), ['message' => '']));

        $response->assertSessionHasErrors('message');
    }

    public function testStaffCanViewContactMessages(): void
    {
        $user = factory(User::class)->make();

        $contact = factory(Contact::class, 2)->create();

        $response = $this->actingAs($user)->get('/staff/contact');

        $response->assertOk();
        $response->assertSee($contact[0]->name);
        $response->assertSee($contact[1]->email);
        $response->assertSee($contact[0]->phone);
        $response->assertSee($contact[0]->message);
        $response->assertSee($contact[1]->message);
    }

    private function data(): array
    {
        return [
            'name' => 'Fred Bloggs',
            'email' => 'Fred@Bloggs.com',
            'phone' => '123456789',
            'message' => 'Lorem ipsum dolor sit amet consectetur.',
        ];
    }
}
