<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);
        
        $users = factory(User::class)->times(10)->make();
        
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();
        
        User::insert($user_array);
        
        
        #dealing with the first account
        $user = User::find(1);
        $user->name = 'Sara Dolnicar';
        $user->email = 's.dolnicar@uq.edu.au';
        $user->save();
        
        $user = User::find(2);
        $user->name = 'Menglong';
        $user->email = 'menglong.li@uq.net.au';
        $user->save();
        $user = User::find(3);
        $user->name = 'Junwang';
        $user->email = 'will_uq@outlook.com';
        $user->save();
        $user = User::find(4);
        $user->name = 'Yanan';
        $user->email = 'yanan.xie@uq.net.au';
        $user->save();
        $user = User::find(5);
        $user->name = 'Xuxin';
        $user->email = 'xuxin.guo@uq.net.au';
        $user->save();
        $user = User::find(6);
        $user->name = 'Tianhao';
        $user->email = 'tianhao.zhang@uq.net.au';
        $user->save();
        $user = User::find(7);
        $user->name = 'Matthew D Souza';
        $user->email = 'm.dsouza@uq.edu.au';
        $user->save();
    }
}
