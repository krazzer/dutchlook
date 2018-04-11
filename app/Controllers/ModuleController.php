<?php


namespace Website\Controllers;


use KikCMS\Controllers\BaseCmsController;
use Website\DataTables\Projects;

class ModuleController extends BaseCmsController
{
    /**
     * Display Projects DataTable
     */
    public function projectsAction()
    {
        $this->view->title  = 'Projecten';
        $this->view->object = (new Projects)->render();
        $this->view->pick('cms/default');
    }
}