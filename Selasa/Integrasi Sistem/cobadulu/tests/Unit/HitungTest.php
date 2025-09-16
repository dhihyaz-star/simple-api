<?php

test('penjumlahan 2 + 3 = 5', function () {
    $a = 2;
    $b = 3;

    expect($a + $b)->toBe(5);
});
