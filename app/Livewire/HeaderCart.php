<?php

namespace App\Livewire;

use Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class HeaderCart extends Component
{
    public $cartCount = 0;

    public function mount()
    {
        $this->cartCount = Cart::count();
    }

    #[On('cartUpdated')]
    public function refreshCount()
    {
        $this->cartCount = Cart::count();
    }

    public function render()
    {
        return view('livewire.header-cart');
    }
}
