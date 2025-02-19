<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return "list of student";
    }
    function add(){
        return " add list of student";
    }
    function delete(){
        return "delete list of student";
    }
    function about($name){
        return $name;
    }
}
