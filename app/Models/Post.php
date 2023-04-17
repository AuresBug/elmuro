<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use OwenIt\Auditing\Contracts\Auditable;

class Post extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;
    use HasFactory, SoftDeletes;

    /**
     * Get the limit content
     *
     * @param  string   $value
     * @return string
     */
    public function getSmallContentAttribute()
    {
        return Str::limit($this->content, 150, '...');
    }

}
