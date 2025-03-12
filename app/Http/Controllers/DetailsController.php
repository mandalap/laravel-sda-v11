<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectFasilitas;
use App\Models\ProjectPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailsController extends Controller
{
    //
    public function index($jenis, $kategori, $project)
    {

        $jenis = Jenis::where('slug', $jenis)->firstOrFail();

        $kategori = Kategori::where('slug', $kategori)->firstOrFail();

        $project = Project::where("slug", $project)->firstOrFail();
        $facilities = ProjectFasilitas::where('project_id', $project->id)->get();
        $photos = ProjectPhoto::where('project_id', $project->id)->get();
        $siteplan = Product::get();

        return view("pages.details.index", compact('project', 'photos', 'facilities', 'kategori', 'siteplan'));
    }

    public function custinfo($jenis, $kategori, $project)
    {
        $member = Auth::guard('member')->user();
        $jenis = Jenis::where('slug', $jenis)->firstOrFail();
        $kategori = Kategori::where('slug', $kategori)->firstOrFail();
        $project = Project::where("slug", $project)->firstOrFail();
        $products = Product::where('project_id', $project->id)
            ->where('status', 'Tersedia')
            ->get();

        // Mengurutkan di level aplikasi
        $products = $products->sortBy(function($product) {
            preg_match('/([A-Za-z]+)([0-9]+)/', $product->nama_product, $matches);
            return [$matches[1], (int)$matches[2]]; // Urutkan berdasarkan huruf dan angka
        })->values(); // Mengembalikan koleksi yang terurut

        return view("pages.details.cust-info", compact('project', 'products', 'kategori', 'member'));
    }

    public function checkout(Request $request, $project)
    {
      
        // Mengambil input dari request
        $nama = $request->input('nama');
        $email = $request->input('email');
        $telepon = $request->input('telepon');

        // Mencari project berdasarkan slug
        $project = Project::where("slug", $project)->firstOrFail();
        
        // Mencari product berdasarkan code_product yang diambil dari request
        $product = Product::where("code_product", $request->input('product'))->firstOrFail();
       
        // Mengambil nilai dari input tersembunyi
        $kodeProduct = $request->input('code_product'); // Mengambil nilai dari input tersembunyi

        // Lakukan sesuatu dengan $project, $product, dan $kodeProduct

        // Mengembalikan view dengan data yang diperlukan
        return view("pages.details.checkout", compact('project', 'product', 'nama', 'email', 'telepon'));
    }
}
