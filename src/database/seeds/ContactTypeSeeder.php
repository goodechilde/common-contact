<?php


use Illuminate\Database\Seeder;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Goodechilde\CommonContact\Models\ContactType::class, 40)->create();
    }
}
