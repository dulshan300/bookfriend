<?php

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('greet the user if they are signed out', function () {

    
    $this->get('/')
        ->assertSee('Bookfriends')
        ->assertSee('Sign up to get started.')
        ->assertDontSee(['Feed']);
});


it('shows auth menu items if the user is signed in', function () {

    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/')
        ->assertSeeText(['Feed', 'My books', 'Add a book', 'Friend', $user->name]);
});


it('not shows auth menu items if the user not signed in', function () {


    $this
        ->get('/')
        ->assertSeeText(['Login', 'Register','Home']);
});
