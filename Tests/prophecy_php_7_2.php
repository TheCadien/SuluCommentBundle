<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prophecy\PhpUnit;  // BC bridge for PHP 7.2 where we can not install phpspec/prophecy-phpunit package

if (!\trait_exists(ProphecyTrait::class)) {
    trait ProphecyTrait
    {
    }
}
