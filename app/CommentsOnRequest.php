<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsOnRequest extends Model
{
    protected $fillable = ['comment','id_user', 'id_request'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function author()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
