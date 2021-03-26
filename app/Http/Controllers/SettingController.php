<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Keyword;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where('id', 1)->firstOrFail();
        return view('admin.settings.index', ['setting' => $setting]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keyword = Keyword::create([
            'content' => $request->keywords
        ]);
        $setting = new Setting($this->validateSettings());
        $setting->title = $request->title;
        $setting->decription = $request->description;
        $setting->email_address = $request->email_address;
        $setting->email_password = $request->email_password;
        $setting->email_host_address = $request->email_host_address;
        $setting->about_text = $request->about_text;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;
        $setting->keyword_id = $keyword->id;
        $post->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting = Setting::where('id', 1)->firstOrFail();
        $keyword = Keyword::find($setting->keyword_id);
        $setting->update(
            [
                'title' => $request->title,
                'description' => $request->description,
                'email_address' => $request->email_address,
                'email_password' => $request->email_password,
                'email_host_address' => $request->email_host_address,
                'about_text' => $request->about_text,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube
            ]
        );
        $keyword->update(
            [
                'content' => $request->keywords
            ]
        );
        return redirect(route('admin.settings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
    public function validateSettings(){
       return request()->validate([
        'title' => 'required|max:100',
        'description' => 'required'
    ]);
   }
}
