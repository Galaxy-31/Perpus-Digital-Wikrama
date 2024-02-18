<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategoris.index');
    }

    public function create()
    {
        return view('kategoris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idkategori' => 'required',
            'kategori' => 'required',
        ]);
        Kategori::create($request->all());
        return redirect()
            ->route('kategoris.index')
            ->with('success', 'Data created successfully.');
    }
    public function show($id)
    {
        try {
            $data = $this->model->find($id);

            $response = [
                'success' => true,
                'message' => 'Success retrieve data',
                'data' => $data
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'message' => 'Server Error',
                'data' => $e->getMessage()
            ];
            return response()->json($response, 500);
        }
    }


    public function detail($id)
    {
        $data = Kategori::find($id); 

        return view('kategoris.detail', compact('data'));
    }


    public function edit(Kategori $kategori)
    {
     return view('kategoris.index', compact('kategori'));
    }


    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'idkategori' => 'required',
            'kategori' => 'required',
        ]);
        $kategori->update($request->all());
        return redirect()
            ->route('kategoris.index')
            ->with('success', 'Data updated successfully');
    }

    public function destroy(Kategori $kategori)
    {
        try {
            $kategori = $this->model->find($id);
            $data = $kategori->delete();

            $response = [
                'success' => true,
                'message' => 'Success delete data',
                'data' => $data,
            ];

            return response()->json($response);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
                'data' => [],
            ];
            return response()->json($response, 500);
        }
    }
}
