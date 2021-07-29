<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Groups;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Groups::get();
        return view('admin.groups.index',compact('admins'));
    }
    public function details($id){
     return view('admin.groups.details.main');
    }
    public function exams($id){
        return view('admin.groups.details.exam');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'image' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        } else {
            $fileName = $request->image->getClientOriginalName();
            $file_to_store = time() . '_' . $fileName ;
            $request->image->move(public_path('assets/images/groups'), $file_to_store);

            Groups::create([
                'name' => $request->name,
                'image'=> $file_to_store,
            ]);
            return redirect()->route('groups.index')->with('success', 'The Group has created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Groups::find($id);
        return view('admin.admins.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Groups::find($id);
        return view('admin.groups.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = Groups::find($id);
        $rules = [
            'name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            if ($request->image) {
                unlink(public_path('assets/images/groups') .'/' . $users->image);
                $fileName = $request->image->getClientOriginalName();
                $file_to_store = time() . '_' . $fileName ;
                $request->image->move(public_path('assets/images/groups'), $file_to_store);

            }
            else{
                $file_to_store = $users->image;
            }

            $users->update([
                'name' => $request->name,
                'image'=> $file_to_store,
            ]);

        }
        return redirect()->route('groups.index')->with('success', 'The Group has updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old = Groups::find($id);
        $old->delete();
        return redirect()->route('groups.index')->with('success', 'Deleted successfully');
    }
}
