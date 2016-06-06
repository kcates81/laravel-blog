<?php  
    class UserTableSeeder extends Seeder {
        public function run()
        {
            $user = new User();
            $user->email = 'kriscates81@gmail.com';
            $user->username = 'kcates';
            $user->password = $_ENV['USER_PASSWORD'];
            $user->save();
        }

    }
?>