<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program($id = NULL ){
        if($id){
            switch($id){
                case 1:
                    return '<a href="https://www.educastudio.com/program/karir">karir</a>';
                    break;
                case 2:
                    return '<a href="https://www.educastudio.com/program/magang">magang</a>';
                    break;
                case 3:
                    return '<a href="https://www.educastudio.com/program/kunjungan-industri">industri</a>';
                    break;
        }
    }
            else{
            echo'
            <ul>
            <li><a href="https://www.educastudio.com/program/karir">karir</a></li>
            <li><a href="https://www.educastudio.com/program/magang">magang</a></li>
            <li><a href="https://www.educastudio.com/program/kunjungan-industri">industri</a></li>
            </ul>';
        }
    }
}
