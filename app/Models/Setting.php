<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_logo',
        'primary_color',
        'type'
    ];

    // Para garantir que 'type' seja tratado como um enum
    public function getTypeAttribute($value)
    {
        return $value === 0 ? 'produto' : 'serviço';
    }

    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = $value === 'produto' ? 0 : 1;
    }
}
