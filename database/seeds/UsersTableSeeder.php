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
        $avatars = [
            'http://lorempixel.com/600/600/people/',
        ];
        
        $users = factory(User::class)
        ->times(25)
        ->make()
        ->each(function ($user, $index)
            use ($faker, $avatars)
            {
                $user->avatar = $faker->randomElement($avatars);
        });
        
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
        $user = User::find(8);
        $user->name = 'Cheng-Yo Yu';
        $user->email = 'chengyo.yu@uqconnect.edu.au';
        $user->save();
        
        
        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Founder');
        
        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->assignRole('Maintainer');
    }
}
