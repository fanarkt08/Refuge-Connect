<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Animal extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $name;
    public $species;
    public $age;
    public $description;
    public $photo;
    public function __construct($id, $name, $species, $age, $description, $photo, $detailsRoute=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->description = $description;
        $this->photo = $photo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
