<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsOnRequests extends Model
{


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function author()
    {
        return $this->hasOne('App\Users', 'id', 'id_user');
    }
}
