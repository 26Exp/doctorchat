<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DoctorCardComponent extends Component
{
    public string $name;
    public string $speciality;
    public string $avatar;
    public string $permalink;
    public string $priceChat;
    public string $priceVideo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {

        $this->name = $post->post_title;
        $this->speciality = get_the_terms($post->ID, 'speciality')[0]->name;
        $this->avatar = get_field('avatar', $post->ID) ?? 0;
        $this->permalink = get_permalink($post->ID);
        $this->priceChat = get_field('price_chat', $post->ID) ?? 0;
        $this->priceVideo = get_field('price_video', $post->ID) ?? 0;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.doctor-card-component',
            [
                'name' => $this->name,
                'speciality' => $this->speciality,
                'avatar' => $this->avatar,
                'permalink' => $this->permalink,
                'priceChat' => $this->priceChat,
                'priceVideo' => $this->priceVideo,
            ]
        );
    }
}
