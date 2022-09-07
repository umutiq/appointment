<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloiqTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hello_iq() {
        $response = $this->get('/api/iq');

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => true,
            ]);
    }

    public function test_iq_version() {
        $response = $this->get('/api/iq/version');

        $response
            ->assertStatus(200)
            ->assertJson([
                'version' => true,
            ]);
    }
}
