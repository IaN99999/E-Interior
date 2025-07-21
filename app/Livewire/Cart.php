<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $items = [];

    protected $listeners = ['addToCart' => 'addToCart'];

    public function addToCart($product)
    {
        foreach ($this->items as &$item) {
            if ($item['id'] == $product['id']) {
                $item['qty'] += 1;
                return;
            }
        }

        $product['qty'] = 1;
        $this->items[] = $product;
    }

    public function incrementQty($index)
    {
        $this->items[$index]['qty'] += 1;
    }

    public function decrementQty($index)
    {
        if ($this->items[$index]['qty'] > 1) {
            $this->items[$index]['qty'] -= 1;
        } else {
            unset($this->items[$index]);
            $this->items = array_values($this->items);
        }
    }
    public function getTotalProperty()
    {
        return collect($this->items)->sum(function ($item) {
            return $item['price'] * $item['qty'];
        });
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
