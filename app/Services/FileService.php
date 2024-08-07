<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class FileService
{
  /**
   * Save an uploaded image to the backend_images directory.
   *
   * @param \Illuminate\Http\UploadedFile $image
   * @return string The name of the saved image file.
   */
  public static function save($image)
  {
    $image_extension = $image->getClientOriginalExtension();
    $image_name = md5(now() . time()) . "-" . uniqid() . "." . $image_extension;
    $destinationPath = public_path() . '/backend_images/';
    $image->move($destinationPath, $image_name);

    return $image_name;
  }

  /**
   * Delete an image from the backend_images directory.
   *
   * @param string $image The name of the image file to delete.
   * @return bool True if the image was deleted, false otherwise.
   */
  public static function delete($image)
  {
    $destination = public_path() . '/backend_images/' . $image;
    $thumb_path = public_path() . '/backend_images/thumb/' . $image;

    if (File::exists($destination)) {
      File::delete($destination);
    }
    if (File::exists($thumb_path)) {
      File::delete($thumb_path);
    }
    return true;
  }
}