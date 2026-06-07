<?php

namespace App\Services;

use App\Models\Project;
use App\Models\Kategori;
use App\Models\Jenis;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Str;

class SeoService
{
    /**
     * Set SEO untuk Homepage / Beranda
     */
    public function setForHomepage(): void
    {
        $appName = config('app.name', 'Sajada Digital');

        SEOMeta::setDescription("Cari tanah kavling murah, tanah kavling kredit, rumah, dan properti terbaik di Pontianak, Kubu Raya & sekitarnya. Booking online mudah & aman bersama {$appName}.");
        SEOMeta::setCanonical(url('/'));

        OpenGraph::setTitle("Jual Tanah Kavling Murah & Kredit | {$appName}");
        OpenGraph::setDescription("Platform jual beli tanah kavling, rumah, dan properti terbaik. Temukan properti impian Anda!");
        OpenGraph::setUrl(url('/'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'id_ID');
        OpenGraph::addImage(asset('assets/images/icons/logo.jpg'));
        OpenGraph::setSiteName($appName);

        TwitterCard::setTitle("Jual Tanah Kavling Murah & Kredit | {$appName}");
        TwitterCard::setDescription("Cari tanah kavling murah & kredit di Pontianak dan sekitarnya.");

        JsonLd::setType('WebSite');
        JsonLd::setTitle($appName);
        JsonLd::setDescription("Platform jual beli tanah kavling dan properti terbaik di Pontianak & sekitarnya.");
        JsonLd::setUrl(url('/'));
    }

    /**
     * Set SEO untuk halaman Detail Project (paling penting untuk SEO!)
     */
    public function setForProjectDetail(Project $project, Kategori $kategori, Jenis $jenis): void
    {
        $appName = config('app.name', 'Sajada Digital');
        $pricing = $project->getPricingInfo();
        $priceText = $project->formatShortPrice($pricing['min_price']);
        $lokasi = optional(optional($project->lokasi)->regency)->name ?? 'Indonesia';

        $title = "{$project->nama_project} | {$kategori->kategori} {$lokasi} – {$appName}";

        $deskripsiClean = Str::limit(strip_tags($project->deskripsi ?? ''), 100);
        $description = "Jual {$kategori->kategori} {$project->nama_project} mulai {$priceText} "
            . "di {$lokasi}. {$deskripsiClean} Booking sekarang!";
        SEOMeta::setDescription(Str::limit($description, 160));

        // Canonical URL
        $canonicalUrl = route('detailproject', [$jenis->slug, $kategori->slug, $project->slug]);

        SEOMeta::setDescription($description);
        SEOMeta::setCanonical($canonicalUrl);

        OpenGraph::setTitle("{$project->nama_project} | {$kategori->kategori}");
        OpenGraph::setDescription("Mulai {$priceText} - {$project->alamat_project}");
        OpenGraph::setUrl($canonicalUrl);
        OpenGraph::addProperty('type', 'product');
        OpenGraph::addProperty('locale', 'id_ID');
        OpenGraph::setSiteName($appName);
        if ($project->thumbnail) {
            OpenGraph::addImage(asset('storage/' . ltrim($project->thumbnail, '/')));
        }

        TwitterCard::setTitle("{$project->nama_project} | {$kategori->kategori}");
        TwitterCard::setDescription("Mulai {$priceText} di {$lokasi}. Booking online sekarang!");
        if ($project->thumbnail) {
            TwitterCard::setImage(asset('storage/' . ltrim($project->thumbnail, '/')));
        }

        // JSON-LD - RealEstateListing Schema
        JsonLd::setType('RealEstateListing');
        JsonLd::setTitle($project->nama_project);
        JsonLd::setDescription(Str::limit(strip_tags($project->deskripsi ?? ''), 200));
        JsonLd::setUrl($canonicalUrl);
        if ($project->thumbnail) {
            JsonLd::addImage(asset('storage/' . ltrim($project->thumbnail, '/')));
        }
    }

    /**
     * Set SEO untuk halaman List Properti
     */
    public function setForPropertyList(string $pageTitle): void
    {
        $appName = config('app.name', 'Sajada Digital');

        SEOMeta::setDescription("Daftar {$pageTitle} terlengkap. Tanah kavling murah, kredit, dan properti terbaik di Pontianak & sekitarnya. Cari dan booking properti impian Anda sekarang di {$appName}!");
        SEOMeta::setCanonical(route('properti.index'));

        if (request()->getQueryString()) {
            SEOMeta::setRobots('noindex, follow');
        }

        OpenGraph::setDescription("Temukan {$pageTitle} terlengkap di {$appName}.");
        OpenGraph::setUrl(route('properti.index'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/images/icons/logo.jpg'));
        OpenGraph::setSiteName($appName);

        TwitterCard::setDescription("Daftar {$pageTitle} terlengkap di {$appName}.");

        JsonLd::setType('CollectionPage');
        JsonLd::setTitle("{$pageTitle} | {$appName}");
        JsonLd::setDescription("Daftar {$pageTitle} terlengkap.");
        JsonLd::setUrl(route('properti.index'));
    }

    /**
     * Set SEO untuk halaman Lihat Kota
     */
    public function setForCityList(): void
    {
        $appName = config('app.name', 'Sajada Digital');

        SEOMeta::setDescription("Cari tanah kavling, rumah, dan properti berdasarkan kota. Temukan properti terbaik di Pontianak, Kubu Raya, dan kota lainnya bersama {$appName}.");
        SEOMeta::setCanonical(route('lihatkota'));

        OpenGraph::setTitle("Pilih Kota | {$appName}");
        OpenGraph::setDescription("Cari properti berdasarkan kota di {$appName}.");
        OpenGraph::setUrl(route('lihatkota'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/images/icons/logo.jpg'));
        OpenGraph::setSiteName($appName);

        JsonLd::setType('CollectionPage');
        JsonLd::setTitle("Pilih Kota | {$appName}");
        JsonLd::setDescription("Cari properti berdasarkan lokasi kota.");
        JsonLd::setUrl(route('lihatkota'));
    }

    /**
     * Set SEO untuk halaman Pencarian (noindex untuk avoid duplicate content)
     */
    public function setForSearch(?string $keyword = null): void
    {
        $appName = config('app.name', 'Sajada Digital');

        $title = $keyword
            ? "Hasil Pencarian \"{$keyword}\""
            : "Cari Properti";

        SEOMeta::setDescription("Cari tanah kavling, rumah, dan properti di {$appName}. Temukan properti impian Anda dengan mudah.");
        SEOMeta::setRobots('noindex, follow');
        SEOMeta::setCanonical(route('cari-properti'));

        OpenGraph::setTitle("{$title} | {$appName}");
        OpenGraph::setDescription("Cari properti di {$appName}.");
        OpenGraph::setSiteName($appName);
    }

    public function setForAgenList(): void
    {
        $appName = config('app.name', 'Sajada Digital');

        SEOMeta::setDescription("Daftar agen properti terbaik di {$appName}. Bergabung sebagai agen dan dapatkan komisi menarik dari setiap penjualan properti di Pontianak & sekitarnya.");
        SEOMeta::setCanonical(route('agen.index'));

        OpenGraph::setTitle("Daftar Agen Properti | {$appName}");
        OpenGraph::setDescription("Bergabung sebagai agen properti di {$appName} dan dapatkan komisi menarik.");
        OpenGraph::setUrl(route('agen.index'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('assets/images/icons/logo.jpg'));
        OpenGraph::setSiteName($appName);

        JsonLd::setType('WebPage');
        JsonLd::setTitle("Daftar Agen | {$appName}");
        JsonLd::setDescription("Bergabung sebagai agen properti di Pontianak.");
        JsonLd::setUrl(route('agen.index'));
    }
}
