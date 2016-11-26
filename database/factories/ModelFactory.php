<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\InstrucaoInicial::class, function (Faker\Generator $faker) {
    return [
        'instrucaoTxt' => $faker->text($maxNbChars = 255),
    ];
});

$factory->define(App\Models\Mensagem::class, function (Faker\Generator $faker) {
    return [
        'mensagemTxt' => $faker->text($maxNbChars = 255),
    ];
});

$factory->define(App\Models\Pergunta::class, function (Faker\Generator $faker) {
    return [
        'perguntaTxt' => $faker->text($maxNbChars = 255),
    ];
});

$factory->define(App\Models\Tempo::class, function (Faker\Generator $faker) {
    return [
        'total' => '00:'.$faker->numberBetween($min=01, $max=59).':'.$faker->numberBetween($min=00, $max=59),
        'ordem' => $faker->randomElement(['crescente', 'decrescente']),
        'mudandoEm' => '00:00:00',
        'visibilidadeInicial' => $faker->randomElement(['visível', 'invisível'])
    ];
});