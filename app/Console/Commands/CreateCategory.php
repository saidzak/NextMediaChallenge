<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class CreateCategory extends Command
{

    protected $signature = 'create:category';


    public function handle()
    {
        $name = $this->ask('Enter Category Name');
        $parent = $this->ask('Enter Category Parent Or Type Enter');


        if($this->confirm("Please type yes to confirm the Category infos")){
        $category = Category::create([
            'name' => $name,
            'parent' => $parent,

        ]);
        return  $this->info('Category Created '. $category->name);
        }   
        $this->warn('No Category added');
    }
}
