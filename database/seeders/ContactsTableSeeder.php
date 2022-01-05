<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Contact::factory(35)->create();
        // $this->call(ContactSeeder::class);
        factory(Contact::class, 35)->create();
    }
}