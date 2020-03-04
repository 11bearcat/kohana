<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller {

    public function action_index()
    {
        $this->response->body('h123ld!');
    }

}
