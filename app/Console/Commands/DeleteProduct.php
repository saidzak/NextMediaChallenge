<?php

namespace App\Console\Commands;
use App\Models\Product;

use Illuminate\Console\Command;

class DeleteProduct extends Command
{

    protected $signature = 'delete:product';

    public function handle()
    {
        $name = $this->ask('Enter The Product Exact Name');
        $prods = Product::all();

        if($this->confirm("Please type yes to confirm")){        
            foreach($prods as $prod){
                if($name == $prod->name){
                    Product::destroy($prod->id);
                    return $this->info('Product Deleted');
                }
            }
        }
        return $this->warn('Nothing Deleted');
    }
}
