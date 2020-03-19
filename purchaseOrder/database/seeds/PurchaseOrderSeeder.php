<?php

use Illuminate\Database\Seeder;

class PurchaseOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PurchaseOrder::truncate();
        factory(App\PurchaseOrder::class, 10)->create();
    }
}
