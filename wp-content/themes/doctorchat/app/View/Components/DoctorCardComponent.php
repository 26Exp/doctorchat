<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DoctorCardComponent extends Component
{
    public string $name;
    public string $specialization;
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
        // make curl request to get doctor data
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => get_field('api_app', 'options') . "/doctors/". (int)get_field('app_id', $post->ID) ."/price",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: max-age=604800",
                "content-type: application/json",
            ),
        ));

        $prices = json_decode(curl_exec($curl));
        $this->name = $post->post_title;
        $this->specialization = get_field('specialization', $post->ID) ?? '';
        $this->avatar = get_field('avatar', $post->ID) ?? asset('svgs/doctor.svg');
        $this->permalink = get_permalink($post->ID);
        $this->priceChat = $prices->chat ?? '-';
        $this->priceVideo = $prices->meet ?? '-';
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
                'specialization' => $this->specialization,
                'avatar' => $this->avatar,
                'permalink' => $this->permalink,
                'priceChat' => $this->priceChat,
                'priceVideo' => $this->priceVideo,
            ]
        );
    }
}
