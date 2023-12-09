<?php

namespace App\Livewire\Raffles;

use Illuminate\Support\Facades\Request;
use Livewire\Component;


class OptionButtons extends Component
{
    public $label = 'Default option';
    public $link = '#';
    public $icon = 'lite';
    

    public function render()
    {
        $currentRoute = url()->current();
        $current_bg = 'white';
        $current_text = 'black';
        if(strpos($currentRoute, $this->link) !== false){
            $current_bg = 'green-500';
            $current_text = 'white';
        }
            
        return view('livewire.raffles.option-buttons', compact('current_bg','current_text'));
    }
}
