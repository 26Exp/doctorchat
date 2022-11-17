<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\Component;
use Illuminate\View\View;

class SpecialitiesListComponent extends Component
{
    public string $title;
    public array $specialities;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
        $terms = get_terms('speciality', array(
            'hide_empty' => false,
        ));

        $specialities = [];
        foreach ($terms as $term) {
            $specialities[] = [
                'name' => $term->name,
                'slug' => $term->slug,
                'count' => $term->count,
                'is_active' => get_queried_object()->slug === $term->slug ? 'active' : '',
                'permalink' => get_term_link($term),
            ];
        }
        $this->specialities = $specialities;
    }

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function render(): \Illuminate\Contracts\View\View|Factory|View|Application
    {
        return view('components.specialities-list-component', [
            'title' => $this->title,
            'specialities' => $this->specialities,
        ]);
    }
}
