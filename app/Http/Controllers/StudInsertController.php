<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudInsertController extends Controller {
   public function insertform(){
      return view('Employee_create');
   }
	
   public function insert(Request $request){
   		echo "test";
     $firstname = $request->input('employee_firstname');
     $lastname = $request->input('employee_lastname');
     $email = $request->input('employee_email');
     $uid = $request->input('employee_uid');
     $password = $request->input('employee_password');
     $confirm = $request->input('employee_confirm');

      DB::insert('insert into Employee (firstname, lastname, email, uid, password, confirm) values(?,?,?,?,?,?)',  [$firstname, $lastname, $email, $uid, $password,$confirm ]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
?>