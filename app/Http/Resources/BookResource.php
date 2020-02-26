<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $base_url_cover_image = url('/').'/public/book_cover_images/';
        return [
            'name' => $this->title,
            'image' => $base_url_cover_image.$this->cover_image,
        ];
    }
}
