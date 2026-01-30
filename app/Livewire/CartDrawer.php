<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class CartDrawer extends Component
{
    // public $cartItems = []; // REMOVED: Caused serialization error

    #[On('cartUpdated')] 
    public function refreshCart()
    {
        // Just listening triggers a re-render
    }

    public function updateQuantity($rowId, $quantity)
    {
        if ($quantity < 1) {
            $quantity = 1;
        }
        Cart::update($rowId, ['qty' => $quantity]);
        $this->dispatch('cartUpdated');
    }

    public function increaseQuantity($rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($rowId, $item->qty + 1);
        $this->dispatch('cartUpdated');
    }

    public function decreaseQuantity($rowId)
    {
        $item = Cart::get($rowId);
        if ($item->qty > 1) {
            Cart::update($rowId, $item->qty - 1);
            $this->dispatch('cartUpdated');
        }
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart-drawer', [
            'cartItems' => Cart::content(), // Pass directly to view
            'subtotal'  => Cart::subtotal(),
            'count'     => Cart::count()
        ]);
    }
}
