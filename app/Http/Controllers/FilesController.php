<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    function index($filename) {
        
        $path =  public_path('uploads/');
    
        $ekstensiFile = explode('.', $filename);
        $ekstensiFile = strtolower(end($ekstensiFile));
    
        $ekstensiImageValid = ['jpg', 'jpeg', 'png'];
        $ekstensiPdfValid = ['pdf'];
    
    
    
        if (in_array($ekstensiFile, $ekstensiImageValid)) {
          header('Content-Type: image/png');
          header('Content-Length: ' . filesize(public_path('uploads/'). $filename));
    
          @readfile($path . $filename);
        } elseif (in_array($ekstensiFile, $ekstensiPdfValid)) {
          header("Content-type: application/$ekstensiFile");
          header("Content-Disposition: inline; filename=$filename");
          header('Content-Length: ' . filesize(public_path('uploads/'). $filename));
    
          @readfile($path . $filename);
        } else {
          echo "Ekstensi file tidak cocok";
        }
    

    }
}
