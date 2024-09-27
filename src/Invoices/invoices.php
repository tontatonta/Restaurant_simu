<?php
namespace Invoices;

class Invoices{
    protected double $total;
    protected string $orderTime;

    public function __construct(double $total, string $orderTime){
        $this->total = $total;
        $this->orderTime = date("D M d,Y G:i");
    }

    public function getFinalTotal(): double{
        return $this->total;
    }

    public function getOrderTime(): string{
        return $this->orderTime;
    }

    public function generateInvoice(){
        echo "-----------------------------------";
        echo "Date: ".$this->orderTime;
        echo "Total: $".$this->total;
        echo "-----------------------------------";
    }
}