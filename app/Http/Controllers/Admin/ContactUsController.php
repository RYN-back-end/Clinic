<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactUsController extends Controller
{
    use ResponseTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::query();
            return DataTables::of($data)
                ->addColumn('actions', function ($row) {
                    return "
                    <div class='d-flex gap-3'>
                   <a href='javascript:void(0);' class='text-danger delete' data-id='" . $row->id . "'><i class='mdi mdi-delete font-size-18'></i> </a>
                   </div>
                   ";
                })
                ->editColumn('phone_number', function ($row) {
                    try{
                        return '<a href="tel:'. $row->email.'"><i class="text-primary mdi mdi-phone-outline me-2"></i>'. $row->phone_number.'</a>';
                    }
                    catch (\Exception $e){
                        return $e->getMessage();
                    }
                })
                ->editColumn('email', function ($row) {
                    try{
                        return '<a href="mailto:'. $row->email.'"><i class="text-primary mdi mdi-email-outline me-2"></i>'. $row->email.'</a>';
                    }
                    catch (\Exception $e){
                        return $e->getMessage();
                    }
                })
                ->editColumn('created_at', function ($row) {
                    try{
                        return $row->created_at->diffForHumans();
                    }
                    catch (\Exception $e){
                        return $e->getMessage();
                    }
                })
                ->escapeColumns([])
                ->make(true);
        }
        return view('Admin.CRUD.Contact.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }


    public function destroy($id)
    {
        $row = ContactUs::findOrFail($id);
        $row->delete();
        return $this->deleteResponse();
    }
}
