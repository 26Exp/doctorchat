<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostAuthorCardMeta extends Component
{
    public $name;
    public $date;
    public $avatar;
    public $specialization;
    public $url;
    public $about;
    public $show = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (get_field('show_author_box')){
            $this->show = true;
            $doctor = get_posts([
                'post_type' => 'doctors',
                'meta_query' => [
                    [
                        'key' => 'doctor',
                        'value' => get_the_author_meta('ID'),
                        'compare' => '=',
                    ],
                ],
            ]);

            $this->name = $doctor[0]->post_title;
            $this->avatar = get_field('avatar', $doctor[0]->ID);
            $this->specialization = get_field('specialization', $doctor[0]->ID);
            $this->about = get_field('about', $doctor[0]->ID);
            $this->date = get_post_time('c', true);
            $this->url = get_permalink($doctor[0]->ID);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->show){
            return view('components.post-author-card-meta');
        }
    }
}
