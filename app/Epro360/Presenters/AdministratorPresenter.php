<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class AdministratorPresenter extends Presenter {


    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

}