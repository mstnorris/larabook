<?php namespace Larabook\Statuses;


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
     * @param $body
     * @param $userId
     */
    function __construct($body, $userId)
    {
        $this->body   = $body;
        $this->userId = $userId;
    }


} 