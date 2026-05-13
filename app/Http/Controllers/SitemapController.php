<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Project;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = cache()->remember('sitemap', now()->addHours(6), function () {
            return [
                'projects' => Project::approvedAndVisible()
                    ->with(['jenis', 'kategori'])
                    ->orderBy('updated_at', 'desc')
                    ->get(),
                'lokasis' => Lokasi::withApprovedProjects()->get(),
            ];
        });

        return response()
            ->view('sitemap.index', $sitemap)
            ->header('Content-Type', 'text/xml');
    }
}
