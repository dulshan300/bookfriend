<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has errors if the details are not provided', function () {
    $this->post('/register')
        ->assertSessionHasErrors(['name', 'email', 'password']);
});


it('register the user', function () {
    $this->post('/register', [

        'name' => 'Dulshan',

        'email' => 'dulshan@test.com',

        'password' => 'password'
    ])->assertRedirect('/');


    $this
        ->assertDatabaseHas('users', [
            'name' => 'Dulshan',

            'email' => 'dulshan@test.com',
        ])
        ->assertAuthenticated();
});
