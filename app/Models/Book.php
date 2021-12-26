<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function hasCover(){
        return $this->cover != null;
    }

    public function getCoverImageAttribute(){
        if (!$this->hasCover){
            return asset("uploads/no_cover.jpg");
        }
        return asset("uploads/{$this->cover}");
    }
}
