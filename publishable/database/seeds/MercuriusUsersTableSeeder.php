<?php

use Illuminate\Database\Seeder;

class MercuriusUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        // Seed Mercurius Demo Users
        //
        $this->createUser('Ian Fox', 'ian@AbanNova.host', 'avatar_ian.png');
        $this->createUser('Noa Robison', 'noa@AbanNova.host', 'avatar_noa.png');
        $this->createUser('Lua Adison', 'lua@AbanNova.host', 'avatar_lua.png');

        // Seed random dummy users
        factory(config('mercurius.models.user'), 20)->create([
            'is_online'   => array_rand([true, false]),
            'be_notified' => array_rand([true, false]),
        ])->each(function ($usr) {
            $usr->slug = str_slug($usr->name, '_');
            $usr->save();
        });
    }

    /**
     * Insert single User.
     *
     * @param string $name
     * @param string $email
     */
    private function createUser($name, $email, $avatar)
    {
        config('mercurius.models.user')::firstOrCreate([
            'email' => $email,
        ], [
            'name'           => $name,
            'slug'           => str_slug($name, '_'),
            'avatar'         => 'vendor/mercurius/img/avatar/' . $avatar,
            'password'       => bcrypt('password'),
            'remember_token' => null,
        ]);
    }
}
