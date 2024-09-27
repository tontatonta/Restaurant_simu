<?php
namespace Invoices;

class Invoices{
    protected float $total;
    protected string $orderTime;

    public function __construct(float $total){
        $this->total = $total;
        $this->orderTime = date("D M d,Y G:i");
    }

    public function getFinalTotal(): float{
        return $this->total;
    }

    public function getOrderTime(): string{
        return $this->orderTime;
    }

    public function generateInvoice(){
        echo "-----------------------------------\n";
        echo "Date: ".$this->orderTime."\n";
        echo "Total: $".$this->total."\n";
        echo "-----------------------------------\n";
    }
}