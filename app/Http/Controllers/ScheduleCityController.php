<?php

namespace App\Http\Controllers;

use App\ScheduleCity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ScheduleCityController extends Controller
{
    public function index()
    {
        $page_title = "Schedule City";
        $blog = ScheduleCity::paginate(12);
        return view('admin.schedule_city.index', compact('page_title', 'blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add New Schedule City ";
        return view('admin.schedule_city.add', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'city_name_pt_br' => 'required|max:191',
            'city_name_ja' => 'required|max:191',
            'image' => 'required|mimes:png,jpg,jpeg,svg',
        ]);

        $input = Input::except('_token');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.jpg';
            $location = 'assets/images/schedule_city/' . $filename;
            Image::make($image)->save($location);
            $input['image'] = $filename;
        }

        ScheduleCity::create($input);
        return redirect()->route('schedule.index')->with('message', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduleCity $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(ScheduleCity $blog, $id)
    {
        $page_title = "Edit/View Schedule City";
        $know = ScheduleCity::findOrFail($id);

        return view('admin.schedule_city.edit', compact('page_title', 'know'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ScheduleCity $blog, $id)
    {

        $this->validate($request, [
            'city_name_pt_br' => 'required|max:191',
            'city_name_ja' => 'required|max:191',
            'image' => 'mimes:png,jpg,jpeg,svg',
        ]);

        $input = Input::except('_token', '_method');
        $bl = ScheduleCity::findOrFail($id);

        if ($request->hasFile('image')) {
            @unlink('assets/images/schedule_city/' . $bl->image);
            $image = $request->file('image');
            $filename = time() . '.jpg';
            $location = 'assets/images/schedule_city/' . $filename;
            Image::make($image)->save($location);
            $input['image'] = $filename;
        }

        ScheduleCity::whereId($id)->update($input);
        return redirect()->route('schedule.index')->with('message', __('Update Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScheduleCity $blog, $id)
    {

        $blogpp = ScheduleCity::find($id);
        @unlink('assets/images/schedule_city/' . $blogpp->image);
        $blogpp->delete();
        return back()->with('message', 'Delete Successfully');
    }
}
