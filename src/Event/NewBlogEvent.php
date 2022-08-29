<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;

class NewBlogEvent extends Event
{

    public const NAME = 'blog.new';

    public function __construct(private string $title)
    {

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


}