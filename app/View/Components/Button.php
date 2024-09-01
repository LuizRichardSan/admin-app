<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Setting;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $id;

    public function __construct($title = 'Botão', $id = null)
    {
        $this->title = $title;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $settings = Setting::first();
        return view('components.button', compact('settings'));
    }
}
