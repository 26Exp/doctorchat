<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\Component;
use Illuminate\View\View;

class SpecialitiesListMobileComponent extends Component
{
    public array $specialities;

    public function __construct()
    {
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
        return view('components.specialities-list-mobile-component', [
            'specialities' => $this->specialities,
        ]);
    }
}
