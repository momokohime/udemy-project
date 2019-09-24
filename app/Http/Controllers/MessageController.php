<?php

namespace App\Http\Controllers;

use App\Mail\messageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
	public function store(Request $request)
	{

		$msg = request()->validate([
			'name'=> 'required',
			'email'=> 'required',
			'subject'=> 'required',
			'content'=> 'required',

		]);

		Mail::to('henry@puntocommerce.com')->queue(new messageReceived($msg));




		return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
		// return 'Mensaje Enviado';
	}
}
