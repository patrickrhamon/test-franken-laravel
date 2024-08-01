<?php

use function Pest\Stressless\stress;

it('User list has a fast response time', function () {
    $result = stress('example.com/users');
    $duration = $result->requests()->duration()->med();

    expect($duration)->toBeLessThan(500); // < 500.00ms
});
