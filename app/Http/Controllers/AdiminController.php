<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class AdiminController extends Controller
{
    /*
     * load add-teacher page for admin admon
     */
    
    public function addTeacher(){
        $usrInfo = Session::get('usrInfo');
        $url = url()->current();
        $urlParts = explode('/', $url);
        $endParts = end($urlParts);
        if($endParts == 'add-teacher'){
            $activeClass = 'class="active"';
        }
        if ($usrInfo->usrtyp == 'Teacher' AND $usrInfo->usrpwr == 1) {
            $leftMenu = view('menu.adminmenu')->with('addTcrActive', $activeClass);
            $addTeacher = view('admin.add-teacher');
        } else{
            return Redirect::to('/');
        }

        return view('dboardcontainer')->with('leftmenu', $leftMenu)->with('content', $addTeacher);
    }
    
    public function addStudent(){
        $usrInfo = Session::get('usrInfo');
        $url = url()->current();
        $urlParts = explode('/', $url);
        $endParts = end($urlParts);
        if($endParts == 'add-student'){
            $activeClass = 'class="active"';
        }
        if ($usrInfo->usrtyp == 'Teacher' AND $usrInfo->usrpwr == 1) {
            $leftMenu = view('menu.adminmenu')->with('addStdActive', $activeClass);
            $addTeacher = view('admin.add-student');
        } else{
            return Redirect::to('/');
        }

        return view('dboardcontainer')->with('leftmenu', $leftMenu)->with('content', $addTeacher);
    }
}