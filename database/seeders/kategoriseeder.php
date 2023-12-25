<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori - ['novel','sejarah','religi','biografi','komik'];

        foreach($kategori as $value)(
            kategori::create([
                'nama'=> 'novel',
                'slug'=> Str::slug('novel')
            ]);

        )
       
    }
}
