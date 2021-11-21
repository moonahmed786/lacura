<?php

namespace App\Http\Controllers;

use App\SlotPackages;
use App\SlotPackageSubscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SlotPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Slot Packages';
        $Packages = SlotPackages::all();

        return view('admin.slot_packages.index', compact('Packages','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Slot Packages';
        return view('admin.slot_packages.add_package',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title_pt_br' => 'required|max:255|string',
            'title_ja' => 'required|max:255|string',
            'allowed_slots' => 'required|numeric',
//            'allowed_withdraws_per_day' => 'required|numeric',
            'amount' => 'required|numeric',
            'withdraw_time' => 'required|numeric',
            'valid_for_days' => 'required|numeric',

        ]);
//        dd($request->all());

//        $date = Carbon::parse($request->validate_upto);
//        $now = Carbon::now();
//
//        $diff = $date->diffInDays($now);



        $x=SlotPackages::Create(
            [
                'title_ja' => $request->title_ja,
                'title_pt_br' => $request->title_pt_br,
                'allowed_slots' => $request->allowed_slots,
//                'allowed_withdraws_per_day' => $request->allowed_withdraws_per_day,
                'amount' => $request->amount,
                'withdraw_time' => $request->withdraw_time,
                'valid_for_days' =>$request->valid_for_days,
                'status' =>1,
            ]);

        return redirect()->route('slotpackages.index')->with([ 'message'=>'Package Add Successfully.']);


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        dd('show');
        dd(1);
        $pak = SlotPackages::find($id);
        return response()->json($pak);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        var_dump('edit');
        edit();
        return view('Packages.edit', compact('Packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id = $request->id;
        $request->validate([
            'title_pt_br' => 'required|max:255|string',
            'title_ja' => 'required|max:255|string',
            'allowed_slots' => 'required|numeric',
//            'allowed_withdraws_per_day' => 'required|numeric',
            'amount' => 'required|numeric',
            'withdraw_time' => 'required|numeric',
            'valid_for_days' => 'required|numeric',

            'status' => 'required',
        ]);
//        $date = Carbon::parse($request->edit_validate_upto);
//        $now = Carbon::now();
//
//        $diff = $date->diffInDays($now);
        $data = [
            'title_ja' => $request->title_ja,
            'title_pt_br' => $request->title_pt_br,
            'allowed_slots' => $request->allowed_slots,
//            'allowed_withdraws_per_day' => $request->allowed_withdraws_per_day,
            'amount' => $request->amount,
            'withdraw_time' => $request->withdraw_time,
            'valid_for_days' =>$request->valid_for_days,
            'status' =>$request->status,
        ];
        SlotPackages::where('id', $id)->update($data);

        return redirect()->back()->with(['success' => 'Package Record Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SlotPackages::where('id', $id)->delete();

        return response()->json(["success" => 'Package deleted successfully']); //
    }

}
