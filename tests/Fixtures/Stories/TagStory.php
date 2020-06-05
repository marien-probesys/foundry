<?php

namespace Zenstruck\Foundry\Tests\Fixtures\Stories;

use Zenstruck\Foundry\Story;
use Zenstruck\Foundry\Tests\Fixtures\Factories\TagFactory;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class TagStory extends Story
{
    protected function build(): void
    {
        $this->add('dev', TagFactory::create(['name' => 'dev']));
        $this->add('design', TagFactory::create(['name' => 'design']));
    }
}