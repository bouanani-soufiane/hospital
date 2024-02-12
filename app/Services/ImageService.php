<?php

namespace App\Services;

/**
 * Class ImageService.
 */
class ImageService
{
    public $image;
    public $path;
    public $obj;
    function __construct(object $obj,$image = null,$path = null)
    {
        $this->obj = $obj;
        $this->image = $image;
        $this->path = $path;
    }
    public function uploadImage()
    {
        if($this->image && $this->image !== null){
            $this->image->store('public/'. $this->path . '/');
            return $this;
        }
        return $this;
    }
    public function storeImageDB($fieldName)
    {

        if($fieldName && $this->image){

            $this->obj->{$fieldName} = $this->path . '/' . $this->image->hashName();

            return $this->obj;
        }

        return $this;
    }
    public function deleteImage($fieldName)
    {
        $storePath = public_path('storage/'. $this->obj->{$fieldName});

        if($this->obj->{$fieldName} && file_exists($storePath)){

            unlink(public_path('storage/'.$this->obj->{$fieldName}));

            return $this;
        }

        return $this;

    }
}
