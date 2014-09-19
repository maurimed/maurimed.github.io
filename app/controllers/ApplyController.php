<?php

/**
 * Class ApplyController
 */
class ApplyController extends \BaseController {

    public function undergroundApplication()
    {
        return View::make('site.applications.underground.index');
    }
    
} 