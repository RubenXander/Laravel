<?php

namespace App\Http\Livewire;

use App\Models\Pizza;
use Livewire\Component;
use Livewire\WithPagination;

class PizzaForm extends Component
{

    use WithPagination;

    public $name;
    public $price;
    public $description;
    public $image;
    public $pizza_id;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        "image" => "required",
    ];

    public function storePizza()
    {
        $this->validate();
        $pizza = Pizza::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $pizza = Pizza::find($id);
        $this->pizza_id = $pizza->id;
        $this->name = $pizza->name;
        $this->price = $pizza->price;
        $this->description = $pizza->description;
        $this->image = $pizza->image;
    }

    public function update()
    {
        $pizza = Pizza::updateOrCreate(
            [
                'id'   => $this->pizza_id,
            ],
            [
                'name' => $this->name,
                'price'=> $this->price,
                'description' => $this->description,
                'image' => $this->image,
            ],

        );

        $this->reset();
    }

    public function destroy($id)
    {
        Pizza::destroy($id);
    }


    public function render()
    {
        return view('livewire.pizza-form', ['pizzas' => Pizza::latest()->paginate(10)]);
    }
}
