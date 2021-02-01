<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
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
            'id'           => $this->id,
            'nombres'      => $this->nombres,
            'categoria'    => $this->categoria,
            'finicial'     => $this->finicial,
            'ffinal'       => $this->ffinal,
            'descripcion'  => $this->descripcion,
            'competencias' => $this->competencias,
            'oferta'       => $this->oferta,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at
        ];
    }
}

?>