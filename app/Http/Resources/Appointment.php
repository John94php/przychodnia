<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
class Appointment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
            return [
              'id' =>$this->id,
              'title' =>$this->title,
              'fname_patient' =>$this->fname_patient,
              'fname_doctor' =>$this->fname_doctor,
              'date' =>$this->date  
            ];
}
}
