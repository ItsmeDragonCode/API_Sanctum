<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /*
     * Transform the resource into an array.
    */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }
    public function with($request){
        return [
            'version' => 'v1.0.0',
            'developer' => 'https://github.com/soulaimaneyahya'
        ];
    }
}