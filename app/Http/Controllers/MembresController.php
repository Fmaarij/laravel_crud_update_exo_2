<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class MembresController extends Controller
 {
    public function index() {
        $members = membres::all();
        return view( 'home', compact( 'members' ) );
    }

    //create

    public function storeMember(Request $request) {
        // public $timestamps = false;
        $storeMember = new membres;
        $storeMember->nom = $request->nom;
        $storeMember->age = $request->age;
        $storeMember->genre = $request->genre;
        $storeMember->save();
        return redirect()->back();
    }

    //delete
    public function deleteMember($id ) {
        $member = membres::find($id);
        $member->delete();
        return redirect()->back();
    }

    //showID
    public function showid($id) {
        $member = membres::find($id);
        return view('crudEdit', compact('member'));
    }

 //update
        public function updateMember( Request $request,$id ) {
            $member = membres::find($id);
            $member->nom = $request->nom;
            $member->age = $request->age;
            $member->genre = $request->genre;
            $member->save();
            return redirect()->back();
        }
}
