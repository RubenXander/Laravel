<?php


namespace App\Helpers;


use App\Models\Pizza;

class Cart
{
    public function __construct()
    {
        if($this->get() === null)
            $this->set($this->empty());
    }

    public function add(Pizza $pizza): void
    {
        $cart = $this->get();
        $cartPizzasIds = array_column($cart['pizzas'], 'id');
        $pizza->amount = !empty($pizza->amount) ? $pizza->amount : 1;

        if (in_array($pizza->id, $cartPizzasIds)) {
            $cart['pizzas'] = $this->pizzaCartIncrement($pizza->id, $cart['pizzas']);
            $this->set($cart);
            return;
        }

        array_push($cart['pizzas'], $pizza);
        $this->set($cart);
    }

    public function remove(int $pizzaId): void
    {
        $cart = $this->get();
        array_splice($cart['pizzas'], array_search($pizzaId, array_column($cart['pizzas'], 'id')), 1);
        $this->set($cart);
    }

    public function clear(): void
    {
        $this->set($this->empty());
    }

    public function empty(): array
    {
        return [
            'pizzas' => [],
        ];
    }

    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }

    private function pizzaCartIncrement($pizzaId, $cartItems)
    {
        $amount = 1;
        $cartItems = array_map(function ($item) use ($pizzaId, $amount) {
            if ($pizzaId == $item['id']) {
                $item['amount'] += $amount;
                $item['price'] += $item['price'];
            }

            return $item;
        }, $cartItems);

        return $cartItems;
    }
}
