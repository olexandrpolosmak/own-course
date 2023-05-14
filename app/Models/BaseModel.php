<?php
/**
 * Description of BaseModel.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Models;


use App\Traits\OwnCourseHasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use HasFactory;
    use OwnCourseHasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
