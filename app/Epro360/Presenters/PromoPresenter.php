<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class PromoPresenter extends Presenter {

    public function published()
    {
        return $this->entity->published == 0 ? "No" : "Yes";
    }

    public function video()
    {
        return $this->buildVideoUrl();
    }

    private function buildVideoUrl()
    {
        $video = $this->entity->video;

        if(strpos($video, 'youtube'))
        {
            return str_replace("watch?v=","embed/", $video);
        }
        else if(strpos($video, 'vimeo'))
        {
            return "//player.vimeo.com/video/" . filter_var($video, FILTER_SANITIZE_NUMBER_INT);
        }
        return "";
    }



}