<?php

namespace Ninhtqse\IMAP\Events;

use Ninhtqse\PHPIMAP\Message;

class FlagNewEvent extends Event {

    /** @var Message $message */
    public $message;

    /** @var string $flag */
    public $flag;

    /**
     * Create a new event instance.
     * @var mixed[] $arguments
     * @return void
     */
    public function __construct($arguments) {
        $this->message = $arguments[0];
        $this->flag = $arguments[1];
    }
}
