<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class CartPage extends Component
{
    public $quantities = [];


    public function mount()
    {
        $this->refreshLocalQuantities();
    }

    #[On('cartUpdated')]
    public function refreshLocalQuantities()
    {
        $this->quantities = [];
        foreach (Cart::content() as $item) {
            $this->quantities[$item->rowId] = $item->qty;
        }
    }

    public function updatedQuantities($value, $rowId)
    {
        if ($value < 1) {
            $value = 1;
            // Force reset the input value in UI if user tries to go below 1
            $this->quantities[$rowId] = 1;
        }

        Cart::update($rowId, ['qty' => $value]);
        $this->dispatch('cartUpdated');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        $this->refreshLocalQuantities();
        $this->dispatch('cartUpdated');
    }

    public function clear()
    {
        Cart::destroy();
        $this->refreshLocalQuantities();
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart-page', [
            'cart_products' => Cart::content(),
            'total_qty'     => Cart::count(),
            'sum'           => Cart::subtotal(),
            'products'      => Product::latest()->take(8)->get(),
        ]);
    }
}
