<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RequestsStatuses
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon $created_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RequestsStatuses whereTitle($value)
 * @mixin \Eloquent
 */
class RequestsStatuses extends Model
{
    //
}
