<?php

namespace App\Livewire;

use Livewire\Component;

class AboutMeComponent extends Component
{
    public int $age;
    public function render()
    {
        $age = $this->setAge();
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

    public function setAge()
    {
        $this->age = date('Y') - 2003;
    }
}
