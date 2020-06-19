<?php

namespace App\Http\Controllers;

use App\DivisionModel;
use App\MemberModel;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //function for view of member register
    public function newMember(){
        $divisions = DivisionModel::all();
        return view('members.member',compact('divisions'));
    }


    //function for save new member
    public function saveMember(Request $request){
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'division' => ['required'],
            'dob' => ['required']
        ]);


        $member = new MemberModel();
        $member->first_name = $request->post('first_name');
        $member->last_name = $request->post('last_name');
        $member->division = $request->post('division');
        $member->dob = $request->post('dob');
        $member->summary = $request->post('summary');
        $member->save();

        return redirect()->route('member.list')->with('success','Member Successfully added');
    }

    //function for get member list
    public function members(){
        $members = MemberModel::paginate(10);
        return view('members.members_list',compact('members'));
    }

    //function for delete member
    public function delete($member){
        MemberModel::findOrFail($member)->delete();
        return redirect()->route('member.list')->with('success','Member Successfully deleted');
    }

    public function editMember($id){
        $member = MemberModel::findOrFail($id);
        $divisions = DivisionModel::all();
        return view('members.member_update',compact('member','divisions'));
    }

    //function for update member details
    public function update(Request $request){
         MemberModel::findOrFail($request->memberId)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'division' => $request->division,
            'dob' => $request->dob,
            'summary' => $request->summary
        ]);

        return redirect()->back()->with('alert','Member successfully updated');
    }
}
