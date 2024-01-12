<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $isidata = Data::all();
        return view('dashboard', ['isidata' => $isidata]);
    }

    public function add()
    {
        return view('tambah-data');
    }

    public function store(Request $request)
{
    $requestData = $request->all();
    // $requestData['nip'] = 'your_value_here'; // Gantilah dengan nilai yang sesuai

    $isitambah = Data::create($requestData);
    return redirect('dashboard');
}

}
