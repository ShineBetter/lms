<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $type = '';
    public $icon = '';
    public $text = '';
    /**
     * Create a new component instance.
     *
     * @return void
     *
     */
    public function __construct($type = null, $icon = null, $text = null)
    {
        $this->type = $type;
        $this->icon = $icon;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
