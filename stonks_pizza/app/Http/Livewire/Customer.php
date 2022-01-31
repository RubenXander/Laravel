<?php

namespace App\Http\Livewire;

use App\Models\Customers;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{
    use WithPagination;

    public $first_name;
    public $last_name;
    public $address;
    public $phone;
    public $zipcode;
    public $city;
    public $pizza_points;
    public $customer_id;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'address' => 'required',
        "phone" => "required",
        "zipcode" => "required",
        "city" => "required",
        "pizza_points" => "required",
    ];

    public function storeCustomer()
    {
        $this->validate();
        $customer = Customers::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => $this->address,
            'phone' => $this->phone,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'pizza_points' => $this->pizza_points,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        $this->customer_id = $customer->id;
        $this->first_name = $customer->first_name;
        $this->last_name = $customer->last_name;
        $this->address = $customer->address;
        $this->phone = $customer->phone;
        $this->zipcode = $customer->zipcode;
        $this->city = $customer->city;
        $this->pizza_points = $customer->pizza_points;

    }

    public function update()
    {
        $customer = Customers::updateOrCreate(
            [
                'id'   => $this->customer_id,
            ],
            [
                'first_name' => $this->first_name,
                'last_name'=> $this->last_name,
                'address' => $this->address,
                'phone' => $this->phone,
                'zipcode' => $this->zipcode,
                'city' => $this->city,
                'pizza_points' => $this->pizza_points,
            ],

        );

        $this->reset();
    }

    public function destroy($id)
    {
        Customers::destroy($id);
    }


    public function render()
    {
        return view('livewire.customer',['customers' => Customers::latest()->paginate(10)]);
    }
}
