<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 14.03.2018
 * Time: 11:47
 */
namespace BtyBugHook\NewStudio\Models;

use Illuminate\Database\Eloquent\Model;

class NewStudios extends Model
{
    protected $table = 'new_studios';

    protected $fillable = ["name","hint_path","group",'type'];
}