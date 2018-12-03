<?php

namespace App;

use App\Entities\Product;

class Cart
{
    private $items = array();

    public function add(string $code, int $quantity):void
    {
        $product = Product::where('code', $code)->first();

        $item = $this->find($code);

        if ($item === null){
            $this->items [] = new CartItem(
                $product->code,
                $product->image_route,
                $product->name,
                $product->price,
                $quantity
            );
        }else{
            $newItem = new CartItem(
                $item->code(),
                $item->imageRoute(),
                $item->name(),
                $item->price(),
                $item->quantity() + $quantity
            );
            $this->delete($code);
            $this->items [] = $newItem;
        }
    }

    private function delete(string $code)
    {
        for ($i = 0; $i < count($this->items); $i++){
            if ($this->items[$i]->code() === $code){
                unset($this->items[$i]);
            }
        }
    }

    private function find(string $code):?CartItem
    {
        foreach ($this->items as $item){
            if ($item->code() === $code){
                return $item;
            }
        }
        return null;
    }

    public function items(): array
    {
        return $this->items;
    }

    public function total():int
    {
        $total = 0;
        foreach ($this->items as $item){
            $total = $total + $item->itemTotal();
        }
        return$total;
    }
}