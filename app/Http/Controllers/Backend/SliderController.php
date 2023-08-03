<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Slider;
use ImageResize;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.pages.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.slider.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyaadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();

            $resim = ImageResize::make($resim)->save(public_path('img\slider\\'.$dosyaadi));
        }

        Slider::create([
            'name' => $request->name,
            'content' => $request->content,
            'link' => $request->link,
            'status' => $request->status,
            'image' => $dosyaadi ?? NULL,
        ]);

        return back()->withSuccess('Slider Başarı ile oluşturuldu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::where('id', $id)->first();
        return view('backend.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyaadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();

            $resim = ImageResize::make($resim)->save(public_path('img\slider\\'.$dosyaadi));
        }

        Slider::where('id', $id)->update([
            'name' => $request->name,
            'content' => $request->content,
            'link' => $request->link,
            'status' => $request->status,
            'image' => $dosyaadi ?? NULL,
        ]);

        return back()->withSuccess('Slider Başarı ile güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();

        if(file_exists($slider->image))
            if(!empty($slider->image))
                unlink($slider->image);

        $slider->delete();
        return back()->withSuccess('Silme işlemi başarı ile gerçekleştirildi.');
    }
}
