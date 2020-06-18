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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereIdCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereIdPriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereIdResponsible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereIdStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UsersRequest whereTitle($value)
 * @mixin \Eloquent
 */
class UsersRequest extends Model
{
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'id_creator',
        'id_responsible',
        'id_status',
        'id_priority',
        'description',
        'title',
        'closed_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'id_creator');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function responsible()
    {
        return $this->hasOne('App\User', 'id', 'id_responsible');
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
        return $this->hasOne('App\RequestsStatus', 'id', 'id_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\CommentsOnRequest', 'id_request', 'id')->orderBy('created_at','desc');
    }
}
