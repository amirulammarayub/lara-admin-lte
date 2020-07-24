<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
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
            'id'         => $this->staff_id,
            'name'       => $this->name,
            'added_by'   => $this->added_by,
            'email'      => $this->email,
            'phone'      => $this->phone,
            //
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
