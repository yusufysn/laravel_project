<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;

class PropertyController extends Controller
{
    public function CreateProperty(PropertyRequest $request)
    {
        Property::create([
            'category_id' => $request->category_id,
            'name' => $request->property_name,
            'type' => $request->property_type
        ]);
        return back()->with([
            'alert' => 'sweet',
            'title' => 'İşlem başarılı',
            'text' => 'Yeni özellik eklendi',
            'type' => 'success'
        ]);

    }


    public function UpdateProperty(PropertyRequest $request, $property_id){
        // $property = Property::find($property_id);
        // $property->name=$request->property_name;
        // $property->type=$request->property_type
        // $property->save();
        Property::find($property_id)->update([
            'name' => $request->property_name,
            'type' => $request->property_type
        ]);
        return back()->with([
            'alert' => 'sweet', 'title' => 'Basarılı', 'text' => 'guncellendi', 'type' => 'success'
        ]);
    }

    public function RemoveProperty($property_id)
    {
        $property = Property::find($property_id);
        if (!isset($property)) return back([
            'alert' => 'sweet',
            'title' => 'Başarısız',
            'text' => 'özellik bulunamadı',
            'type' => 'danger'
        ]);
        $property->delete();


        return back()->with([
            'alert' => 'sweet',
            'title' => 'Başarılı',
            'text' => 'özellik silindi',
            'type' => 'success'
        ]);
    }
}
