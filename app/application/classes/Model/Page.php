<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM
{
    protected $_table_name = 'pages';

    public function generate_slug()
    {
        return url::title($this->title, '-', true);
    }
}