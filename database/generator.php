<?php

use Core\Database\Generator;
use App\Models\User;
use Core\Model\DB;
use Core\Valid\Hash;

return new class implements Generator
{
    /**
     * Generate nilai database
     *
     * @return void
     */
    public function run()
    {
        foreach (['admin', 'user'] as $value) {
            DB::table('roles')->create([
                'level' => $value
            ]);
        }

        User::create([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'verified' => now(),
            'password' => Hash::make('12345678'),
            'role_id' => 1
        ]);
    }
};
