<?php namespace Larabook\Statuses;

use Laracasts\Presenter\Presenter;


/**
 * Class StatusPresenter
 *
 * @package Larabook\Statuses
 */
class StatusPresenter extends Presenter
{

    /**
     * Display how long ago a status was published
     * @return mixed
     */
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }


}