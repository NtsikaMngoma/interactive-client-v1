<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PersonCard extends Component{
    public $persons;

    public function __construct($persons)
    {
        $this->persons = $persons;
    }

    public function render()
    {
        return view('components.person-list');
    }
}
