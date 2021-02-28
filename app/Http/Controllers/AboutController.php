<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutus() {
        $data = array ( 'nama' => 'Moh. Wiki Darmawan',
                        'nim' => '1941720174',
                        'kelas' => 'TI-2D');
        return view ('about-us', $data);
    }
}
