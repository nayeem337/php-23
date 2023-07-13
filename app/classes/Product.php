<?php


namespace App\classes;


class product
{
    public $products;
    public function __construct()
    {
        $this->products = [
            0=>[
                'id' => 1,
                'title'=> 'Blue T shirt',
                'price'=> 17500,
                'color'=> 'Blue',
                'size' => 'XL',
                'image'=>'team-1.jpg',
                'Short- description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'Long=Description' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse expedita nesciunt omnis, provident quia?'

            ],
            1=>[
                'id' => 2,
                'title'=> 'Blue T shirt',
                'price'=> 7500,
                'color'=> 'Blue',
                'size' => 'XXL',
                'image'=>'team-2.jpg',
                'Short- description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'Long=Description' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse expedita nesciunt omnis, provident quia?'

            ],
            2=>[
                'id' => 3,
                'title'=> 'Sony Mobile',
                'price'=> 57700,
                'color'=> 'Black',
                'size' => '6.8"',
                'image'=>'team-3.jpg',
                'Short- description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'Long=Description' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse expedita nesciunt omnis, provident quia?'

            ],
            3=>[
                'id' => 4,
                'title'=> 'Samsung Mobile',
                'price'=> 177500,
                'color'=> 'Blue',
                'size' => '7.2"',
                'image'=>'team-4.jpg',
                'Short- description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'Long=Description' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse expedita nesciunt omnis, provident quia?'

            ],
            4=>[
                'id' => 5,
                'title'=> 'Iphone ',
                'price'=> 1757700,
                'color'=> 'Blue',
                'size' => '6.2"',
                'image'=>'about.jpg',
                'Short- description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'Long=Description' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse expedita nesciunt omnis, provident quia?'

            ],
            5=>[
                'id' => 6,
                'title'=> 'Gold color sari',
                'price'=> 1778500,
                'color'=> 'Blue',
                'size' => '12hands',
                'image'=>'team-1.jpg',
                'Short- description'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'Long=Description' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque esse expedita nesciunt omnis, provident quia?'

            ],
        ];
    }
    public function index()
    {
        return $this->products;
    }

    public function getProductDetails($productId)
    {
        foreach ($this->products as $product)
        {
            if($product['id'] == $productId)
            {
                return $product;
            }
        }
    }

}