<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function product()
    {
      return view('producto');
    }

    public function med()
    {
      return view('pingpongmed');
    }

    public function logistics()
    {
      return view('logistics');
    }

    public function events()
    {
      return view('events');
    }

    public function spaces()
    {
      return view('spaces');
    }

    public function nfc()
    {
      return view('nfcpage');
    }

    public function about()
    {
      return view('aboutus');
    }

    public function español()
    {
      return view('index_esp');
    }

    public function producto()
    {
      return view('productos_esp');
    }

    public function eventos()
    {
      return view('eventos_esp');
    }

    public function logistica()
    {
      return view('logistica_esp');
    }

    public function medico()
    {
      return view('pingpongmedico_esp');
    }

    public function espacios()
    {
      return view('spaces_esp');
    }

    public function nfc_español()
    {
      return view('nfcpage_esp');
    }

    public function sobre_nosotros()
    {
      return view('sobre_nosotros');
    }

    public function contact()
    {
      return view('contacto');
    }

    public function contacto()
    {
      return view('contacto_esp');
    }
}
