<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{

    public function projects() {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }

    protected $fillable = [
        'id_project',
        'image_name',
        'image_desc'
    ];

    protected $primaryKey = 'id_image';

    use HasFactory;
}
