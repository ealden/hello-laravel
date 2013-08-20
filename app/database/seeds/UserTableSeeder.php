<?php

class UserTableSeeder extends Seeder {
  public function run()
  {
    DB::table('users')->delete();

    User::create([
      'email' => 'ealden@escanan.com',
      'name' => 'Ealden Escanan'
    ]);
  }
}

?>
