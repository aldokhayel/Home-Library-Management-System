{"filter":false,"title":"ModelFactory.php","tooltip":"/database/factories/ModelFactory.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Model Factories","|--------------------------------------------------------------------------","|","| Here you may define all of your model factories. Model factories give","| you a convenient way to create models for testing and seeding your","| database. Just tell the factory how a default model should look.","|","*/","","$factory->define(App\\User::class, function (Faker\\Generator $faker) {","    return [","        'name' => $faker->name,","        'email' => $faker->safeEmail,","        'password' => bcrypt(str_random(10)),","        'remember_token' => str_random(10),","    ];","});",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Model Factories","|--------------------------------------------------------------------------","|","| Here you may define all of your model factories. Model factories give","| you a convenient way to create models for testing and seeding your","| database. Just tell the factory how a default model should look.","|","*/","","$factory->define(App\\User::class, function (Faker\\Generator $faker) {","    return [","        'name' => $faker->name,","        'username'=> $faker->userName,","        'email' => $faker->safeEmail,","        'password' => bcrypt(str_random(10)),","","        'remember_token' => str_random(10),","    ];","});",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":0},"end":{"row":23,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1459015357000,"hash":"61daa49f0d6903944fcfdf5fa651fa7a23ae9c05"}