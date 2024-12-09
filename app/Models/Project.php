<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Yang menggunakan id project
    public function gambars() {
        return $this->hasMany(Gambar::class, 'id_project', 'id_project');
    }

    protected $fillable = [
        'project_name',
        'description',
        'location',
        'year',
        'category',
        'size',
        'status',
        'client',
        'gambar'
    ];

    protected $primaryKey = 'id_project';

}
