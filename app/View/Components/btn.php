<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btn extends Component
{
    public $title = '';
    public $class = '';
    public $route = '';
    public $routeParam = '';
    public $aclass = '';
    public $type = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title =null,$class =null,$route =null,$routeParam =null,$aclass =null,$type =null)
    {
        $this->title = $title;
        $this->class = $class;
        $this->route = $route;
        $this->routeParam = $routeParam;
        $this->aclass = $aclass;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.btn');
    }
}
