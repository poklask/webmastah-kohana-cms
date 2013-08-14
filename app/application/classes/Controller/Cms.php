<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cms extends Application_Controller
{

	public function action_index()
	{
		
	}

	public function action_read()
	{
		//przypisanie parametru z routingu <uri> do zmiennej $uri
		$uri  = $this->request->param('uri');
		//przypisanie do zmiennej $page instancji klasy ORM utworzonej na modelu.
		$page = ORM::factory('page')->where('slug','=',$uri)->find();

		//sprawdzenie czy wpis bazy danych gdzie 'slug = $uri' został odnaleziony.
		//jeśli nie to zwracamy błąd 404
		if(!$page->loaded()) throw HTTP_Exception::factory(404, 'Strona nie istnieje!');

		//przekazanie obiektu $page (nasza pobrana strona) do widoku /views/cms/read.php
		$this->view->page = $page;
	}

}
