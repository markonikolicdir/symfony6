<?php

namespace App\EventListener;

use App\Event\DeleteBlogEvent;


class DeleteBlogListener
{
    public function __invoke(DeleteBlogEvent $event): void
    {
        print '__invoke' . PHP_EOL;

        print $event->getTitle() . PHP_EOL;
    }

    public function onDeleteBlogEvent(DeleteBlogEvent $event): void
    {
        print 'onDeleteBlogEvent' . PHP_EOL;

        print $event->getTitle() . PHP_EOL;
    }
}