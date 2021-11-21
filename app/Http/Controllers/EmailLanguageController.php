<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailLanguage;

class EmailLanguageController extends Controller
{
    public function index()
    {
        $page_title = 'Email Language Manager';
        $langs = EmailLanguage::orderBy('name')->get();
        return view('admin.email_language', compact('page_title', 'langs'));
    }

    public function edit($id)
    {
        $page_title = 'Email Language Template Edit';
        $lang = EmailLanguage::findOrFail($id);
        return view('admin.edit_email_language', compact('page_title', 'lang'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'message' => 'required'
        ]);
        $lang = EmailLanguage::findOrFail($id);
        $lang->update($request->all());

        return redirect()->route('email.language.edit', $lang->id)->withSuccess('Updated Successfully');
    }
}
