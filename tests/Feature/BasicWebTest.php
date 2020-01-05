<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\AbstractTestCase;

final class BasicWebTest extends AbstractTestCase
{
    /**
     * Test web site.
     */
    public function testWelcomeWebPage(): void
    {
        $response = $this->get('/');

        $response->assertOk();

        $response->assertSee('<h1>Research Demo</h1>')->assertViewIs('welcome');
    }

    public function testAboutWebPage(): void
    {
        $response = $this->get('/about');

        $response->assertOk()->assertSee('<h1>About</h1>')->assertViewIs('about');
    }

    public function testServicesWebPage(): void
    {
        $response = $this->get('/services');

        $response->assertOk()->assertSee('<h1>Services</h1>')->assertViewIs('services');
    }

    public function testResearchWebPage(): void
    {
        $response = $this->get('/research');

        $response->assertOk()->assertSee('<h1>Research</h1>')->assertViewIs('research');
    }

    public function testTeamWebPage(): void
    {
        $response = $this->get('/team');

        $response->assertOk()->assertSee('<h1>Team</h1>')->assertViewIs('team');
    }

    public function testContactWebPage(): void
    {
        $response = $this->get('/contact');

        $response->assertOk()->assertSee('<h1>Contact Us</h1>')->assertViewIs('contact');
    }

    public function testLoginWebPage(): void
    {
        $response = $this->get('/login');

        $response->assertOk()->assertSee('<h1>Login</h1>')->assertViewIs('auth.login');
    }

    public function testRegisterWebPage(): void
    {
        $response = $this->get('/register');

        $response->assertOk()->assertSee('<h1>Register</h1>')->assertViewIs('auth.register');
    }

    public function testHomeWebPageIsNotAvailableToGuests(): void
    {
        $response = $this->get('/home');

        $response->assertRedirect();
    }
}
