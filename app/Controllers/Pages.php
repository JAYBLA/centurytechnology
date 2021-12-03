<?php

namespace App\Controllers;
use App\Models\ContactModel;
use CodeIgniter\Controller;

class Pages extends Controller
{
    public function home()
    {
        $data['title'] = "Home";
        echo view('pages/home', $data);       
    }

    public function graphic_design()
    {
        $data['title'] = "Graphic Design";
        echo view('pages/graphic_design', $data);       
    }

    public function tshirt_printing()
    {
        $data['title'] = "Tshirt-Printing";
        echo view('pages/tshirt_printing', $data);       
    }

    public function signages()
    {
        $data['title'] = "2D & 3D Signages";
        echo view('pages/signages', $data);       
    }

    public function promotional_materials()
    {
        $data['title'] = "Promotional Materials";
        echo view('pages/promotional_materials', $data);       
    }

    public function banners_stickers()
    {
        $data['title'] = "Banners and Stickers";
        echo view('pages/banners_stickers', $data);       
    }
}