<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use View;

class UserController extends Controller
{
    public function getUsers(){

        $event = DB::table('user')->select(DB::raw('id,fullname,email'))->where('active', 1)->get(); 
        // Fetch all records
        $eventData['data'] = $event;
        echo json_encode($eventData);
        exit;
    }

    public function createUser(){

        return view('createuser');
    }

    public function editUser($userid){
        $user = DB::table('user')->select(DB::raw('*'))->where('id', $userid)->get(); 
        $personalinfo = DB::table('personalinfo')->select(DB::raw('*'))->where('userid', $userid)->get();
        $skill = DB::table('skill')->select(DB::raw('*'))->where('userid', $userid)->get();
        $reference = DB::table('reference')->select(DB::raw('*'))->where('userid', $userid)->get();
        return view('edituser', compact('user','personalinfo','skill','reference'));
    }

    public function updateUsers(Request $request)
    {
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $userid = $request->input('userid');

        $address = $request->input('address');
        $mobile = $request->input('mobile');
        $birthday = $request->input('birthday');
        $personalinfoid = $request->input('personalinfoid');

        //Array variables
        $skill = $request->input('skill');
        $experience = $request->input('experience');
        $skillid = $request->input('skillid');

        $reference = $request->input('reference');
        $position = $request->input('position');
        $company = $request->input('company');
        $referenceid = $request->input('referenceid');

        $updateUser = DB::table('user')->where('id',$userid)->update(array('fullname' => $fullname,'email' => $email));

        $updatePersonal = DB::table('personalinfo')->where('id',$personalinfoid)->update(array('address' => $address, 'mobilenumber' => $mobile, 'birthday' => $birthday));

        for ($i = 0; $i < count($skill); $i++) {
            $updateSkill = DB::table('skill')->where('id',$skillid[$i])->update(array('skill' => $skill[$i],'yearsexp' => $experience[$i]));
        }

        for ($j = 0; $j < count($reference); $j++) {
            $updateReference = DB::table('reference')->where('id',$referenceid[$j])->update(array('reference' => $reference[$j],'position' => $position[$j],'company' => $company[$j]));
        }

        return redirect('/');
    }

    public function deleteUser($userid)
    {
        $updateEvent = DB::table('user')->where('id',$userid)->update(array('active' => 0));
        return redirect('/');
    }

    public function viewpdf($userid)
    {
        $user = DB::table('user')->select(DB::raw('fullname,email'))->where('id', $userid)->get(); 
        $personalinfo = DB::table('personalinfo')->select(DB::raw('*'))->where('userid', $userid)->get();
        $skill = DB::table('skill')->select(DB::raw('*'))->where('userid', $userid)->get();
        $reference = DB::table('reference')->select(DB::raw('*'))->where('userid', $userid)->get();
        $pdf = PDF::loadView('viewpdf', compact('user','personalinfo','skill','reference'));
        return $pdf->download('viewpdf.pdf');
    }

    public function storeUser(Request $request)
    {
        $latestid = DB::table('user')->select(DB::raw('id'))->orderBy('id', 'desc')->limit(1)->get();
        $newuserid = intval($latestid[0]->id) + 1;

        $fullname = $request->input('fullname');
        $email = $request->input('email');

        $address = $request->input('address');
        $mobile = $request->input('mobile');
        $birthday = $request->input('birthday');

        //Array variables
        $skill = $request->input('skill');
        $experience = $request->input('experience');

        $reference = $request->input('reference');
        $position = $request->input('position');
        $company = $request->input('company');

        $insertUser = DB::table('user')->insert(
            [
                'id' => $newuserid, 
                'fullname' => $fullname,
                'email' => $email,
                'active' => 1
            ]
        );

        $insertPersonalInfo = DB::table('personalinfo')->insert(
            [
                'userid' => $newuserid, 
                'address' => $address,
                'mobilenumber' => $mobile,
                'birthday' => $birthday
            ]
        );

        for ($i = 0; $i < count($skill); $i++) {
            $insertSkill = DB::table('skill')->insert(
                [
                    'userid' => $newuserid, 
                    'skill' => $skill[$i],
                    'yearsexp' => $experience[$i]
                ]
            );
        }

        for ($j = 0; $j < count($reference); $j++) {
            $insertReference = DB::table('reference')->insert(
                [
                    'userid' => $newuserid,
                    'reference' => $reference[$j],
                    'position' => $position[$j],
                    'company' => $company[$j]
                ]
            );
        }

        return redirect('/');

    }

}
