<?php

namespace Apackage\Astore\database\seeders;



use Apackage\Astore\Models\Diller;
use Apackage\Astore\Models\Product;
use Apackage\Astore\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Astore\Models;
use TCG\Voyager\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(3)->create();
        Diller::factory(3)->create();
        Warehouse::factory(3)->create();
        Product::factory(3)->create();
    }
}
