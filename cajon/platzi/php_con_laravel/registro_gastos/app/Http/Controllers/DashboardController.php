<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/* 
    // comentado para probar el request
	public function index()
	{
		return 'Dashboard Page';
	}
	*/	
	
	// prueba del request con un parametro enviado desde la url
    public function index(Request $request)
	{
		return $request->query('parametro', 'default');
	}
}
