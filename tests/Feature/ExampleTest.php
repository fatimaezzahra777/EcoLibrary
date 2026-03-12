<?php


use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

uses(WithFaker::class);
 
test('test_the_application_returns_a_successful_response', function(){
        login()
        ->get('/api/books')
        ->assertStatus(200);
});



test('can add a category ',function (){
    $amine = 234;
    expect($amine)->toBeString();


});