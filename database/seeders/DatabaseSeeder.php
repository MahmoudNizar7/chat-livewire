<?php

    namespace Database\Seeders;

    use App\Models\Conversation;
    use App\Models\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            User::create([
                'name' => 'mahmoud',
                'email' => 'mahmoud@gmailcom',
                'email_verified_at' => now(),
                'password' => bcrypt('123123123'),
                'remember_token' => Str::random(10),
            ]);

            User::create([
                'name' => 'nizar',
                'email' => 'nizar@gmailcom',
                'email_verified_at' => now(),
                'password' => bcrypt('123123123'),
                'remember_token' => Str::random(10),
            ]);

            User::create([
                'name' => 'ahmed',
                'email' => 'ahmed@gmailcom',
                'email_verified_at' => now(),
                'password' => bcrypt('123123123'),
                'remember_token' => Str::random(10),
            ]);

            User::create([
                'name' => 'zozo',
                'email' => 'zozo@gmailcom',
                'email_verified_at' => now(),
                'password' => bcrypt('123123123'),
                'remember_token' => Str::random(10),
            ]);

            Conversation::create(['name' => 'Family Group', 'uuid' => Str::uuid(), 'user_id' => 1]);
            Conversation::create(['name' => 'Work Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
            Conversation::create(['name' => 'Friends Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
            Conversation::create(['name' => 'Guys Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
            Conversation::create(['name' => 'Art Group', 'uuid' => Str::uuid(), 'user_id' => rand(1, 4)]);
        }
    }
