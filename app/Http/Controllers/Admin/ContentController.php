<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentRequest;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $contents = Content::all()->sortByDesc("created_at");

        return view('admin.content.index', [
            'active' => 'admin.content.index',
            'contents' => $contents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
        return view('admin.content.create', [
            'active' => 'admin.content.create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentRequest $request){
        //Upload Logo
        $logoName = Str::uuid().'.'.$request->logo->extension();
        $pathLogo = $request->logo->storeAs('public/logo', $logoName);
        $urlLogo = Storage::disk('local')->url($pathLogo);

        //Upload Thumb Vertical
        $thumbVerticalName = Str::uuid().'.'.$request->thumbVertical->extension();
        $pathThumbVertical = $request->thumbVertical->storeAs('public/thumbVertical', $thumbVerticalName);
        $urlThumbVertical = Storage::disk('local')->url($pathThumbVertical);

        //Upload Logo
        $thumbHorizontalName = Str::uuid().'.'.$request->thumbHorizontal->extension();
        $pathThumbHorizontal = $request->thumbHorizontal->storeAs('public/thumbHorizontal', $thumbHorizontalName);
        $urlThumbHorizontal = Storage::disk('local')->url($pathThumbHorizontal);

        //Upload Background
        $BackgroundName = Str::uuid().'.'.$request->background->extension();
        $pathBackground = $request->background->storeAs('public/background', $BackgroundName);
        $urlBackground = Storage::disk('local')->url($pathBackground);

        $content = new Content();
        $content->name = $request->name;
        $content->sinopse = $request->sinopse;
        $content->year = $request->year;
        $content->maturityRating = $request->maturityRating;
        $content->urlTrailer = $request->urlTrailer;
        $content->urlLogo = $urlLogo;
        $content->urlBackground = $urlBackground;
        $content->urlThumbVertical = $urlThumbVertical;
        $content->urlThumbHorizontal = $urlThumbHorizontal;
        $content->save();

        return redirect()->route('admin.content.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //desativado

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $content = Content::find($id);
        if(!$content){ return redirect()->route('admin.content.index'); }

        return view('admin.content.edit', [
            'active' => 'admin.content.edit',
            'content' => $content
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreContentRequest $request, $id){
        $content = Content::find($id);
        if(!$content){ return redirect()->route('admin.content.index'); }

        $content->name = $request->name;
        $content->sinopse = $request->sinopse;
        $content->year = $request->year;
        $content->maturityRating = $request->maturityRating;
        $content->urlTrailer = $request->urlTrailer;

        if($request->hasFile('logo')){
            //Upload Logo
            $logoName = Str::uuid().'.'.$request->logo->extension();
            $pathLogo = $request->logo->storeAs('public/logo', $logoName);
            $urlLogo = Storage::disk('local')->url($pathLogo);

            $content->urlLogo = $urlLogo;
        }

        if($request->hasFile('thumbVertical')){
            //Upload Thumb Vertical
            $thumbVerticalName = Str::uuid().'.'.$request->thumbVertical->extension();
            $pathThumbVertical = $request->thumbVertical->storeAs('public/thumbVertical', $thumbVerticalName);
            $urlThumbVertical = Storage::disk('local')->url($pathThumbVertical);

            $content->urlThumbVertical = $urlThumbVertical;
        }

        if($request->hasFile('thumbHorizontal')){
             //Upload Logo
            $thumbHorizontalName = Str::uuid().'.'.$request->thumbHorizontal->extension();
            $pathThumbHorizontal = $request->thumbHorizontal->storeAs('public/thumbHorizontal', $thumbHorizontalName);
            $urlThumbHorizontal = Storage::disk('local')->url($pathThumbHorizontal);

            $content->urlThumbHorizontal = $urlThumbHorizontal;
        }

        if($request->hasFile('background')){
             //Upload Logo
            $backgroundName = Str::uuid().'.'.$request->background->extension();
            $pathbackground = $request->background->storeAs('public/background', $backgroundName);
            $urlBackground = Storage::disk('local')->url($pathbackground);

            $content->urlBackground = $urlBackground;
        }

        $content->save();

        return redirect()->route('admin.content.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $content = Content::find($id);
        if(!$content){ return redirect()->route('admin.content.index'); }

        $content->delete();

        return redirect()->route('admin.content.index');
    }
}
