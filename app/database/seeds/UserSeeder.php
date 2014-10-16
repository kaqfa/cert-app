<?php
 
class UserSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        DB::table('users')->insert([
                'username'    => 'admin',
                'email'       => 'admin@admin.com',
                'password'    => Hash::make("a"),
                'firstname'  => 'John',
                'lastname'   => 'McClane',
                'level'       => 'A',            
                'activated'   => 1,
                'last_login'  => '0000-00-00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);

        DB::table('users')->insert([
                'username'    => 'A11.2005.02603',
                'email'       => 'elfaatta@gmail.com',
                'password'    => Hash::make("a"),
                'firstname'  => 'Fahri',
                'lastname'   => 'Firdausillah',
                'level'       => 'S',
                'activated'   => 1,
                'last_login'  => '0000-00-00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);

        DB::table('users')->insert([
                'username'    => 'adm_bappeda',
                'email'       => 'admin@bappeda.com',
                'password'    => Hash::make("a"),
                'firstname'  => 'Administrasi',
                'lastname'   => 'Bappeda',
                'level'       => 'I',
                'activated'   => 1,
                'last_login'  => '0000-00-00',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
 
}