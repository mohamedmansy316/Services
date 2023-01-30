<?php

namespace App\Http\Controllers;

use App\Models\Languages;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Image as ImageLib;

class ServiceController extends Controller{
    public function getAdminServices(){
        $AllServices = Service::all();
        return view('admin.services.all', compact('AllServices'));
    }
    public function getCreateService(){
        $AllLanguages = Languages::select('id', 'lang_code', 'lang_name')->get();
        return view('admin.services.new', compact('AllLanguages'));
    }
    public function postCreateService(Request $r){
        $Rules = [
            'ar_lang_name' => 'required',
            'ar_title' => 'required',
            'ar_description' => 'required',
            'lang_name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'icon' => 'required',
            'order' => 'numeric',
            'section' => 'required',
        ];
        $Messages =[
            'order.numeric' => 'يجب ان يكون الترتيب بارقام فقط'
        ];
        $Validator = Validator::make($r->all(), $Rules, $Messages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $ServiceData = $r->all();
            $TimeNow = Carbon::now()->timestamp;
            if($r->has('icon')){
                $img = ImageLib::make($r->icon);
                // backup status
                $img->backup();
                $img->fit(150, 150);
                $img->save('storage/app/public/icons/'.$TimeNow.'.'.$r->icon->getClientOriginalExtension());
                $ServiceData['icon'] = $TimeNow.'.'.$r->icon->getClientOriginalExtension();
            }
            Service::create($ServiceData);
            return redirect()->route('admin.service.all')->withSuccess("تم إضافة الخدمة بنجاح");
        }
    }
    public function getEditService($id){
        $TheService = Service::findOrFail($id);
        $AllLanguages = Languages::select('id', 'lang_code', 'lang_name')->get();
        return view('admin.services.edit', compact('TheService', 'AllLanguages'));
    }
    public function postEditService(Request $r, $id){
        $TheService = Service::findOrFail($id);
        $Rules = [
            'ar_lang_name' => 'required',
            'ar_title' => 'required',
            'ar_description' => 'required',
            'lang_name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'icon' => 'required',
            'order' => 'numeric',
            'section' => 'required',
        ];
        $Messages =[
            'order.numeric' => 'يجب ان يكون الترتيب بارقام فقط'
        ];
        $Validator = Validator::make($r->all(), $Rules, $Messages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $ServiceData = $r->all();
            $TimeNow = Carbon::now()->timestamp;
            if($r->has('icon')){
                $img = ImageLib::make($r->icon);
                // backup status
                $img->backup();
                $img->fit(150, 150);
                $img->save('storage/app/public/icons/'.$TimeNow.'.'.$r->icon->getClientOriginalExtension());
                $ServiceData['icon'] = $TimeNow.'.'.$r->icon->getClientOriginalExtension();
                Storage::disk('local')->delete('public/icons/' . $TheService->icon);
            }
            $TheService->update($ServiceData);
            return redirect()->route('admin.service.all')->withSuccess("تم تعديل الخدمة بنجاح");
        }
    }
    public function deleteService($id){
        $TheService = Service::findOrFail($id);
        Storage::disk('local')->delete('public/icons/' . $TheService->icon);
        $TheService->delete();
        return redirect()->route('admin.service.all')->withSuccess("تم مسح الخدمة بنجاح");
    }
}
