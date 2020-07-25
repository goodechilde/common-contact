<?php

use Illuminate\Database\Seeder;

class EmailAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Goodechilde\CommonContact\Models\EmailAddress::class, 25)->create();
    }
}
