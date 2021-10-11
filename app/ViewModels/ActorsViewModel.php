<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;

    public function __construct($popularActors)
    {
        $this->popularActors = $popularActors;
    }

    public function popularActors()
    {
        return collect($this->popularActors)->map(function ($actor) {
            return collect($actor)->merge(
                [
                    'profile_path' => $actor['profile_path'] ?
                        'https://image.tmdb.org/t/p/w235_and_h235_face/' . $actor['profile_path'] :
                        'https://ui-avatars.com/api/?size=235&name=' . $actor['name'],

                    'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                        collect($actor['known_for'])->where('media_type', 'tv')->pluck('name')
                    )->implode(', '),
                ]
            )->only([
                'id', 'name', 'profile_path', 'known_for'
            ]);
        });
    }
}
