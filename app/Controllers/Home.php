<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data ['titulo'] = 'inicio';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/main');
        echo view('front/footer');
    }

    public function contacto()
    {
        $data ['titulo'] = 'contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/contacto');
        echo view('front/footer');
    }
    
    public function comercializacion()
    {
        $data ['titulo'] = 'comercializacion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/comercializacion');
        echo view('front/footer');
    }
    
    public function terminos_y_usos()
    {
        $data ['titulo'] = 'terminos_y_usos';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/terminos_y_usos');
        echo view('front/footer');
    }
    
    public function about_us()
    {
        $data ['titulo'] = 'sobre_nosotros';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }

}
