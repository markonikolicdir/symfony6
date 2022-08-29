<?php

namespace App\EventSubscriber;


use App\Event\NewBlogEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class NewBlogSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            NewBlogEvent::NAME => 'onCreatedNew'
        ];
    }

    public function onCreatedNew(NewBlogEvent $event)
    {
        print 'onCreatedNew' . PHP_EOL;

        print $event->getTitle() . PHP_EOL;
    }
}