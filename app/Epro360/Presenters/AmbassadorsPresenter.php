<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class AmbassadorsPresenter extends Presenter {

    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }


    public function createdAt()
    {
        return $this->created_at->format('D d - M - y') ;
    }
}