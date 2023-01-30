<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Languages extends Model{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function getLanguageDirectionAttribute(){
        if($this->direction =='ltr'){
            return 'من اليسار';
        }elseif($this->direction == 'rtl'){
            return 'من اليمين';
        }else{
            return 'N/A';
        }
    }
    public function getLanguageTextDirectionAttribute(){
        if($this->text_direction =='text-left'){
            return 'من اليسار';
        }elseif($this->text_direction == 'text-right'){
            return 'من اليمين';
        }else{
            return 'N/A';
        }
    }
}
