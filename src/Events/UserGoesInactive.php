<?php

namespace AbanNova\Mercurius\Events;

use Illuminate\Queue\SerializesModels;

class UserGoesInactive
{
    use SerializesModels;

    /**
     * The User going inactive.
     *
     * @var string
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}
