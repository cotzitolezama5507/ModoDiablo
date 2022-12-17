<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    public static function validate($request)
    {
        $request->validate([
        "descripcion" => "required|numeric|gt:0",
        "tipo" => "required|numeric|gt:0",
        ]);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDescripcion()
    {
        return $this->attributes['descripcion'];
    }
    public function setDescripcion($descripcion)
    {
        $this->attributes['descripcion'] = $descripcion;
    }
    
    public function getUserIdOrders()
    {
        return $this->attributes['user_id_orders'];
    }
    public function setUserIdOrders($user_id_orders)
    {
        $this->attributes['user_id_orders'] = $user_id_orders;
    }

    public function getTipo()
    {
        return $this->attributes['tipo'];
    }
    public function setTipo($tipo)
    {
        $this->attributes['tipo'] = $tipo;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    
    

}
