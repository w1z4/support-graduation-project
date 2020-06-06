<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Requests
 *
 * @property int                                                        $id
 * @property int                                                        $id_creator
 * @property int                                                        $id_responsible
 * @property int                                                        $id_status
 * @property int|null                                                   $id_priority
 * @property string                                                     $description
 * @property string                                                     $title
 * @property \Illuminate\Support\Carbon                                 $created_at
 * @property string|null                                                $closed_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Users[] $creator
 * @property-read int|null                                              $creator_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereIdCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereIdPriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereIdResponsible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereIdStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requests whereTitle($value)
 * @mixin \Eloquent
 */
class Requests extends Model
{
    protected $table = 'requests';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function creator()
    {
        return $this->hasOne('App\Users', 'id', 'id_creator');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function responsible()
    {
        return $this->hasOne('App\Users', 'id', 'id_responsible');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function priority()
    {
        return $this->hasOne('App\RequestsPriorities', 'id', 'id_priority');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne('App\RequestsStatuses', 'id', 'id_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\CommentsOnRequests', 'id_request', 'id');
    }
}
