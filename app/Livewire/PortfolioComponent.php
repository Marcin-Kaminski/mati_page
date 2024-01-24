<?php

namespace App\Livewire;

use Livewire\Component;

class PortfolioComponent extends Component
{
    public function render()
    {
        return view('livewire.portfolio-component');
    }

    public function goToAboutMe()
    {
        return redirect()->route('about-me');
    }

    public function goBack()
    {
        return redirect()->route('main-page');
    }
}
