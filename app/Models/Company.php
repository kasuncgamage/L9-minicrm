<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'web_site',
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class, 'company_id','id');
    }

    public static function company_list(){
        return self::pluck('name', 'id');
    }
}
