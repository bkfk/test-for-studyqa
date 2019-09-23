<?php

namespace App\Http\Controllers;

use App\Feast;
use App\EducationLevel;
use Illuminate\Http\Request;

class FeastMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Feast $feast)
    {
      return view('admin.feast_members', ['feast' => $feast]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Feast $feast)
    {
      return view('front.member_create', ['feast' => $feast, 'education_levels' => EducationLevel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Feast $feast, Request $request)
    {
      $feast->members()->create($request->all());
      return response('Ok', 200)
                  ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feast  $feast
     * @return \Illuminate\Http\Response
     */
    public function show(Feast $feast)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feast  $feast
     * @return \Illuminate\Http\Response
     */
    public function edit(Feast $feast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feast  $feast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feast $feast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feast  $feast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feast $feast, $id)
    {
      $member = $feast->members()->find($id);
      $member->delete();
      return redirect()->route('member.index', $feast);
    }
}
