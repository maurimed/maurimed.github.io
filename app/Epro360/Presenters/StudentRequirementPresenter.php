<?php namespace Epro360\Presenters;

use Laracasts\Presenter\Presenter;

class StudentRequirementPresenter extends Presenter {


    public function linkToFile()
    {
        return "<a target=_blank href=/dashboard/docs/students/{$this->student_id}/requirements/{$this->file} > {$this->file} </a>";

    }

    /**
     * @return string
     */
    public function getStatus()
    {

        if($this->status === 0) return $this->statusTemplate('Not send', 'danger') ;

        if($this->status === 1) return $this->statusTemplate('Waiting Approval', 'info');

        if($this->status === 2) return $this->statusTemplate('Must be corrected', 'warning');

        if($this->status === 3) return $this->statusTemplate('Approved', 'success');

    }

    /**
     * @param $text
     * @param $type
     * @return string
     */
    private function statusTemplate($text, $type)
    {
        return "<span class='label label-{$type}' > {$text} </span>";
    }


    /**
     * @return string
     */
    public function getActions()
    {

        if($this->status === 0) return $this->actionsTemplate('Not send', 'danger') ;

        if($this->status === 1) return $this->actionsTemplate('Waiting Approval', 'info');

        if($this->status === 2) return $this->actionsTemplate('Must be corrected', 'warning');

        if($this->status === 3) return $this->actionsTemplate('Approved', 'success');

    }

    /**
     * @param $text
     * @param $type
     * @return string
     */
    private function actionsTemplate($text, $type)
    {
        return "<span class='label label-{$type}' > {$text} </span>";
    }

//if($this->status === 0) return 'Not send';
//
//if($this->status === 1) return 'Waiting Approval';
//
//if($this->status === 2) return 'Must be corrected';
//
//if($this->status === 3) return 'Approved';

}