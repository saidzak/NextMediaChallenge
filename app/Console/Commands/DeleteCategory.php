<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class DeleteCategory extends Command
{
    protected $signature = 'delete:category';

    public function handle()
    {
        $name = $this->ask('Enter The Categorys Exact Name');
        $cats = Category::all();
        
        if($this->confirm("Please type yes to confirm")){    
            foreach($cats as $cat){
                if($name == $cat->name){
                    Category::destroy($cat->id);
                    return $this->info('Category Deleted');
                }
            }
        }
        return $this->warn('Nothing Deleted');
    }
}
