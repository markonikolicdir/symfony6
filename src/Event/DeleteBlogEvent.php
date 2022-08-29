<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;

class DeleteBlogEvent extends Event
{

    public const NAME = 'delete.blog';

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