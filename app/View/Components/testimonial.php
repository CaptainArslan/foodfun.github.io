<?php

namespace App\View\Components;

use Illuminate\View\Component;

class testimonial extends Component
{
    public $testimonial;
    public function __construct($testimonial)
    {
        //
        $this->testimonial = $testimonial;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
