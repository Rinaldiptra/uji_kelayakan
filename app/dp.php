<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dp extends Model
{
    protected $table = 'dp';
    protected $fillable = ['id_dp','id_inventaris', 'jumlah'];
}
