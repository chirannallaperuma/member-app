<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberModel extends Model
{
    protected $table = 'members';
    protected $fillable = ['first_name', 'last_name', 'division', 'dob', 'summary'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function divisions(){
        return $this->hasOne(DivisionModel::class,'id','division');
    }

}
