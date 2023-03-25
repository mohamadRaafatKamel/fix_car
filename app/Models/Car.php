<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'sanaf_id', 'car_type', 'car_model', 'color_in', 'color_out', 'hykl_no', 'car_no', 'car_category', 'eltazlel', 'eltasfe7', 'subsidiary', 'admin_id', 'status', 'created_at', 'updated_at'    
        ,'img'
    ];

    public function  scopeSelection($query){
        return $query -> select(
            'id', 'sanaf_id', 'car_type', 'car_model', 'color_in', 'color_out', 'hykl_no', 'car_no', 'car_category', 'eltazlel', 'eltasfe7', 'subsidiary', 'admin_id', 'status', 'created_at', 'updated_at'    
            ,'img'
        );
    }

    // public function scopeActive($query){
    //     return $query -> where('status',0);
    // }

    public function getActive(){
        // return $this -> status == 0 ? 'مفعل'  : 'غير مفعل';
        switch ($this->status){
            case 1:
                return "مخزن";
                break;
            case 2:
                return "مسلم";
                break;
            case 3:
                return "مستلم";
                break;
            case 4:
                return "صيانه";
                break;
            case 5:
                return "تم الانتهاء";
                break;
            case 6:
                return "الغاء";
                break;
        }
    }

    public function getMyCarTypeName(){
        switch ($this->car_type){
            case 1:
                return "VIP";
                break;
            case 2:
                return "رسمي";
                break;
            case 3:
                return "عادي";
                break;
            case 4:
                return "مدني";
                break;
        }
    }

    public function getMyEltazlel(){
        switch ($this->eltazlel){
            case 1:
                return "مظلل";
                break;
            case 2:
                return "غير مظلل";
                break;
        }
    }

    public function getMyEltasfe7(){
        switch ($this->eltasfe7){
            case 1:
                return "مصفح";
                break;
            case 2:
                return "غير مصفح";
                break;
        }
    }

    public function getMySubsidiary(){
        switch ($this->subsidiary){
            case 1:
                return "الحرس الملكي";
                break;
            case 2:
                return "الشؤون الخاصة";
                break;
        }
    }


    // static public function getRequestType($type)
    // {
        // switch ($type){
        //     case 1:
        //         return __("Emergency Call");
        //         break;
        //     case 2:
        //         return __("Out Patient");
        //         break;
        //     case 3:
        //         return __("In Patient");
        //         break;
        //     case 4:
        //         return __("Lab");
        //         break;
        // }
    //     return "_";
    // }
}
