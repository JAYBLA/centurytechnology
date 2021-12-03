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

    public function biometric()
    {
        $data['title'] = "Biometric Systems";
        echo view('pages/biometric', $data);       
    }

    public function alarm()
    {
        $data['title'] = "Alarm Systems";
        echo view('pages/alarm', $data);       
    }

    public function electrical_fence()
    {
        $data['title'] = "Electrical Fences";
        echo view('pages/electrical', $data);       
    }

    public function computer()
    {
        $data['title'] = "Computer Maintenence";
        echo view('pages/computer', $data);       
    }

    public function web_design()
    {
        $data['title'] = "Web Design and Hosting";
        echo view('pages/web-design', $data);       
    }

    public function cloud()
    {
        $data['title'] = "Cloud Services";
        echo view('pages/computer', $data);       
    }

    public function network()
    {
        $data['title'] = "Network Installation";
        echo view('pages/network', $data);       
    }

    public function it_support()
    {
        $data['title'] = "IT Support";
        echo view('pages/it-support', $data);       
    }
}