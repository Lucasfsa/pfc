<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
Use app\Providers\Cleintes;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
    	return view ('corpo/homepage');
    }

    public function pesquisa (){

    	return view ('corpo/pesquisa');
    }

    public function cadastrar(){

    	return view ('corpo/cadastro');
    }
    
    public function inicio (){
        return view('corpo/inicio');
    }
     

}