<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Pizza;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Pizzas extends Component
{
    use WithPagination;



    public $search;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render(): View
    {
        return view('livewire.pizzas', [
            'pizzas' => $this->search === null ?
                Pizza::paginate(12) :
                Pizza::where('name', 'like', '%' . $this->search . '%')->paginate(12)


        ]);
    }



    public function addToCart(int $pizzaId): void
    {
        Cart::add(Pizza::where('id', $pizzaId)->first());
        $this->emit('pizzaAdded');
    }
}
