<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Traits\GeneralTrait;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    use UploadFiles, ResponseTrait;

    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = Service::query();
            return DataTables::of($data)
                ->editColumn('image', function ($row) {
                    return ' <img src="' . getFile($row->image) . '" class="avatar-xs rounded-circle" onclick="window.open(this.src)">';
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
        return view('Admin.CRUD.Service.index');
    }


    public function create()
    {
        return view('Admin.CRUD.Service.parts.create');
    }


    public function store(ServiceRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->has('image'))
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/services','yes',90);
        Service::create($validatedData);
        return $this->addResponse();
    }



    public function edit($id)
    {
        $row = Service::findOrFail($id);
        return view('Admin.CRUD.Service.parts.edit', compact('row'));
    }


    public function update(ServiceRequest $request, $id)
    {
        $validatedData = $request->validated();

        $row = Service::findOrFail($id);

        /// adjust data before save it ////
        if ($request->hasFile('image')) {
            // delete old image
            if (file_exists($row->image)) {
                unlink($row->image);
            }
            $validatedData['image'] = $this->saveFile($request->image, 'assets/uploads/services');
        }
        ////////////////////////////////////
        $row->update($validatedData);
        return $this->updateResponse();
    }


    public function destroy($id)
    {
        $row = Service::findOrFail($id);
        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();
        return $this->deleteResponse();
    }
}
