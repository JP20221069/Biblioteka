<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='book';
    public function toArray($request)
    {

        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'date_of_writing'=>$this->resource->date_of_writing,
            'authors' => $this->resource->authors
        ];
    }
}
