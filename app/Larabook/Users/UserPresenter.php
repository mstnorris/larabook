<?php namespace Larabook\Users;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    /**
     * Present a link to the user's gravatar
     *
     * @param int $size
     * @return string
     */
    public function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s={$size}";
    }

    public function followerCount()
    {
        // bear in mind that below "->followers->count()" will work, however the queries
        // will be different. "->followers->count()" grabs the collection and then counts them
        // but we don't need that as we don't care about the specific followers, just how many there are
        $count = $this->entity->followers()->count();
        $plural = str_plural('follower', $count);
        return "{$count} {$plural}";
    }

    public function statusCount()
    {
        $count = $this->entity->statuses()->count();
        $plural = str_plural('status', $count);
        return "{$count} {$plural}";
    }

}