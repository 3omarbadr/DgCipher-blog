<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function store($image, $driver)
    {
        $image =  $image->store($driver);
        return $image;
    }

    public function delete($image, $driver)
    {
        if ($image) {
            Storage::delete($image);
        }
        $image = self::store($image, $driver);
    }
}
