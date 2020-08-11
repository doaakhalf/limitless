<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\careers;
use App\ApplicantCareers;
class FileController extends Controller
{
    
    public function index(){
       
        return view('career');
    }
    public function upload(Request $request)
    {
    
        if($request->hasFile('file'))
        {
            // dd($request->file);
        $allowedfileExtension=['pdf'];
        $file = $request->file('file');
       
        $extension =$request->file('file')->getClientOriginalExtension();
        $filename = rand(11111111, 99999999). '.' . $extension;
        $fullPath = $filename;
    // dd($fullPath); 
        $request->file('file')->move(
            base_path() . '/public/cvs/', $filename
        );
      
       
        $newApp=new Applicant();
        $newApp->name=$request->name;
        $newApp->email=$request->email;
        $newApp->phone=$request->phone;
        $newApp->cv=$fullPath;
        $newApp->save();
        // dd($newApp->id);
        $appcareers=new ApplicantCareers();
        $appcareers->applicant_id= $newApp->id;
        $appcareers->career_id=$request->career_id;
        $appcareers->save();
    //    dd($newApp);
       return redirect()->back()->with('message', 'IT WORKS!');
        echo "Upload Successfully";
        

       
           
    }
    else{
        echo '<div class="alert alert-warning"><strong>Warning!</strong> 2</div>';
    }
    }

    public function upload_cv($career_id)
    {
        $career=careers::find($career_id);
        return view('career_upload',compact('career_id','career'));
       
    }
}
