<?php

namespace App\Controllers;

class Administrasi extends BaseController
{
	public function index()
	{
		return view('administrasi/administrasi_home');
	}

	public function pendaftaran()
	{
		return view('administrasi/administrasi_pendaftaran');
	}

	public function pembayaran()
	{
		return view('administrasi/administrasi_pembayaran');
	}

	public function antrian()
	{
		return view('administrasi/administrasi_antrian');
	}

	public function riwayat()
	{
		return view('administrasi/administrasi_riwayat_periksa');
	}
}
