<?php

use App\Model\Category;
use App\Model\Command;
use App\Model\LineCommand;
use App\Model\Product;
use App\Model\Product_Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class,50)->create();
        factory(Category::class,15)->create();
        factory(Command::class,10)->create();
        factory(LineCommand::class,30)->create();
        factory(Product_Category::class,10)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
