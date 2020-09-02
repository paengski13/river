<?php

use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'full_name' => "Rafael Torres",
                'reserved_date' => '2020-10-13',
                'reserved_time' => '09:00:01',
                'message' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            ],
            [
                'full_name' => "Isaac Rolfe",
                'reserved_date' => '2020-10-14',
                'reserved_time' => '10:00:01',
                'message' => "consectetur adipiscing e Lorem ipsum dolor sit ametlit, sed do eiusmod tempor",
            ],
            [
                'full_name' => "Alex Osborn",
                'reserved_date' => '2020-10-15',
                'reserved_time' => '10:00:01',
                'message' => "dolor sit ametlit consectetur adipiscing e Lorem ipsum , sed do eiusmod tempor",
            ],
        ];

        foreach ($data as $row) {
            \App\Booking::create($row);
        }
    }
}
