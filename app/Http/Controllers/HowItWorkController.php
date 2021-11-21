<?php

namespace App\Http\Controllers;

use App\HowItWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HowItWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Manage How It's Work";
        $team = HowItWork::all();
        return view('admin.howitwork.index', compact('page_title', 'team'));
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
        $this->validate($request, [
            'icon' => 'required',
            'title' => 'required',
            'detail' => 'required',
        ]);

        $input = Input::except('_token');
        HowItWork::create($input);
        return back()->with('message', 'Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(HowItWork $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(HowItWork $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'icon' => 'required',
            'title' => 'required',
            'detail' => 'required',
        ]);

        $input = Input::except('_token', '_method');
        HowItWork::whereId($id)->update($input);
        return back()->with('message', __('Update Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HowItWork::find($id)->delete();
        return back()->with('message', __('Delete Successfully'));
    }
}
