<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $i = 0;
        while ($i < 20)
        {
            $rand_usr = User::all()->random();
            $rand_book = Book::all()->random();
            DB::table('user_book')->insert(
            [
                'user_id' => $rand_usr->id,
                'book_id' => $rand_book->id
            ]);
            $i++;
        }
    }
}
