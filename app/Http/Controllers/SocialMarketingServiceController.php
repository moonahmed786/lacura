<?php

namespace App\Http\Controllers;

use App\SocialMarketing;
use App\SocialMarketingService;
use App\SocialMarketingServiceSubscriber;
use Illuminate\Http\Request;
use Image;

class SocialMarketingServiceController extends Controller
{
    public function index()
    {
        $page_title = 'Social Media Marketing';
        $smms = SocialMarketing::orderByDesc('status')->paginate(15);

        return view('admin.smm.index', compact('page_title', 'smms'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|unique:social_marketings']);
        $smm = SocialMarketing::create([
            'title' => $request->title,
        ]);
        return back()->withSuccess($smm->title . ' has been saved.');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['title' => 'required']);

        $smm = SocialMarketing::findOrFail($id);
        if ($request->title != $smm->title && SocialMarketing::where('id', '!=', $smm->id)->where('title', $request->title)->count() > 0) {
            return back()->withErrors(['Already exists']);
        }
        $smm->update(['title' => $request->title]);
        return back()->withSuccess($smm->title . ' has been updated.');
    }

    public function enable(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $smm = SocialMarketing::findOrFail($request->id);
        $smm->update(['status' => 1]);
        return back()->withSuccess($smm->title . ' has been enabled.');
    }

    public function disable(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $smm = SocialMarketing::findOrFail($request->id);
        $smm->update(['status' => 0]);
        return back()->withSuccess($smm->title . ' has been disabled.');
    }

    public function serviceIndex()
    {
        $page_title = 'Social Media Marketing Services';
        $services = SocialMarketingService::with('package')->latest()->paginate(15);
        return view('admin.smm.service', compact('page_title', 'services'));
    }

    public function serviceCreate()
    {
        $page_title = 'New Social Media Marketing Service';
        $smms = SocialMarketing::all();
        return view('admin.smm.create_service', compact('page_title', 'smms'));
    }

    public function serviceStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'package_id' => 'required|integer',
            'min' => 'required|integer|gt:0',
            'max' => 'required|integer|gte:min',
            'unit' => 'required|integer|gt:0',
            'price' => 'required|numeric|gt:0',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'detail' => 'required',
        ]);

        $smm = SocialMarketing::findOrFail($request->package_id);

        if ($request->hasFile('image')) {
            try {
                $path = config('constants.smm.path');
                if (!file_exists($path)) mkdir($path, 0755, true);
                $size = explode('x', config('constants.smm.size'));
                $filename = uniqid() . time() . '.' . $request->image->getClientOriginalExtension();
                Image::make($request->image)->resize($size[0], $size[1])->save($path . '/' . $filename);
            } catch (\Exception $exp) {
                return back()->withErrors(['Could not upload image.']);
            }
        }

        $service = SocialMarketingService::create([
            'title' => $request->title,
            'package_id' => $smm->id,
            'min' => $request->min,
            'max' => $request->max,
            'unit' => $request->unit,
            'price' => $request->price,
            'image' => $filename,
            'detail' => $request->detail
        ]);

        return back()->withSuccess($service->title . ' has been saved.');
    }

    public function serviceEdit($id)
    {
        $service = SocialMarketingService::with('package')->findOrFail($id);
        $page_title = 'Update Social Media Marketing Service';
        $smms = SocialMarketing::all();
        return view('admin.smm.edit_service', compact('page_title', 'smms', 'service'));
    }

    public function serviceUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'min' => 'required|integer|gt:0',
            'max' => 'required|integer|gte:min',
            'unit' => 'required|integer|gt:0',
            'price' => 'required|numeric|gt:0',
            'image' => 'nullable|image|mimes:jpeg,jpg,png',
            'detail' => 'required',
        ]);

        $service = SocialMarketingService::findOrFail($id);

        $filename = $service->image;
        if ($request->hasFile('image')) {
            try {
                $path = config('constants.smm.path');
                if (!file_exists($path)) mkdir($path, 0755, true);
                $size = explode('x', config('constants.smm.size'));
                $filename = uniqid() . time() . '.' .  $request->image->getClientOriginalExtension();
                Image::make($request->image)->resize($size[0], $size[1])->save($path . '/' . $filename);
                if (file_exists($path . '/' . $service->image) && is_file($path . '/' . $service->image)) {
                    @unlink($path . '/' . $service->image);
                }
            } catch (\Exception $exp) {
                return back()->withErrors(['Could not upload image.']);
            }
        }

        $service->update([
            'title' => $request->title,
            'min' => $request->min,
            'max' => $request->max,
            'unit' => $request->unit,
            'price' => $request->price,
            'image' => $filename,
            'detail' => $request->detail
        ]);

        return back()->withSuccess($service->title . ' has been updated.');
    }

    public function serviceEnable(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $service = SocialMarketingService::findOrFail($request->id);
        $service->update(['status' => 1]);
        return back()->withSuccess($service->title . ' has been enabled.');
    }

    public function serviceDisable(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $service = SocialMarketingService::findOrFail($request->id);
        $service->update(['status' => 0]);
        return back()->withSuccess($service->title . ' has been disabled.');
    }

    public function userServiceAll()
    {
        $page_title = 'User Subscribed Services';
        $subscriptions = SocialMarketingServiceSubscriber::latest()->paginate(15);
        return view('admin.smm.service_subscriber', compact('page_title', 'subscriptions'));
    }

    public function userServicePending()
    {
        $page_title = 'Subscribed Services';
        $subscriptions = SocialMarketingServiceSubscriber::with(['subscriber', 'service'])->where('status', 0)->latest()->paginate(15);
        return view('admin.smm.service_subscriber', compact('page_title', 'subscriptions'));
    }

    public function userServiceRunning()
    {
        $page_title = 'Running Services';
        $subscriptions = SocialMarketingServiceSubscriber::with(['subscriber', 'service'])->where('status', 1)->latest()->paginate(15);
        return view('admin.smm.service_subscriber', compact('page_title', 'subscriptions'));
    }

    public function userServiceComplete()
    {
        $page_title = 'Completed Services';
        $subscriptions = SocialMarketingServiceSubscriber::with(['subscriber', 'service'])->where('status', 2)->latest()->paginate(15);
        return view('admin.smm.service_subscriber', compact('page_title', 'subscriptions'));
    }

    public function userServiceReject()
    {
        $page_title = 'Rejected Services';
        $subscriptions = SocialMarketingServiceSubscriber::with(['subscriber', 'service'])->where('status', 9)->latest()->paginate(15);
        return view('admin.smm.service_subscriber', compact('page_title', 'subscriptions'));
    }

    public function confirmRunning(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $subs = SocialMarketingServiceSubscriber::with('service')->findOrFail($request->id);
        $subs->update(['status' => 1]);
        return back()->withSuccess($subs->service->title . ' of ' . $subs->subscriber->username . ' is now running.');
    }

    public function confirmComplete(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $subs = SocialMarketingServiceSubscriber::with('service')->findOrFail($request->id);
        $subs->update(['status' => 2]);
        return back()->withSuccess($subs->service->title . ' of ' . $subs->subscriber->username . ' has been completed.');
    }

    public function confirmReject(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $subs = SocialMarketingServiceSubscriber::with('service')->findOrFail($request->id);
        $subs->update(['status' => 9]);
        return back()->withSuccess($subs->service->title . ' of ' . $subs->subscriber->username . ' has been rejected.');
    }
}
