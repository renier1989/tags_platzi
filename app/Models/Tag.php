<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function getSlugAttribute(){

        // return strtolower(
        //     str_replace(' ', '-', $this->name)
        // );

        return Str::slug($this->name);
    }
}
