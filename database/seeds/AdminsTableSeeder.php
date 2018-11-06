<?php
//pakai eloquent karena aksesnya ke model (yang di codepolitan)
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use query Builder

        // DB::table('admins')->insert([
        // 	'name' => str_random(10),
        // 	'email' => str_random(10).'@gmail.com',
        // 	'job_title' => str_random(10),
        // 	'password'=> bcrypt('secret'),
        // ]);

        // use eloqueent
    	// \App\Admin::create([
    	// 	'name'	=> str_random(20),
    	// 	'email'	=> str_random(10) . '@codepolitan.com',
    	// 	'job_title'	=> str_random(10),
    	// 	'password'=> bcrypt('secret'),
    	// ]);

    	// model factory
    	factory(\App\Admin::class, 3)->create();
    }
}
