<?php

class Products {
    public $productArray = array(
        "Mold01" => array(
            'id' => '1',
            'name' => 'Angle Mold',
            'code' => 'Mold01',
            'image' => 'product-images/mold01.jpg',
            'price' => '100.00'
        ),
        "Mold02" => array(
            'id' => '2',
            'name' => 'Dome Mold',
            'code' => 'Mold02',
            'image' => 'product-images/mold02.jpg',
            'price' => '500.00'
        ),
        "Mold03" => array(
            'id' => '3',
            'name' => 'Mower Mold',
            'code' => 'Mold03',
            'image' => 'product-images/mold03.jpg',
            'price' => '1000.00'
        ),
    )
    public function getAllProduct()
    {
        return $this->productArray;
    }
}
