<?php

test('the dashboard is reachable without logging in', function () {
    $response = $this->get(route('dashboard'));
    $response->assertOk();
});

test('the home page shows the dashboard', function () {
    $response = $this->get(route('home'));
    $response->assertOk();
});
