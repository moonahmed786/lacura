<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestionnaire extends Model
{
	   /**
    * Fillable fields for a course
    *
    * @return array
    */


//   protected $fillable = ['name','image',
//       'blood_type','illness','illness_details',
//       'disease_date','disease_name','treatment_status',
//       'chronic_disease','chronic_disease_details','surgery','surgery_details','sequelae'
//       ,'sequelae_details','illness_treated_status','illness_treated_status_details',
//       'physical_disability','physical_disability_details','weight_bearing','weight_bearing_details',
//       'drugs','drugs_details','serious_injured','serious_injured_details','hearing_visual',
//       'hearing_visual_details','allergic','allergic_details','alcogol',
//       'alcogol_details','signature','user_id'];
        protected $guarded = ['id'];
    public function queryUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}

