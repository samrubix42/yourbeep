<?php

use Livewire\Livewire;

test('home page renders successfully', function () {
    $this->get('/')
        ->assertOk()
        ->assertSeeLivewire('pages::home');
});

test('courses page renders successfully', function () {
    $this->get('/courses')
        ->assertOk()
        ->assertSeeLivewire('pages::home');
});

test('masterclass form validation works', function () {
    Livewire::test('pages::home')
        ->set('name', '')
        ->set('email', '')
        ->set('phone', '')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'phone']);
});

test('form registers successfully', function () {
    Livewire::test('pages::home')
        ->set('name', 'Amit Sharma')
        ->set('email', 'amit@gmail.com')
        ->set('phone', '9876543210')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('success', true)
        ->assertSet('price', 499);
});
