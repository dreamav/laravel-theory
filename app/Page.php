<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $alias
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
    //
}
