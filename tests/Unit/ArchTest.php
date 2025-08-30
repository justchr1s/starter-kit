<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->security();

arch()->expect('App')
    ->toHaveMethodsDocumented()
    ->toHavePropertiesDocumented()
    ->not()->toUse(['die', 'var_dump', 'print_r', 'dd', 'dump', 'ds']);

arch('controllers')
    ->expect('App\Http\Controllers')
    ->not->toBeUsed();

//
