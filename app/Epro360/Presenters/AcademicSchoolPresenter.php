<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class AcademicSchoolPresenter extends Presenter {

    public function name()
    {
        $slug = $this->entity->slug;

        $trans = trans('network.coaching.academic_scholarship.'.$slug);

        return $trans;
    }

}