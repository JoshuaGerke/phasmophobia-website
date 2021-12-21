<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StartButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $message;
    public $target;

    public function __construct($message, $target)
    {
        $this->message = $message;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.start-button');
    }
}
