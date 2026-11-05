<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class BackendSecurityAndPerformanceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Cache::flush();
    }

    public function test_security_headers_are_present_on_web_responses(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertHeader('X-Frame-Options', 'SAMEORIGIN');
        $response->assertHeader('X-Content-Type-Options', 'nosniff');
        $response->assertHeader('X-XSS-Protection', '1; mode=block');
        $response->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->assertHeader('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
    }

    public function test_home_controller_caches_expected_data(): void
    {
        $this->assertFalse(Cache::has('web:home:carousels'));
        $this->assertFalse(Cache::has('web:home:rates'));
        $this->assertFalse(Cache::has('web:home:nominals'));
        $this->assertFalse(Cache::has('web:home:berita_terakhir'));

        $response = $this->get('/');
        $response->assertStatus(200);

        $this->assertTrue(Cache::has('web:home:carousels'));
        $this->assertTrue(Cache::has('web:home:rates'));
        $this->assertTrue(Cache::has('web:home:nominals'));
        $this->assertTrue(Cache::has('web:home:berita_terakhir'));
    }

    public function test_laporan_controller_caches_all_laporan_data_ordered_by_tahun_desc(): void
    {
        $this->assertFalse(Cache::has('web:lapkeu:all'));

        $response = $this->get('/lapkeu');
        $response->assertStatus(200);

        $this->assertTrue(Cache::has('web:lapkeu:all'));

        $cached = Cache::get('web:lapkeu:all');
        $this->assertIsArray($cached);
        $this->assertArrayHasKey('laporanPublikasi', $cached);
        $this->assertArrayHasKey('laporanTataKelola', $cached);
        $this->assertArrayHasKey('laporanKeuanganBerkelanjutan', $cached);
        $this->assertArrayHasKey('laporanTahunan', $cached);

        // Verify ordering by tahun desc
        $publikasiTahun = $cached['laporanPublikasi']->pluck('tahun')->all();
        $sortedPublikasi = $publikasiTahun;
        rsort($sortedPublikasi);
        $this->assertSame($sortedPublikasi, $publikasiTahun);
    }

    public function test_wakaf_controller_caches_wakafs(): void
    {
        $this->assertFalse(Cache::has('web:wakaf:all'));

        $response = $this->get('/main-deposito/wakaf');
        $response->assertStatus(200);

        $this->assertTrue(Cache::has('web:wakaf:all'));
    }

    public function test_ebook_controller_caches_ebooks(): void
    {
        $this->assertFalse(Cache::has('web:ebook:all'));

        $response = $this->get('/ebook');
        $response->assertStatus(200);

        $this->assertTrue(Cache::has('web:ebook:all'));
    }

    public function test_piagam_audit_controller_caches_piagams(): void
    {
        $this->assertFalse(Cache::has('web:piagam_audit:all'));

        $response = $this->get('/piagam-audit');
        $response->assertStatus(200);

        $this->assertTrue(Cache::has('web:piagam_audit:all'));
    }

    public function test_berita_show_excludes_current_id_from_berita_terkini(): void
    {
        $berita = Berita::first();
        if (! $berita) {
            $this->markTestSkipped('No berita records found in database.');
        }

        $response = $this->get('/berita/' . $berita->id);
        $response->assertStatus(200);

        /** @var \Illuminate\Database\Eloquent\Collection $terkini */
        $terkini = $response->viewData('beritaTerkini');
        $this->assertFalse($terkini->contains('id', $berita->id));
    }

    public function test_model_prevent_lazy_loading_is_active(): void
    {
        $this->assertTrue(Model::preventsLazyLoading());
    }
}
