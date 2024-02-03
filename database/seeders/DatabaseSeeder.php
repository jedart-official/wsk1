<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Avatar;
use App\Models\Place;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        $rooms = [
            ['The Office', 4],
            ['Meeting room', 15],
            ['Desk', 3],
            ['Open Office', 9],
            ['Silent room 1', 1],
            ['Kitchen', 5],
            ['Silent room 2', 1],
            ['Breakroom', 5],
            ['Open office 2', 4],
            ['Silent room 3', 2]
        ];

        for ($i = 1; $i < 20; $i++) {
            $item = $i > 9 ? $i : '0' . $i;
            Avatar::query()->create([
                'path' => '/images/avatars/' . 'avatar-' . $item . '.svg',
            ]);
        }

        foreach ($rooms as $room) {
            $room_db = Room::query()->create(['name' => $room[0]]);
            for ($place = 0; $place < $room[1]; $place++) {
                Place::query()->create([
                    'number' => $place,
                    'room_id' => $room_db->id,
                ]);
            }
        }
    }
}
