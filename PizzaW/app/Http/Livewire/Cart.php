<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Facades\Cart as CartFacade;

class Cart extends Component
{
    public $cart;

    public function mount(): void
    {
        $this->cart = CartFacade::get();
    }
    public function render()
    {
        return view('livewire.cart');
    }
    public function removeFromCart($pizzaId): void
    {
        CartFacade::remove($pizzaId);
        $this->cart = CartFacade::get();
        $this->emit('pizzaRemoved');
    }
    public function checkout(): void
    {
        CartFacade::clear();
        $this->emit('clearCart');
        $this->cart = CartFacade::get();
    }
}
