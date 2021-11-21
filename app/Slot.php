<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $guarded =['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Deposit()
    {
        return $this->belongsTo(CPSDeposit::class, 'deposits_id', 'id');
    }
//    public function Project()
//    {
//        return $this->belongsTo(Project::class, 'project_id', 'id');
//    }
    public static function slotUniqNumber()
    {


        do
        {
            $temp_slot_number = substr(sha1(rand()), 0, 8);
            $check =  Slot::where('slot_number',$temp_slot_number)->first();
            if(empty($check)){
                return $temp_slot_number;
            }


        }while(!empty($check));

    }
}
