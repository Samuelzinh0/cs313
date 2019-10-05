<?php

class Product
{

    public $productArray = array(
        "Moulding01" => array(
            'id' => '1',
            'name' => 'Angle Mold',
            'code' => '3DcAM01',
            'image' => 'product-images/mold01.jpg',
            'price' => '100.00'
        ),
        "Moulding02" => array(
            'id' => '2',
            'name' => 'Dome Mold',
            'code' => 'USB02',
            'image' => 'product-images/mold02.jpg',
            'price' => '500.00'
        ),
        "Moulding03" => array(
            'id' => '3',
            'name' => 'Mower Mold',
            'code' => 'wristWear03',
            'image' => 'product-images/mold03.jpg',
            'price' => '1000.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
