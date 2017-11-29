<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function registration_form(){
        return view('registration_form');
    }

    public function registration(Request $req){

        $name=$req->input('name');
        $id_no=$req->input('id_no');
        $hall_name=$req->input('hall_name');
        $dept=$req->input('dept');
        $level=$req->input('level');
        $term=$req->input('term');
        $student_type=$req->input('student_type');
        $course_no=$req->input('course_no');
        $nationality=$req->input('nationality');
        $advisor=" ";


        $data=array('student_id'=>$id_no,'name'=>$name,'department'=>$dept,'hall_name'=>$hall_name,'level'=>$level,'term'=>$term,'student_type'=>$student_type,'course_no'=>$course_no,'nationality'=>$nationality,'advisor'=>$advisor,'hall_transaction'=>" ",'course_transection'=>" ",'status'=>" ");


        DB::table('student_info')->insert($data);

        return view('registration')->with("id_no",$id_no)->with("dept",$dept);
    }

    public function complete_reg(Request $req)

    {
         $advisor=$req->input('advisor');
        $id_no=$req->input('id_no');
        $hall_transaction=$req->input('hall_transection');
        $dept=$req->input('dept');
         $course_transection=$req->input('course_transection');  
         
         $insert=array('student_id'=>$id_no,'provost'=>" ",'advisor'=>" ",'head'=>" ");

         DB::table('approval')->insert($insert);

         $update=array('advisor'=>$advisor,'hall_transaction'=>$hall_transaction,'course_transection'=>$course_transection);
         DB::table('student_info')->where('student_id',$id_no)->update($update);
         return view('welcome');
        
    }

   public function advisor()
   {
  /*     $student = DB::table('approval')->where('advisor'," ")->get();
       $id=[];
       $i=1;
       foreach ($student as $student) {
           $id_no=$student->student_id;
           $id_no=DB::table('student_info')->where('student_id',$id_no)->get();
           
           foreach ($id_no as $id_no) {
            
            
               $id[$i]=$id_no->student_id;

               $i++;

           }
       }
*/
       $student =DB::table('student_info')
            ->whereExists(function($query)
            {
                $query->select(DB::raw(1))
                      ->from('approval')
                      ->whereRaw('approval.student_id = student_info.student_id')
                      ->whereRaw('approval.advisor=" "');
            })
            ->get();
            $i=1;
            $data=[];
            foreach ($student as $student) {
           //     echo $i;
                 $data[$i]=$student->student_id;
                $i++;
                 $data[$i]=$student->name;
                $i++;
            }
         //echo $data[1];
         //echo $data[2];   
         //echo $data[3];
         //echo $data[4];   

       return view('Advisor', ['id_no' => $data]);
       
    
   }

}
