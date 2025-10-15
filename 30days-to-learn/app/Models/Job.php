<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{

    public static function all(): array
    {
        return [
            [
            'id' => 0,
            'title' => 'architect',
            'salary' => 2000,
            ],
            [
            'id' => 1,
            'title' => 'developer',
            'salary' => 3000,
            ],
            [
            'id' => 2,
            'title' => 'designer',
            'salary' => 2500,
            ],
        ];
    }

    public static function find($id): array
    {
        $job = Arr::first(self::all(), fn ($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        }
        return $job;
    }
}
