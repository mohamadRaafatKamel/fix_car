<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Staf extends Model
{
    use HasFactory;

    protected $table = 'staf';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'hykl_no', 'el_gha', 'benef_phone', 'benef_id', 'send_done', 'recev_name', 'recev_lvl', 'recev_sign', 'recev_date', 'sender_name', 'sender_lvl', 'sender_sign', 'sender_date', 'acc_name', 'acc_lvl', 'acc_sign', 'acc_date', 'back_day1', 'back_date1', 'time1', 'admin_for_state1', 'recev_name1', 'recev_lvl1', 'recev_sign1', 'recev_date1', 'sender_name1', 'sender_lvl1', 'sender_sign1', 'sender_date1', 'acc_name1', 'acc_lvl1', 'acc_sign1', 'acc_date1', 'day', 'recev_time', 'admin_id', 'status', 'created_at', 'updated_at'
    ];

    public function  scopeSelection($query){

        return $query -> select(
            'id', 'hykl_no', 'el_gha', 'benef_phone', 'benef_id', 'send_done', 'recev_name', 'recev_lvl', 'recev_sign', 'recev_date', 'sender_name', 'sender_lvl', 'sender_sign', 'sender_date', 'acc_name', 'acc_lvl', 'acc_sign', 'acc_date', 'back_day1', 'back_date1', 'time1', 'admin_for_state1', 'recev_name1', 'recev_lvl1', 'recev_sign1', 'recev_date1', 'sender_name1', 'sender_lvl1', 'sender_sign1', 'sender_date1', 'acc_name1', 'acc_lvl1', 'acc_sign1', 'acc_date1', 'day', 'recev_time', 'admin_id', 'status', 'created_at', 'updated_at'
        );
    }

    public function scopeActive($query){
        return $query -> where('status',0);
    }

    public function getActive(){
        return $this -> status == 0 ? 'مفعل'  : 'غير مفعل';
    }


}
