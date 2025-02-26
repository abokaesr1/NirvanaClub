<?php

namespace App\View\Components\Home;

use App\Models\Faq as ModelsFaq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
{
    /**
     * Create a new component instance.
     */
    public $faq;
    public function __construct()
    {
        $this->faq = ModelsFaq::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.faq', [
            'faq' => $this->faq,
        ]);
    }
}
