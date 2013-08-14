<?php defined('SYSPATH') or die('No direct script access.');

class Application_Controller extends Controller
{
	public $layout = 'layouts/default',
	       $view,
	       $view_path;

	public function before()
	{
		$this->layout             = View::factory($this->layout);
		$this->layout->controller = $this->request->controller();
		$this->layout->action     = $this->request->action();
		$this->layout->directory  = $this->request->directory();

		$this->view_path          = strtolower(( $this->request->directory() ? $this->request->directory() : '' ).$this->request->controller().'/'.$this->request->action());
		$this->view               = View::factory($this->view_path);
	}

	public function after()
	{
		$this->response->body($this->layout->set('content', $this->view)->render());
	}
}
