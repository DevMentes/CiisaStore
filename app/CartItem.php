<?php

namespace App;

class CartItem
{

    private $code;

    private $imageRoute;

    private $name;

    private $price;

    private $quantity;

    public function __construct(
        string $code, string $imageRoute, string $name, int $price, int $quantity
    )
    {
        $this->code = $code;
        $this->imageRoute = $imageRoute;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function code():string
    {
        return $this->code;
    }

    public function imageRoute():string
    {
        return $this->imageRoute;
    }

    public function name():string
    {
        return $this->name;
    }

    public function price():int
    {
        return $this->price;
    }
    public function quantity():int
    {
        return $this->quantity;
    }

    public function increase(int $quantity)
    {
        $this->quantity = $this->quantity + $quantity;
    }

    public function itemTotal():int
    {
        return $this->price * $this->quantity;
    }
}