<?php

namespace App\Controllers;

class Pasien extends BaseController
{
	public function index()
	{
		return view('pasien/pasien_home');
	}

	public function pendaftaran()
	{
		return view('pasien/pasien_pendaftaran');
	}

	public function antrian()
	{
		return view('pasien/pasien_antrian');
	}
}
