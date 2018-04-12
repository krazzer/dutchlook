<?php


namespace Website\Controllers;


use KikCMS\Controllers\BaseCmsController;
use Website\DataTables\Clients;
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

    /**
     * Display Clients DataTable
     */
    public function clientsAction()
    {
        $this->view->title  = 'Klanten';
        $this->view->object = (new Clients)->render();
        $this->view->pick('cms/default');
    }
}