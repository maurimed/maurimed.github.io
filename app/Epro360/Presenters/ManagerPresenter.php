<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class ManagerPresenter extends Presenter {


    public function fullName()
    {
        return $this->entity->firstname . ' ' . $this->entity->lastname;
    }

    public function institution()
    {
        return $this->entity->institutionable->name;
    }

}