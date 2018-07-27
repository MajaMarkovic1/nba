<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::all()->each(function (App\User $u){ 
            $u->news()->saveMany(factory(App\News::class, 10)->make());
            
        });

        App\Team::all()->each(function (App\Team $t){
            $rndIds = App\Team::select('id')->take(5)->pluck('id');
            //pluck pravi niz id
            $t->news()->attach($rndIds);
        });
    }
}
