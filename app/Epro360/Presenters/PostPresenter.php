<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class PostPresenter extends Presenter {


    public function month()
    {
      return $this->published_at->format('M');
    }

    public function day()
    {
        return $this->published_at->format('d');
    }
}