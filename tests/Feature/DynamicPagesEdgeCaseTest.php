<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Asset;
use App\Models\Berita;
use App\Models\Carousel;
use App\Models\Ebook;
use App\Models\Edukasi;
use App\Models\Karir;
use App\Models\LaporanKeuanganBerkelanjutan;
use App\Models\LaporanPublikasi;
use App\Models\LaporanTahunan;
use App\Models\LaporanTataKelola;
use App\Models\Nominal;
use App\Models\PiagamAuditInternal;
use App\Models\RateDeposito;
use App\Models\Wakaf;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\View;
use Tests\TestCase;

class DynamicPagesEdgeCaseTest extends TestCase
{
    public function test_berita_renders_with_zero_records(): void
    {
        $berita = null;
        $beritaTerkini = collect([]);

        $html = View::make('berita', compact('berita', 'beritaTerkini'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Belum Ada Berita', $html);
    }

    public function test_berita_renders_with_author_null(): void
    {
        $dummy = new Berita([
            'judul' => 'Judul Berita Test',
            'isi' => 'Konten berita test untuk audit.',
            'lokasi' => 'Sleman',
            'gambar' => null,
            'user_id' => 99999,
        ]);
        $dummy->id = 1;
        $dummy->created_at = now();
        $dummy->setRelation('user', null);
        $beritaTerkini = collect([]);

        $html = View::make('berita', ['berita' => $dummy, 'beritaTerkini' => $beritaTerkini])->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Judul Berita Test', $html);
        $this->assertStringContainsString('Admin BPRS HIK MCI', $html);
    }

    public function test_berita_all_renders_with_zero_records(): void
    {
        $beritas = new LengthAwarePaginator([], 0, 6);
        $html = View::make('berita-all', compact('beritas'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Belum Ada Berita', $html);
    }

    public function test_karir_renders_with_zero_records(): void
    {
        $karirs = new LengthAwarePaginator([], 0, 3);
        $html = View::make('karir', compact('karirs'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Saat Ini Belum Ada Lowongan', $html);
    }

    public function test_karir_renders_with_single_record_show_route(): void
    {
        $dummy = new Karir([
            'judul' => 'Account Officer Syariah',
            'gambar' => 'dummy.jpg',
        ]);
        $dummy->id = 1;
        $dummy->created_at = now();

        $html = View::make('karir', ['karir' => $dummy])->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Account Officer Syariah', $html);
    }

    public function test_asset_renders_with_zero_records(): void
    {
        $assets = new LengthAwarePaginator([], 0, 6);
        $html = View::make('asset', compact('assets'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Belum ada flyer E-Asset', $html);
    }

    public function test_lapkeu_renders_with_all_categories_empty(): void
    {
        $laporanPublikasi = collect([]);
        $laporanTataKelola = collect([]);
        $laporanKeuanganBerkelanjutan = collect([]);
        $laporanTahunan = collect([]);

        $html = View::make('lapkeu', compact('laporanPublikasi', 'laporanTataKelola', 'laporanKeuanganBerkelanjutan', 'laporanTahunan'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Laporan Keuangan BPRS HIK MCI', $html);
    }

    public function test_wakaf_renders_with_zero_records(): void
    {
        $wakafs = collect([]);
        $html = View::make('wakaf', compact('wakafs'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Deposito Wakaf', $html);
    }

    public function test_edukasi_renders_with_zero_records(): void
    {
        $edukasis = new LengthAwarePaginator([], 0, 10);
        $html = View::make('edukasi', compact('edukasis'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Belum Ada Artikel Edukasi', $html);
    }

    public function test_edukasi_renders_with_custom_image_and_fallback(): void
    {
        $edukasiItem = new \App\Models\Edukasi([
            'judul' => 'Uji Coba Edukasi Syariah',
            'isi' => 'Konten pengujian edukasi syariah untuk nasabah.',
            'gambar' => 'images/sample-edukasi.jpg',
        ]);
        $edukasiItem->id = 999;
        $edukasiItem->created_at = now();

        $edukasis = new LengthAwarePaginator([$edukasiItem], 1, 10);
        $html = View::make('edukasi', compact('edukasis'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('storage/edukasi/images/sample-edukasi.jpg', $html);
        $this->assertStringContainsString('onerror=', $html);
    }

    public function test_edukasi_detail_renders_with_custom_image(): void
    {
        $edukasi = new \App\Models\Edukasi([
            'judul' => 'Detail Edukasi Finansial',
            'isi' => 'Panduan lengkap literasi keuangan syariah.',
            'gambar' => 'images/featured-edukasi.png',
        ]);
        $edukasi->id = 100;
        $edukasi->created_at = now();

        $sidebarItem = new \App\Models\Edukasi([
            'judul' => 'Artikel Edukasi Lainnya',
            'isi' => 'Ringkasan artikel sampingan.',
            'gambar' => 'images/sidebar-edukasi.png',
        ]);
        $sidebarItem->id = 101;
        $sidebarItem->created_at = now();

        $edukasiLainnya = collect([$sidebarItem]);

        $html = View::make('edukasi-detail', compact('edukasi', 'edukasiLainnya'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('storage/edukasi/images/featured-edukasi.png', $html);
        $this->assertStringContainsString('storage/edukasi/images/sidebar-edukasi.png', $html);
    }

    public function test_ebook_renders_with_zero_records(): void
    {
        $ebooks = collect([]);
        $html = View::make('ebook', compact('ebooks'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Belum ada E-Book yang tersedia', $html);
    }

    public function test_piagam_audit_renders_with_zero_records(): void
    {
        $piagams = collect([]);
        $html = View::make('piagam_audit', compact('piagams'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Belum Ada Dokumen', $html);
    }

    public function test_home_renders_with_empty_rates_and_nominals(): void
    {
        $beritaTerakhir = collect([]);
        $carousels = collect([]);
        $rateDeposito = collect([]);
        $nominals = collect([]);

        $html = View::make('index', compact('beritaTerakhir', 'carousels', 'rateDeposito', 'nominals'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Berita & Informasi Terbaru', $html);
        $this->assertStringNotContainsString('Equivalent Rate Deposito Karimah', $html);
    }

    public function test_deposito_page_renders_equivalent_rate_table(): void
    {
        $response = $this->get('/main-deposito/deposito');
        $response->assertStatus(200);
        $response->assertSee('Equivalent Rate Deposito Karimah');
        $response->assertSee('BAGI HASIL TERBARU');
    }

    public function test_share_box_and_friendly_slug_urls(): void
    {
        $berita = new \App\Models\Berita([
            'judul' => 'Sosialisasi Literasi Keuangan Syariah Yogyakarta',
            'isi' => 'Isi berita pengujian.',
            'gambar' => 'images/test.jpg',
        ]);
        $berita->id = 59;

        $edukasi = new \App\Models\Edukasi([
            'judul' => 'Panduan Menabung Cerdas Syariah',
            'isi' => 'Isi edukasi pengujian.',
            'gambar' => 'images/edu.jpg',
        ]);
        $edukasi->id = 7;

        $asset = new \App\Models\Asset([
            'judul' => 'Tanah dan Bangunan Sleman Siap Huni',
            'gambar' => 'asset/images/tanah.jpg',
        ]);
        $asset->id = 12;

        $this->assertEquals('59-sosialisasi-literasi-keuangan-syariah-yogyakarta', $berita->getRouteKey());
        $this->assertStringContainsString('/berita/59-sosialisasi-literasi-keuangan-syariah-yogyakarta', $berita->share_url);

        $this->assertEquals('7-panduan-menabung-cerdas-syariah', $edukasi->getRouteKey());
        $this->assertStringContainsString('/edukasi/7-panduan-menabung-cerdas-syariah', $edukasi->share_url);

        $this->assertEquals('12-tanah-dan-bangunan-sleman-siap-huni', $asset->getRouteKey());
        $this->assertStringContainsString('/asset/12-tanah-dan-bangunan-sleman-siap-huni', $asset->share_url);

        $shareBoxHtml = View::make('partials.share-box', [
            'title' => $berita->judul,
            'url' => $berita->share_url,
            'type' => 'Berita',
        ])->render();

        $this->assertStringContainsString('https://api.whatsapp.com/send?text=', $shareBoxHtml);
        $this->assertStringContainsString('copyShareLink', $shareBoxHtml);
        $this->assertStringContainsString('Salin Link', $shareBoxHtml);
    }

    public function test_asset_detail_renders(): void
    {
        $asset = new \App\Models\Asset([
            'judul' => 'Ruko Strategis Kaliurang',
            'gambar' => 'asset/images/ruko.jpg',
        ]);
        $asset->id = 25;
        $asset->created_at = now();

        $assetsLainnya = collect([]);

        $html = View::make('asset-detail', compact('asset', 'assetsLainnya'))->render();
        $this->assertNotEmpty($html);
        $this->assertStringContainsString('Ruko Strategis Kaliurang', $html);
        $this->assertStringContainsString('Tanya Aset via WhatsApp', $html);
        $this->assertStringContainsString('Bagikan E-Asset Ini', $html);
    }

    public function test_slug_url_routes_resolve_successfully(): void
    {
        $berita = \App\Models\Berita::first();
        if ($berita) {
            $response = $this->get('/berita/' . $berita->id . '-' . $berita->slug);
            $response->assertStatus(200);
            $response->assertSee($berita->judul);
        }

        $edukasi = \App\Models\Edukasi::first();
        if ($edukasi) {
            $response = $this->get('/edukasi/' . $edukasi->id . '-' . $edukasi->slug);
            $response->assertStatus(200);
            $response->assertSee($edukasi->judul);
        }

        $asset = \App\Models\Asset::first();
        if ($asset) {
            $response = $this->get('/asset/' . $asset->id . '-' . $asset->slug);
            $response->assertStatus(200);
            $response->assertSee($asset->judul);
        }
    }
}

