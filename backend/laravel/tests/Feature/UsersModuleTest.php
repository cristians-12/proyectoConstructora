<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     *  @test
     */
    public function test_it_loads_users_page(): void
    {
        $this->get('/usuarios')

            ->assertStatus(200)
            ->assertSee('usuarios')
            ;
    }

    public function it_loads_user_id(): void
    {
        $this->get('/usuarios/4')
            ->assertStatus(200)
            ->assertSee("el id del usuario es 4");
    }

    public function it_loads_nuevo_usuario(): void
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
