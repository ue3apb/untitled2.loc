<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => "PHP is awesome",
                    'alias' => "php_is_awesome",
                    'intro' => "играция будет помещена в папку database/migrations и будет содержать метку времени",
                    'body' => "сли вы хотите указать свой путь для сохранения создаваемых миграций, используйте параметр 
                    --path при запуске команды make:migration. Этот путь должен быть указан относительно базового пути 
                    вашего приложения."
                ],
                [
                    'title' => "Laravel 5.4",
                    'alias' => "laravel5.4",
                    'intro' => "играция будет помещена в папку database/migrations и будет содержать метку времени",
                    'body' => "сли вы хотите указать свой путь для сохранения создаваемых миграций, используйте параметр 
                    --path при запуске команды make:migration. Этот путь должен быть указан относительно базового пути 
                    вашего приложения."
                ],
                [
                    'title' => "Thank to seeder",
                    'alias' => "seeds",
                    'intro' => "играция будет помещена в папку database/migrations и будет содержать метку времени",
                    'body' => "сли вы хотите указать свой путь для сохранения создаваемых миграций, используйте параметр 
                    --path при запуске команды make:migration. Этот путь должен быть указан относительно базового пути 
                    вашего приложения."
                ]
            )
        );
    }
}
