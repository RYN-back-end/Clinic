<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QualificationRequest;
use App\Models\Qualification;
use App\Models\SiteTextAndImage;
use App\Traits\ResponseTrait;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class QualificationController extends Controller
{
    use UploadFiles, ResponseTrait;

    public function index(request $request)
    {
        $sectionData = SiteTextAndImage::first();
        if ($request->ajax()) {
            $data = Qualification::query();
            return DataTables::of($data)
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
        return view('Admin.CRUD.Qualifications.index',compact('sectionData'));
    }


    public function create()
    {
        return view('Admin.CRUD.Qualifications.parts.create');
    }


    public function store(QualificationRequest $request)
    {
        $validatedData = $request->validated();
        Qualification::create($validatedData);
        return $this->addResponse();
    }



    public function edit($id)
    {
        $row = Qualification::findOrFail($id);
        return view('Admin.CRUD.Qualifications.parts.edit', compact('row'));
    }


    public function update(QualificationRequest $request, $id)
    {
        $validatedData = $request->validated();
        $row = Qualification::findOrFail($id);
        $row->update($validatedData);
        return $this->updateResponse();
    }


    public function destroy($id)
    {
        $row = Qualification::findOrFail($id);
        $row->delete();
        return $this->deleteResponse();
    }
}
