<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.hr.training-programs');
    }
    public function profile(){
        return view('backend.hr.hr-profile');
    }
    public function team(){
        return view('backend.hr.onboard');
    }
    public function list(){
        return view('backend.hr.team');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function enroll(){
        return view('backend.hr.enroll');
    }
    public function download(){
        return view('backend.hr.download');
    }
    public function program(){
        return view('backend.hr.programs');

    }
}
