<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Http\Resources\KategoriCollection;
use App\Http\Resources\KategoriResource;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::latest()->paginate(10);

        return response()->json(
            new KategoriCollection($kategoris),
            Response::HTTP_OK
        );
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $kategori = Kategori::create([
        'name' => $request->name,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Kategori berhasil ditambahkan',
        'data' => $kategori
    ]);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, Kategori $kategori)
    {
        $kategori->update($request->validated());

        return response()->json([
            'status' => true,
            'message' => 'Kategori berhasil di update',
            'data' => new KategoriResource($kategori),
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return response()->json([
            'status' => true,
            'message' => 'Kategori berhasil dihapus',
        ], Response::HTTP_OK);
    }
}