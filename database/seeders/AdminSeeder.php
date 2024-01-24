<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'laraibhassan@ilsainterctive.com.pk',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
        ]);
        // $role = Role::findByName('writer', 'admin');
        $user->assignRole(['writer', 'admin']);
    }
}
