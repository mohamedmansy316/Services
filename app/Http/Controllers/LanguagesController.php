<?php

namespace App\Http\Controllers;

use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LanguagesController extends Controller{
    public function getAdminLanguages(){
        $AllLanguages = Languages::all();
        return view('admin.languages.all', compact('AllLanguages'));
    }
    public function getCreateLanguage(){
        return view('admin.languages.new');
    }
    public function postCreateLanguage(Request $r){
        $Rules = [
            'lang_name' => 'required',
            'lang_code' => 'required',
            'ar_lang_name' => 'required',
            'direction' => 'required',
            'text_direction' => 'required',
            'order' => 'numeric',
        ];
        $Messages =[
            'order.numeric' => 'يجب ان يكون الترتيب بارقام فقط'
        ];
        $Validator = Validator::make($r->all(), $Rules, $Messages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $LangData = $r->all();
            $r->has('is_featured') ? $LangData['is_featured'] = 1 : $LangData['is_featured'] = 0 ;
            Languages::create($LangData);
            return redirect()->route('admin.languages.all')->withSuccess("تم إضافة اللغة بنجاح");
        }
    }
    public function getEditLanguage($id){
        $TheLanguage = Languages::findOrFail($id);
        return view('admin.languages.edit', compact('TheLanguage'));
    }
    public function postEditLanguage(Request $r, $id){
        $TheLanguage = Languages::findOrFail($id);
        $Rules = [
            'lang_name' => 'required',
            'lang_code' => 'required',
            'ar_lang_name' => 'required',
            'direction' => 'required',
            'text_direction' => 'required',
            'order' => 'numeric',
        ];
        $Messages =[
            'order.numeric' => 'يجب ان يكون الترتيب بارقام فقط'
        ];
        $Validator = Validator::make($r->all(), $Rules, $Messages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $LangData = $r->all();
            $r->has('is_featured') ? $LangData['is_featured'] = 1 : $LangData['is_featured'] = 0 ;
            $TheLanguage->update($LangData);
            return redirect()->route('admin.languages.all')->withSuccess("تم تعديل اللغة بنجاح");
        }
    }
    public function deleteLanguage($id){
        Languages::findOrFail($id)->delete();
        return redirect()->route('admin.languages.all')->withSuccess("تم مسح اللغة بنجاح");
    }
}
