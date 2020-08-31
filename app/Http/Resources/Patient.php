<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Patient extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
            return [
                'id' =>$this->id,
                'fname' =>$this->fname,
                'PESEL'=>$this->PESEL,
                'tel' =>$this->tel,
                'email' =>$this->email,
                'zipcode' =>$this->zipcode,
                'city' =>$this->city,
                'street' =>$this->street,
                'house' =>$this->house,
                'flat' =>$this->flat
            ];
    }
}
