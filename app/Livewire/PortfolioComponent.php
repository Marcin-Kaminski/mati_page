<?php

namespace App\Livewire;

use Livewire\Component;

class PortfolioComponent extends Component
{
    public $quote = 'sfx :)';
    public function render()
    {
        return view('livewire.portfolio-component');
    }

    public function goToMainPage()
    {
        return redirect()->route('main-page');
    }
}
