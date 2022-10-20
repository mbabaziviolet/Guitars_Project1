<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name' => 'gibson',
            'slug' => 'gibson',
            'quantity' => '3',
            'price' => 2570,
            'description' => 'Good guitar',
            'image' => 'https://media.istockphoto.com/photos/rock-guitarist-playing-guitar-in-a-live-show-white-background-picture-id1328150722?k=20&m=1328150722&s=612x612&w=0&h=uZ5JiOjvVfodXaz5WzQ0N7G4TNfuW1O1u3sV0X8y-Sw='
            ],
        [
            'name' => 'lessy',
            'slug' => 'lessy',
            'quantity' => '6',
            'price' => 35000,
            'description' => 'Good guitar',
            'image' => 'https://media.istockphoto.com/photos/guitar-chic-picture-id182869880?k=20&m=182869880&s=612x612&w=0&h=dRf8t8RgU1uRMsaejisIoHadmEhFSC_vob-i3W8hzEQ='
        ],
        [
            'name' => 'blackier',
            'slug' => 'blackier',
            'quantity' => '2',
            'price' => 1000,
            'description' => 'Good guitar',
            'image' => 'https://media.istockphoto.com/photos/young-africanamerican-musician-singing-playing-guitar-in-neon-light-picture-id1208849038?k=20&m=1208849038&s=612x612&w=0&h=3djq6RowwC51tSM82talFiJPFw295wK9zNpy4Y9_4os='
        ]
        ]);
    }
}
