<?php

namespace App\View\Components;

use Illuminate\View\Component;

class nameList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /*
     * Create message variable
     *
     * @var string
     *
     * */
    public $messageData;




    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.name-list');
    }
}
