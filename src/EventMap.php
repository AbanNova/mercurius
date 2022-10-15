<?php

namespace AbanNova \Mercurius;

trait EventMap
{
    /**
     * All event / listener mappings.
     *
     * @var array
     */
    protected $events = [
        Events\MessageSent::class => [
            // Listeners\.....::class,
        ],
    ];
}
