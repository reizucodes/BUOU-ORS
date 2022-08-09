<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['lastName', 'firstName', 'middleName', 'birthDate', 'gender', 'email', 'phone', 'phone', 'company', 'address','applicantImage'];
    protected $table = 'applications';

    public function programs(){

        return $this->hasMany(Application::class); 
    }
}
