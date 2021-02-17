<?php

namespace App\Controllers;

class Dokter extends BaseController
{
	public function index()
	{
		return view('dokter/dokter_home');
	}

	public function pemeriksaan()
	{
		return view('dokter/dokter_pemeriksaan');
	}

	public function rekam_medis()
	{
		return view('dokter/dokter_rekam_medis');
	}

	public function hasil_pemeriksaan()
	{
		return view('dokter/dokter_hasil_pemeriksaan');
	}

	public function resep()
	{
		return view('dokter/dokter_resep');
	}

	public function riwayat()
	{
		return view('dokter/dokter_riwayat_periksa');
	}
}
