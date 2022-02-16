<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Altaha',
            'email' => 'alta@gmail.com',
            'password' => bcrypt('asd')
        ]);

        User::create([
            'name' => 'Daniil Kyvat',
            'email' => 'daniil@redbull.com',
            'password' => bcrypt('asd')
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Football',
            'slug' => 'football',
        ]);


        Post::create([
            'title' => 'Man United Go to School',
            'category_id' => 1,
            'slug' => 'manutdgotoschool',
            'excerpt' => 'Man United Go to School the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.',
            'body' => '<p>Man United Go to School the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.</p><p>The Uruguayan picked up a groin injury in training last Friday, and received treatment throughout the hours leading up to the Southampton game on Saturday, but couldnt make the squad. The interim manager described Edis problem as a minor muscle injury, but said that it was pointless to risk players when a scan revealed an issue.</p>',
            'author' => 'Joe Ganley',
            'user_id'=>2

        ]);


        Post::create([
            'title' => 'Chelsea Win Champions League',
            'category_id' => 1,
            'slug' => 'Chelsea_Win_Champions_League',
            'excerpt' => 'Chelsea Win Champions League the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.',
            'body' => '<p>Chelsea Win Champions League the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.</p><p>The Uruguayan picked up a groin injury in training last Friday, and received treatment throughout the hours leading up to the Southampton game on Saturday, but couldnt make the squad. The interim manager described Edis problem as a minor muscle injury, but said that it was pointless to risk players when a scan revealed an issue.</p>',
            'author' => 'Joe Ganley',
            'user_id'=>1
        ]);


        Post::create([
            'title' => 'Barcelona with New Stadium',
            'category_id' => 2,
            'slug' => 'Barcelona_with_New_Stadium',
            'excerpt' => 'Barcelona with New Stadium the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.',
            'body' => '<p>Barcelona with New Stadium the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.</p><p>The Uruguayan picked up a groin injury in training last Friday, and received treatment throughout the hours leading up to the Southampton game on Saturday, but couldnt make the squad. The interim manager described Edis problem as a minor muscle injury, but said that it was pointless to risk players when a scan revealed an issue.</p>',
            'author' => 'Joe Ganley',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Liverpool Fasting',
            'category_id' => 1,
            'slug' => 'Liverpool Fasting',
            'excerpt' => 'Liverpool Fasting Stadium the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.',
            'body' => '<p>Liverpool Fasting Stadium the eye playing for CF Palautordera from the age of seven, and after a spell at Damm he was brought to La Masia in 2004. Pulling goals out of his pockets, he quickly became one of the most promising rising young stars at the club.</p><p>The Uruguayan picked up a groin injury in training last Friday, and received treatment throughout the hours leading up to the Southampton game on Saturday, but couldnt make the squad. The interim manager described Edis problem as a minor muscle injury, but said that it was pointless to risk players when a scan revealed an issue.</p>',
            'author' => 'Joe Ganley',
            'user_id' => 2
        ]);
    }
}
