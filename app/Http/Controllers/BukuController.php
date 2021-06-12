<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

use App\Exports\BookExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
	public function index()
	{
		$book = Buku::all();
		return view('buku0119',['book'=>$book]);
	}

	public function export_excel()
	{
		return Excel::download(new BookExport, 'Data_1461900119.xlsx');
	}
}