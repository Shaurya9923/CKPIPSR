<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    //
    protected $table='news';
    protected $primaryKey='newsid';
    protected $guarded = []; 

    public static function add($data){
        $new = new News;
        $new->fill($data);
        $new->save();
    }

    public function edit($data){
        $this->fill($data);
        $this->save();
     }
}
