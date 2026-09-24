<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {

public static function all(): array{

return [

['id' => 1, 'title' => 'Diretor', 'salary' => 'R$ 50.000'],
['id' => 2, 'title' => 'Professor', 'salary' => 'R$ 5.000'],
['id' => 3, 'title' => 'Programador', 'salary' => 'R$ 10.000'],

];

}

public static function findById(int $id): array{

$job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

if(!$job){
    abort(404);
}
return $job;
}

}

