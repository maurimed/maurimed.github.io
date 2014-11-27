<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class MajorsPresenter extends Presenter {


    public function Schools()
    {
        $schools = [];

        if ($this->academicSchools->count())
        {
            foreach ([$this->academicSchools->slug] as $school)
            {
                $schools[] = $school;
            }

            $schools = implode(" ", $schools);

            return $schools;

        }

        return "Don't have Academic Schools associated ";
    }

    public function name()
    {
        $slug = $this->entity->slug;

        $trans = trans('network.coaching.majors.'.$slug);

        return $trans;
    }

}