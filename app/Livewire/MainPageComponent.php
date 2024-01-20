<?php

namespace App\Livewire;

use Livewire\Component;

class MainPageComponent extends Component
{
    public $hello = 'sfx';
    public function render()
    {
        return view('livewire.main-page-component');
    }

    public function goToPortfolio()
    {
        return redirect()->route('portfolio');
    }

    public function goToAboutMe()
    {
        return redirect()->route('about-me');

    }
}
