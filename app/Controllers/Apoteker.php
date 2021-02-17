<?php

namespace App\Controllers;

class Apoteker extends BaseController
{
	public function index()
	{
		return view('apoteker/apoteker_home');
	}

	public function resep()
	{
		return view('apoteker/apoteker_resep');
	}

	public function tebus()
	{
		return view('apoteker/apoteker_tebus');
	}

	public function riwayat()
	{
		return view('apoteker/apoteker_riwayat_tebus_obat');
	}

	public function obat()
	{
		return view('apoteker/apoteker_obat');
	}

	public function obat_add()
	{
		return view('apoteker/apoteker_obat_add');
	}

	public function obat_edit()
	{
		return view('apoteker/apoteker_obat_edit');
	}
}
