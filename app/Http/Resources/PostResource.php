<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //hena b7ot ely 3awz a8yro
        return ['title ' => $this->title,
        'description' => $this->description,
        'user_id' => $this->user_id,
        ]; 
    }
}
