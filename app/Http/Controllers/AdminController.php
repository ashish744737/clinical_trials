<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function dashboard($token){
        try {
            $decrypted_token = Crypt::decryptString($token);
        } catch (\Throwable $th) {
            return redirect()->route('index')->with('error-message','Please contact admin for access.');
        }

        if ($decrypted_token !== 'adminPanel') {
            return redirect()->route('index')->with('error-message','Please contact admin for access.');
        }

        try {
            $contacts = Contact::orderBy('created_at','desc')->paginate(10);
            $cohortA = Contact::where('type','Cohort A')->count();
            $cohortB = Contact::where('type','Cohort B')->count();
            $total = Contact::count();
            $male = Contact::where('sex','Male')->count();
            $female = Contact::where('sex','Female')->count();
            $other = Contact::where('sex','Other')->count();

            if ($total > 0) {
                $cohortA_percentage = round((($cohortA / $total) * 100));
                $cohortB_percentage = round((($cohortB / $total) * 100));
            }else{
                $cohortA_percentage = 0;
                $cohortB_percentage = 0;
            }
            
            
            $records = [
                'total' => $total,
                'cohortA' => $cohortA,
                'cohortB' => $cohortB,
                'male' => $male,
                'female' => $female,
                'other' => $other,
                'cohortA_percentage' => $cohortA_percentage,
                'cohortB_percentage' => $cohortB_percentage,
            ];
            return view('admin.dashboard',compact('contacts','records'));
        } catch (\Throwable $th) {
            return redirect()->route('index')->with('error-message','Something went wrong.');
        }
        
    }
}
