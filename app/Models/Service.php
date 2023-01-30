<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model{
    use HasFactory;
    protected $guarded = [];
    public function getServiceIconAttribute(){
        return url('storage/app/public/icons/').'/'.$this->icon;
    }
    public function Language(){
        return $this->belongsTo(Languages::class, 'lang_name')->withDefault([
            'ar_title' => 'Not Available'
        ]);
    }
    public function getServiceSectionAttribute(){
        if($this->section =='websites'){
            return 'مواقع';
        }elseif($this->section == 'services'){
            return 'خدمات';
        }elseif($this->section == 'videos'){
            return 'فيديوهات';
        }elseif($this->section == 'apps'){
            return 'تطبيقات';
        }elseif($this->section == 'interactive_files'){
            return 'ملفات تفاعلية';
        }elseif($this->section == 'advocacy_services'){
            return 'خدمات دعوية';
        }elseif($this->section == 'land_pages'){
            return 'صفحات هبوط';
        }elseif($this->section == 'others'){
            return 'أخرى';
        }else{
            return 'N/A';
        }
    }
}
