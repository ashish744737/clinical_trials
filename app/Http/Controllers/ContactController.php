<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('consentForm');
    }

    public function save(SaveContactRequest $request){

        try {

            if ($request->frequency == "Daily") {
                $status = "Participant ".ucfirst($request->first_name)." is assigned to Cohort B";
                $type = "Cohort B";
                $daily_frequency = $request->daily_frequency;
            }else{
                $status = "Participant ".ucfirst($request->first_name)." is assigned to Cohort A";
                $type = "Cohort A";
                $daily_frequency = null;
            }
    
            $contact = new Contact;
            $contact->first_name = $request->first_name;
            $contact->last_name = $request->last_name;
            $contact->email = $request->email;
            $contact->date_of_birth = $request->date_of_birth;
            $contact->frequency = $request->frequency;
            $contact->daily_frequency = $daily_frequency;
            $contact->sex = $request->sex;
            $contact->type = $type;
            $contact->status = $status;
            $contact->save();
            
            return redirect()->back()->with(['success-message' => 'You have successfully submitted the form.']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error-message','Something went wrong.');
        }
        
    }
}
