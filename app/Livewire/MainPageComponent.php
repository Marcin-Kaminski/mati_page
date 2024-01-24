<?php

namespace App\Livewire;

use Livewire\Component;

class MainPageComponent extends Component
{
    public int $mixPrevNumber = 0;
    public function render()
    {
//        $this->mixPrevNumber = 0;
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

    public function goToNextMix()
    {
        if ($this->mixPrevNumber === 2) {
            return;
        }
        $this->mixPrevNumber += 1;
    }

    public function goToPreviousMix()
    {
        if ($this->mixPrevNumber === 0) {
            return;
        }
        $this->mixPrevNumber -= 1;
    }
}
