<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cms extends Controller {

    public function action_index()
    {
        $param = $this->request->param('uri');
        $this->response->body($param);
    }

}
