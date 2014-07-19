<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class UniversityPresenter extends Presenter {


    public function location()
    {
        return $this->city->name . ' - ' . $this->city->state->name . ' - ' . $this->city->state->country->name;
    }

    public function websiteLink()
    {
        return $this->link($this->website);

    }

    public function tuitionLink()
    {
        return $this->link($this->tuition_link);
    }

    public function admissionsLink()
    {
        return $this->link($this->admissions_link);
    }

    private function link($link, $text = "Link")
    {
        return "<a target=_blank rel=popover-hover data-placement=top  data-content={$link} href={$link} >$text</a>" ;
    }
}