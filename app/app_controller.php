<?php

class AppController extends Controller {

    public $components = array('Session', 'DebugKit.Toolbar' => array('panels' => array('history' => false)));
    public $view = 'Taltal.Phptal';

}
