<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    public function testValidationWrongEmail()
    {
        $response = $this->post('login',['email' => 'testemail', 'password' => 'testemail']);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('email', $content);
    }

    public function testValidationWrongNoPassword()
    {
        $response = $this->post('login',['email' => 'testemail@example.ru']);
        $response->assertStatus(422);
        $content = $response->getContent();
        $this->assertStringContainsString('password', $content);
    }
}
