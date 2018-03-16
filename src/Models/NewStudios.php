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

    protected $fillable = ["name","hint_path","group",'type','image','description'];

    function editHintPath($old_name,$new_name){
       $this->hint_path=str_replace($old_name,$new_name,$this->hint_path);
       return  $this->save();
    }

    public function uploadImage($image)
    {
        $this->image = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images'.DS.'new_studios');
        if(!\File::isDirectory($destinationPath)){
            \File::makeDirectory($destinationPath);
        }
        $image->move($destinationPath, $this->image);
        return $this->image;
    }
    public function changeUploadedImage($image)
    {
        $destinationPath = public_path('/images'.DS.'new_studios');
        \File::delete($destinationPath.DS.$this->image);
        $this->image = time().'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $this->image);
        return $this->image;
    }
}