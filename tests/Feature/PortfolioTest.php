<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test portfolio home page loads successfully.
     */
    public function test_portfolio_page_loads_successfully(): void
    {
        $response = $this->get(route('portfolio.index'));

        $response->assertStatus(200);
        $response->assertSee('Bagas Alif Muhammad Nasution');
        $response->assertSee('Dinas Kominfo Deli Serdang');
        $response->assertSee('Website Desa se-Kabupaten Deli Serdang');
    }

    /**
     * Test contact message submission succeeds with valid data.
     */
    public function test_contact_message_can_be_submitted_successfully(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Project Inquiry',
            'message' => 'Hello Bagas, I would love to discuss a new Laravel project with you.',
        ];

        $response = $this->post(route('portfolio.contact'), $data);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contact_messages', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Project Inquiry',
        ]);
    }

    /**
     * Test contact message validation fails when required fields are missing.
     */
    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post(route('portfolio.contact'), []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertDatabaseCount('contact_messages', 0);
    }
}
