<?php

use Illuminate\Database\Seeder;

class SocialMediaAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Goodechilde\CommonContact\Models\SocialMediaAddress::class, 25)->create();
    }
}
