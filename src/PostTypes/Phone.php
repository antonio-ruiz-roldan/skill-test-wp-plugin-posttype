<?php

namespace PauPenin\WPSkillTest\PostTypes;

use PauPenin\WPSkillTest\PostType;

/**
 * Class PostType
 */
class Phone extends PostType
{
    /**
     * PostType identifiers
     */
    protected $name = 'phone';
    protected $plural_name = 'phones';

    /**
     * Get custom arguments for PostType
     *
     * @param array $override
     * @return array
     */
    protected function args($override = [])
    {
        return parent::args(
            array_merge([
                'label' => 'Phone',
                'menu_icon' => 'dashicons-phone'
            ], $override)
        );
    }
}
