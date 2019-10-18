<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use Tests\Mocks\LogMock;
use PauPenin\WPSkillTest\Log;

class LaptopTest extends TestCase {
    /**
     * @test
     */
    function laptop_post_type_is_registered() {
        $this->assertFalse(post_type_exists('laptop'));
    }
}
