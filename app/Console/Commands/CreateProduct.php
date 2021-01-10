<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class CreateProduct extends Command
{

    protected $signature = 'create:product';

    public function handle()
    {
        $name = $this->ask('Enter Product Name');
        $description = $this->ask('Enter Product Description');
        $category = $this->ask('Enter Product Category');
        $price = $this->ask('Enter Product price');
        $image = $this->ask('Enter Product Image Path Or Type Enter');

        if($this->confirm("Please type yes to confirm the product infos")){
        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'category' => $category,
            'price' => $price,
            'image' =>$image,
        ]);
        return  $this->info('Product Created '. $product->name);
        }   

        $this->warn('No product added');

    }
}
