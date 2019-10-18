<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class PhoneTest extends TestCase {
    /**
     * @test
     */
    function phone_post_type_is_registered() {
        $this->assertFalse(post_type_exists('phone'));
    }
}
