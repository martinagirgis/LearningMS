<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\models\Media;
use App\models\Groups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\MediaGroup;
use Illuminate\Support\Facades\Validator;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    
    public function details($id)
    {
        $group = Groups::find($id);
        return view('admin.groups.details.main', compact('group'));
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


    public function removeImage(Request $request)
    {
        $name =  $request->get('name');
        $x =  $request->get('x');
        $url = $x . $name ;
        Media::where(['url' => $url])->delete();

        return $url;
    }

    public function addImage(Request $request, $uid)
    {
        
        $group = MediaGroup::where('uid',$uid)->count();

        if($group==0)
        {
            MediaGroup::create([
                'uid'=> $uid,
                'description'=> ' ',
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        }
        $fileName = $request->file('file')->getClientOriginalName();
        $file_to_store = $uid . $fileName ;
        $request->file('file')->move(public_path('assets/images/Media'), $file_to_store);

        Media::create([
            'type'=>'image',
            'url'=>$file_to_store,
            'group_uid'=> $uid,
        ]);

      return response()->json([ 'success' => $request->file('file')->getClientOriginalName()]);
    
    }

    public function test(Request $request)
    {
        $group = MediaGroup::where('uid',$request->uid)->first();
        $group->update([
                'uid'=>$request->uid,
                'description'=> $request->description,
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        return redirect()->back()->with('success', 'The Group has added images successfully.');

    }

    public function removeVideo(Request $request)
    {
        $name =  $request->get('name');
        $y =  $request->get('y');
        $url = $y . $name ;
        Media::where(['url' => $url])->delete();

        return $url;
    }

    public function addVideo(Request $request, $uid)
    {
        
        $group = MediaGroup::where('uid',$uid)->count();

        if($group==0)
        {
            MediaGroup::create([
                'uid'=> $uid,
                'description'=> ' ',
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        }
        $fileName = $request->file('file')->getClientOriginalName();
        $file_to_store = $uid . $fileName ;
        $request->file('file')->move(public_path('assets/videos/Media'), $file_to_store);

        Media::create([
            'type'=>'video',
            'url'=>$file_to_store,
            'group_uid'=> $uid,
        ]);

      return response()->json([ 'success' => $request->file('file')->getClientOriginalName()]);
    
    }

    public function testvid(Request $request)
    {
        $group = MediaGroup::where('uid',$request->uidvid)->first();
        $group->update([
                'uid'=> $request->uidvid,
                'description'=> $request->description,
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        return redirect()->back()->with('success', 'The Group has added videos successfully.');
    }

    public function removeFile(Request $request)
    {
        $name =  $request->get('name');
        $z =  $request->get('z');
        $url = $z . $name ;
        Media::where(['url' => $url])->delete();

        return $url;
    }

    public function addFile(Request $request, $uid)
    {
        
        $group = MediaGroup::where('uid',$uid)->count();

        if($group==0)
        {
            MediaGroup::create([
                'uid'=> $uid,
                'description'=> ' ',
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        }
        $fileName = $request->file('file')->getClientOriginalName();
        $file_to_store = $uid . $fileName ;
        $request->file('file')->move(public_path('assets/files/Media'), $file_to_store);

        Media::create([
            'type'=>'file',
            'url'=>$file_to_store,
            'group_uid'=> $uid,
        ]);

      return response()->json([ 'success' => $request->file('file')->getClientOriginalName()]);
    
    }

    public function testFile(Request $request)
    {
        $group = MediaGroup::where('uid',$request->uidfile)->first();
        $group->update([
                'uid'=> $request->uidfile,
                'description'=> $request->description,
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        return redirect()->back()->with('success', 'The Group has added files successfully.');
    }

    public function removeAudio(Request $request)
    {
        $name =  $request->get('name');
        $z =  $request->get('z');
        $url = $z . $name ;
        Media::where(['url' => $url])->delete();

        return $url;
    }

    public function addAudio(Request $request, $uid)
    {
        $group = MediaGroup::where('uid',$uid)->count();

        if($group==0)
        {
            MediaGroup::create([
                'uid'=> $uid,
                'description'=> ' ',
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        }
        $fileName = $request->file('file')->getClientOriginalName();
        $file_to_store = $uid . $fileName ;
        $request->file('file')->move(public_path('assets/audio/Media'), $file_to_store);

        Media::create([
            'type'=>'audio',
            'url'=>$file_to_store,
            'group_uid'=> $uid,
        ]);

      return response()->json([ 'success' => $request->file('file')->getClientOriginalName()]);
    
    }

    public function testAudio(Request $request)
    {
        $group = MediaGroup::where('uid',$request->uidaudio)->first();
        $group->update([
                'uid'=> $request->uidaudio,
                'description'=> $request->description,
                'groups_teacher_id'=>1,
                'group_id'=>1,
                'is_publisher'=>1,
            ]);
        return redirect()->back()->with('success', 'تمت اضافة المنشور ملفات صوتية بنجاح');
    }
}
