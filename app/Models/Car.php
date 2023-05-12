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
        'id', 'sanaf_id', 'car_type', 'car_model', 'color_in', 'color_out', 'hykl_no', 'car_no', 'car_category', 'eltazlel', 'eltasfe7', 'subsidiary', 'img', 'f1_receiver_name', 'f1_receiver_phone', 'f1_receiver_id', 'f1_elgha', 'f1_item_name', 'f1_car_categ', 'f1_day1', 'f1_date1', 'f1_time1', 'f1_day2', 'f1_date2', 'f1_time2', 'f1_enter_day3', 'f1_enter_date3', 'f1_enter_time3', 'f1_3gla', 'f1_3freta', 'f1_tfaya', 'f1_msls', 'f1_radio', 'f1_sefty', 'f1_mostatel', 'f1_tes', 'f1_4nth', 'f1_form_img', 'f1_remot', 'f1_front_back_lo7a', 'f1_front_back_d3am', 'f1_call_dev', 'f1_el3ward', 'admin_id', 'status', 'created_at', 'updated_at'
    ];

    public function  scopeSelection($query){
        return $query -> select(
            'id', 'sanaf_id', 'car_type', 'car_model', 'color_in', 'color_out', 'hykl_no', 'car_no', 'car_category', 'eltazlel', 'eltasfe7', 'subsidiary', 'img', 'f1_receiver_name', 'f1_receiver_phone', 'f1_receiver_id', 'f1_elgha', 'f1_item_name', 'f1_car_categ', 'f1_day1', 'f1_date1', 'f1_time1', 'f1_day2', 'f1_date2', 'f1_time2', 'f1_enter_day3', 'f1_enter_date3', 'f1_enter_time3', 'f1_3gla', 'f1_3freta', 'f1_tfaya', 'f1_msls', 'f1_radio', 'f1_sefty', 'f1_mostatel', 'f1_tes', 'f1_4nth', 'f1_form_img', 'f1_remot', 'f1_front_back_lo7a', 'f1_front_back_d3am', 'f1_call_dev', 'f1_el3ward', 'admin_id', 'status', 'created_at', 'updated_at'
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
