<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name'=>'isiaka ibrahim',
            'email'=>'isibrahim@gmail.com',
            
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::factory(20)->create([
            'user_id'=> $user->id,
        ]);
        User::factory(20)->create();

        /* Listing::create([
            'user_id'=> $user->id;
        ]); */
            /* 
                'title'=>'Laravel Senior Developer',
                'tags'=>'Laravel,Javascript',
                'company'=>'Acme Corp',
                'location'=>'Boston,MA',
                'email'=>'acme@gmail.com',
                'website'=>'https://www.acme.com',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aliquid, porro perferendis dolores eaque tempora commodi beatae, 
                                facilis adipisci harum ducimus incidunt tempore corporis ullam 
                                molestias voluptas nulla veritatis et ut!',
        ]);
        Listing::create([ */
            
       /*      'title'=>'Full-Stack Engineer',
            'tags'=>'Laravel,backend,api',
            'company'=>'Stark Indutries',
            'location'=>'New York,NY',
            'email'=>'stark@gmail.com',
            'website'=>'https://www.starkindustries.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquid, porro perferendis dolores eaque tempora commodi beatae, 
                            facilis adipisci harum ducimus incidunt tempore corporis ullam 
                            molestias voluptas nulla veritatis et ut!',
        ]);
        Listing::create([
            
            'title'=>'Junior FullStack Developer',
            'tags'=>'Laravel,vue Js',
            'company'=>'multilent Developer',
            'location'=>'Abuja NG',
            'email'=>'multilent@gmail.com',
            'website'=>'https://www.multilent.com',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aliquid, porro perferendis dolores eaque tempora commodi beatae, 
                            facilis adipisci harum ducimus incidunt tempore corporis ullam 
                            molestias voluptas nulla veritatis et ut!',
        ]); */
            
        
    }
}
