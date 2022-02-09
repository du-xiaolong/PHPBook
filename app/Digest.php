<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Digest
 *
 * @property int $id 主键ID
 * @property int|null $bookid 所属书目ID
 * @property string|null $content 书摘内容
 * @property int|null $status 状态 1正常 2屏蔽
 * @property \Illuminate\Support\Carbon|null $created_at 创建时间
 * @property \Illuminate\Support\Carbon|null $updated_at 更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|Digest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Digest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Digest query()
 * @method static \Illuminate\Database\Eloquent\Builder|Digest whereBookid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Digest whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Digest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Digest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Digest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Digest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Digest extends Model
{
    //

    protected $table = 'digest';
}
