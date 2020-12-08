<?php

namespace App\View\Components;

use Illuminate\View\Component;

class delbtn extends Component
{
    public $route = '';
    public $id = '';
    public $multiParameter = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route = null,$id = null,$multiParameter = null)
    {
        $this->route = $route;
        $this->id = $id;
        $this->multiParameter = $multiParameter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.delbtn');
    }
}
