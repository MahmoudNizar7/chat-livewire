<?php

    namespace Database\Seeders;

    use App\Models\Conversation;
    use App\Models\Message;
    use Faker\Factory;
    use Illuminate\Database\Seeder;

    class MessagesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $faker = Factory::create();

            for ($i = 1; $i <= 5; $i++) {
                $conversation = Conversation::whereId($i)->with('users')->first();
                for ($s = 1; $s <= 5; $s++) {

                    Message::create([
                        'conversation_id' => $conversation->id,
                        'user_id' => $conversation->users->random()->id,
                        'body' => $faker->sentence,
                    ]);

                    $conversation->update(['last_message_at' => now()]);

                }

            }
        }
    }
