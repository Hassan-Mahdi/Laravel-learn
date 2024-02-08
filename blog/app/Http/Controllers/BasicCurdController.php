<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BasicCurdController extends Controller
{

    //select data
    function onSelect(){
        $jsonData = DB::select('select * from students');
        $jsonString = json_encode($jsonData);
        $selectData = json_decode($jsonString);
        return view('select', ['selectKye'=>$selectData]);
    }

     //select data
    function onInsert(Request $req){
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');

        $result = DB::insert('INSERT INTO `students`(`name`, `class`, `roll`) VALUES (?,?,?)', [$name, $class, $roll]);

        if($result==true) {
            return "Success";
        } else {
            return "Fail";
        }
    }


    //delete data    
    function onDelete(Request $req){

        $id = $req->input('id');

        $result = DB::delete('DELETE FROM `students` WHERE `id` =?', [$id]);

        if($result==true) {
            return "Delete Success";
        } else {
            return "Delete Fail";
        }

    }


    //update data
    function onUpdate(Request $req){
        $id = $req->input('id');
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');

        $result = DB::update('UPDATE `students` SET `name`= ?,`class`=?,`roll`=?  WHERE `id`=?', [$name, $class, $roll, $id]);

        if($result==true) {
            return "Update Success";
        } else {
            return "Update Fail";
        }
    }







}
