<?php

namespace App\Livewire;

use Livewire\Component;

class AboutMeComponent extends Component
{
    public function render()
    {
        return view('livewire.about-me-component');
    }
    public function goToPortfolio()
    {
        return redirect()->route('portfolio');
    }

    public function goBack()
    {
        return redirect()->route('main-page');
    }
}
