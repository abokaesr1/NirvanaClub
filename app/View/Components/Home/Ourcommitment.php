<?php

namespace App\View\Components\Home;

use App\Models\Ourcommitment as ModelsOurcommitment;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Ourcommitment extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $ourcommitment = ModelsOurcommitment::first();
        //dd($ourcommitment);
        return view('components.home.ourcommitment',compact('ourcommitment'));
    }
}
