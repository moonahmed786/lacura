<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserQuestionnaire;

class UserQuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'ckstatus','checkdoc','checkWithdraw','IsPasswordSet']);
    }

    public function getForm(Request $request){

        $pt= __('schedules.User Questionnaire');
    	return view('user.user_questionnaire_n',compact('pt'));
    }

//    public function addNewUserQuestionnarire(Request $request){
//
//    	unset($request['_token']);
//    	// dd($request);
//    	$validationResult = $request->validate([
//	        'name' => 'required',
//            'image' => 'required|mimes:jpg,jpeg,png,svg',
//
//        $pt = "User Questionnaire Form";
//    	return view('user.user_questionnaire_n',compact('pt'));
//    }

    public function addNewUserQuestionnarire(Request $request){

    	 $data = $request->except('_token');

    	$validationResult = $request->validate([

            'illness' =>  'required|in:Yes,No',
            'disease_name' =>  'required_if:illness,Yes',
            'treatment_status' =>  'required|in:Still under treatment,Completely cured',
            'treatment_details' =>  'required_if:treatment_status,Still under treatment',

	        'chronic_disease' =>  'required|in:Yes,No',
            'chronic_disease_details' =>  'required_if:chronic_disease,Yes',

	        'sequelae' =>  'required|in:Yes,No',
            'sequelae_details' =>  'required_if:sequelae,Yes',

	        'illness_treated_status' =>  'required|in:Yes,No',
            'illness_treated_status_details' =>  'required_if:illness_treated_status,Yes',

	        'physical_disability' =>  'required|in:Yes,No',
            'physical_disability_details' =>  'required_if:physical_disability,Yes',

	        'weight_bearing' =>  'required|in:Yes,No',
            'weight_bearing_details' =>  'required_if:weight_bearing,Yes',

	        'drugs' =>  'required|in:Yes,No',
            'drugs_details' =>  'required_if:drugs,Yes',

	        'serious_injured' =>  'required|in:Yes,No',
            'serious_injured_details' =>  'required_if:serious_injured,Yes',

	        'hearing_visual' =>  'required|in:Yes,No',
            'hearing_visual_details' =>  'required_if:hearing_visual,Yes',

	        'allergic' =>  'required|in:Yes,No',
            'allergic_details' =>  'required_if:allergic,Yes',

	        'alcohol' =>  'required|in:Yes,No',
//            'alcohol_details' =>  'required_if:alcohol,Yes',


//            'Tipo' =>  'required_if:alcohol,Yes',
//            'copos' =>  'required_if:alcohol,Yes',


	        'blood_type' => 'required',
	        'signature' => 'required',
        ]);
    	if($validationResult){
            UserQuestionnaire::create($data);
            return redirect()->route('front.schedule');
        }
    	else{
    		return 400;
        }
    }

    public function updateUserQuestionnaire(Request $request){

    	$data = $request->except('_token');

    	if($this.valuesValidator($data))
    		UserQuestionnaire::update($data);
    	else
    		return 400;
    }

    public function valuesValidator($data){

        return $data->validate( [
	        'name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
	        'blood_type' => 'required',
	        'signature' => 'required',
        ]);

    	$data = $request->all();
    	$result = UserQuestionnaire::create($data);
    	if($result)
    		return redirect()->back();
    }


}
