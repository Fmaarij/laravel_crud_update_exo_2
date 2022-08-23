<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
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
