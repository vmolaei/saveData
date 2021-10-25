<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SaveData extends Controller
{
public function saveData(Request $request){

    $student = new Student();
    $student->name=$request->name;
    $student->email = $request->email;
    $student->phone=$request->phone;

    $student->Save();
    return redirect("home");

}
}
