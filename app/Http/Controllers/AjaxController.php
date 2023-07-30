<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContentFormRequest;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request){
        //$data = $request->all();
        //$data['ip'] = $request()->ip();

        //$validationdata = $request->validate([
        //    'name'=>'required|string|min:5',
        //    'email'=>'required|email',
        //    'subject'=>'required',
        //    'message'=>'required'
        //]);

        $newdata =[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'ip'=>request()->ip(),
        ];

        $sonkaydedilen = Contact::create($newdata);

        return back()->withSuccess(['Başarıyla Gönderildi']);
    }
}
