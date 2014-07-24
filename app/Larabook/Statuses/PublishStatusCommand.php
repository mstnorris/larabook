<?php
namespace Larabook\Statuses;

class PublishStatusCommand {
    /**
     * @var $body
     */
    public $body;

    /**
     * @var $userId
     */
    public $userId;

    /**
     * Construct
     */
    public function __construct($body, $userId)
    {
        $this->body   = $body;
        $this->userId = $userId;
    }
}