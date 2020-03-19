<?php

use Illuminate\Database\Seeder;

class PurchaseOrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PurchaseOrderItens::truncate();
        factory(App\PurchaseOrderItens::class, 10)->create();
    }
}
