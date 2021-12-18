<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps=false;
    public $table ="project_leader";
    protected $primaryKey = 'leader_id';
}
