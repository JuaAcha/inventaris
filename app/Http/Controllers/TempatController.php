<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tempat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tempat =Tempat::all();
        return view('tempat.index', compact('tempat'));
    }

    public function data(){
        $tempat = Tempat::orderBy('id', 'asc')->get();

        return datatables()
            ->of($tempat)
            ->addIndexColumn()
            ->addColumn('aksi', function($tempat){
                return '
                
                <div class="btn-group">
                <button onclick="editData(`'.route('tempat.update', $tempat->id).'`)" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></button>
                <button onclick="deleteData(`'.route('tempat.destroy', $tempat->id).'`)" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                </div>
                
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
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
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function show(Tempat $tempat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function edit(Tempat $tempat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tempat $tempat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tempat $tempat)
    {
        //
    }
}
