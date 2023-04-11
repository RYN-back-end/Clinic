<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;


class AdminController extends Controller
{
    use UploadFiles;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = Admin::latest();
            return DataTables::of($data)
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->editColumn('image', function ($row) {
                    return ' <img src="' . getUserImage($row->image) . '" class="avatar-xs rounded-circle" onclick="window.open(this.src)">';
                })
                ->addColumn('actions', function ($row) {
                    return "
                    <div class='d-flex gap-3'>
                    <a href='javascript:void(0);' class='text-info editBtn' data-id='" . $row->id . "'> <i class='mdi mdi-pencil font-size-18'></i></a>
                   <a href='javascript:void(0);' class='text-danger delete' data-id='" . $row->id . "'><i class='mdi mdi-delete font-size-18'></i> </a>
                   </div>
                   ";

                })
                ->escapeColumns([])
                ->make(true);
        }
        return view('Admin.CRUD.Admin.index');
    }


    public function create()
    {
        return view('Admin.CRUD.Admin.parts.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'name'     => 'required',
            'email'    => 'required|unique:admins',
            'password' => 'required|min:6',
        ]);

        if($request->has('image'))
            $data['image'] = $this->saveFile($request->image,'assets/uploads/admins','yes',70);


        $data['password'] = Hash::make($request->password);

        Admin::create($data);
        return response()->json(
            [
                'status'  => 200,
                'message' => "Data Added Successfully"
            ]);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $row = Admin::findOrFail($id);
        return view('Admin.CRUD.Admin.parts.edit',compact('row'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $row = Admin::findOrFail($id);

        if(loggedAdmin('id') == $row->id)
            return response()->json(['status'  => 405,]);

        else{
            if (file_exists($row->image)) {
                unlink($row->image);
            }
            $row->delete();
            return response()->json(
                [
                    'status'  => 200,
                    'message' => "Admin Deleted Successfully"
                ]);
        }
    }
}
