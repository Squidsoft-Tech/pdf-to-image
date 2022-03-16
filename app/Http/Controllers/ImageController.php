<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imagick;

class ImageController extends Controller
{
    //
    function index()
    {
        // $imgExt = new Imagick();
        // // $imgExt->setResolution(300, 300);
        // $imgExt->readImage(public_path('secure_login.png'));
        // $imgExt->writeImages('pdf_image_doc.jpg', true);
        // dd("Document has been converted");

        // $img = new Imagick();
        // $img->readImage(public_path('secure_login.png'));
        // $img->writeImages('pdf_image_doc.jpg', true);

        $imagick = new Imagick();
 // Reads image from PDF
  $imagick->readImage('file.pdf');
 // Writes an image
 $imagick->writeImages('converted_page_one.jpg',false);

    }
}
