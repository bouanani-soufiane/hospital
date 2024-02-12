<?php
namespace App;
use App\Models\Image;

trait ImageUpload
{
    public function storeImg($image, object $obj)
    {
        $imageName = $this->move($image);
        Image::create([
            "path" => $imageName,
            "imageable_id" => $obj->id,
            "imageable_type" => get_class($obj)
        ]);
    }
    public function move($image)
    {
        $imageName = time() . "." . $image->extension();
        $image->storeAs('public/', $imageName);
        return $imageName;
    }
}
