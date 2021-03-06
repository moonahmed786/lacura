<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LanguageController extends Controller
{
    public function langManage($lang = false)
    {
        $page_title = 'Language Manager';
        $social = Language::all();
        return view('admin.language.lang', compact( 'page_title', 'social'));
    }

    public function langStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'code' => 'required',
            'icon' => 'mimes:png'
        ]);

        if ($request->code == 'en' || $request->code == 'EN')
        {
            return back()->with('alert', 'Default Language');
        }

        $data = file_get_contents(resource_path('lang/').'default.json');
        $json_file = $request->code.'.json';
        $path = resource_path('lang/'). $json_file;

        File::put($path, $data);

        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'assets/images/' . $filename;
            Image::make($image)->resize(32, 21)->save($location);
            $in['icon'] = $filename;
        }

        $in['name'] = $request->name;
        $in['code'] = $request->code;
        Language::create($in);

        return back()->with('message', 'Create Successfully');
    }

    public function langUpdatepp(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'icon' => 'mimes:png'
        ]);

        $la = Language::whereId($id)->first();

        if($request->hasFile('icon')){
            @unlink('assets/images/'.$la->icon);
            $image = $request->file('icon');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'assets/images/' . $filename;
            Image::make($image)->resize(32, 21)->save($location);
            $in['icon'] = $filename;
        }

        $in['name'] = $request->name;

        Language::whereId($id)->update($in);

        return back()->with('message', __('Update Successfully'));
    }

    public function langDel($id)
    {
        $la = Language::find($id);
        @unlink('assets/images/'.$la->icon);
        @unlink(resource_path('lang/').$la->code.'.json');
        $la->delete();
        return back()->with('message', 'Delete Successfully');

    }

    public function langEdit($id)
    {
        $la = Language::find($id);
        $page_title = "Update ".$la->name." Keywords";
        $json = file_get_contents(resource_path('lang/').$la->code.'.json');
        $list_lang = Language::all();

        if (empty($json))
        {
            return back()->with('alert', 'File Not Found.');
        }

        return view('admin.language.edit_lang', compact('page_title', 'json', 'la','list_lang'));
    }

    public function langUpdate(Request $request, $id)
    {
        $lang = Language::find($id);
        $content = json_encode($request->keys);


        if ($content === 'null')
        {
            return back()->with('alert', 'At Least One Field Should Be Fill-up');
        }

        file_put_contents(resource_path('lang/'). $lang->code . '.json', $content);


        return back()->with('message', __('Update Successfully'));
    }

    public function langImport(Request $request)
    {
        $lang = Language::find($request->code);
        $json = file_get_contents(resource_path('lang/').$lang->code.'.json');
        return $json;
    }
    //new update
    public function newlangUpdate(Request $request, $id)
    {
        $lang = Language::find($id);
/// module key to make it dynamic come with request
        $content = json_encode(include resource_path('lang/en/auth.php'));
        file_put_contents(resource_path('lang/pt-br/abc.php'), json_decode($content, true));


//        $b = array(
//            'name' => 'James',
//            'age' => 27,
//            'bike' => 'Yamaha R1');
//        file_put_contents(
//            resource_path('lang/pt-br/abc.php'),
        /*            "<?php\n return " . var_export($content, true) . "\n?>"*/
//        );
//        $fp = fopen(resource_path('lang/pt-br/abc.php'), 'w');

//        fwrite($fp, var_export($b, true));

//        $filename = "mylog.txt";
        $text = "";
        $myarraydata = include resource_path('lang/en/auth.php');
        foreach($myarraydata as $key => $value)
        {
            $text .= '"'.$key.'"'. " => ".'"'. $value.'"' .','."\n";
        }
//        $fh = fopen(resource_path('lang/pt-br/abc.php'), "w") or die("Could not open log file.");
        file_put_contents(
            resource_path('lang/pt-br/abc.php'),
            "<?php\n return [" . $text . " ]; \n?>"
        );



        dd($content, json_decode($content, true) ,include resource_path('lang/en/auth.php') ,'abc',include resource_path('lang/pt-br/abc.php'));

        //$json = file_get_contents(resource_path('lang/en/auth.php'));
        //        $content = json_encode($json);
        //
        //        dd($json,$content);

        if ($content === 'null') {
            return back()->with('alert', 'At Least One Field Should Be Fill-up');
        }

        file_put_contents(resource_path('lang/') . $lang->code . '.json', $content);


        return back()->with('message', __('Update Successfully'));
    }

}
