<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    	# Listagem de vendedores cadastrados
        public function index()
        {		
            return View('sellers.index');
            
        } 
        
        # Cadastro de novo vendedor
        public function cadastrar()
        {		
            return View('sellers.register');
            
        } 	
}
