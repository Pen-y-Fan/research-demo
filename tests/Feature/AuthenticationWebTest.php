<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\AbstractTestCase;

final class AuthenticationWebTest extends AbstractTestCase
{
    use DatabaseMigrations;

    public function testHomeWebPageIsAvailableToUsers(): void
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/home');

        $response->assertOk()->assertSee('<h1>Dashboard</h1>')->assertViewIs('home');
    }
}
