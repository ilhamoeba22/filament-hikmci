<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "1. Testing view: footer...\n";
    $footerHtml = view('footer')->render();
    echo "   [OK] footer rendered successfully (" . strlen($footerHtml) . " bytes)\n";

    echo "2. Testing view: index...\n";
    // Check if models can be loaded or mock them
    $beritaTerakhir = App\Models\Berita::latest()->take(3)->get();
    $carousels = App\Models\Carousel::all();
    $rateDeposito = App\Models\RateDeposito::whereNotNull('bulan')->get();
    $nominals = App\Models\Nominal::all();
    
    $indexHtml = view('index', compact('beritaTerakhir', 'carousels', 'rateDeposito', 'nominals'))->render();
    echo "   [OK] index rendered successfully (" . strlen($indexHtml) . " bytes)\n";

    echo "\n=== ALL VIEWS RENDERED SUCCESSFULLY ===\n";
    exit(0);
} catch (\Throwable $e) {
    echo "\n[ERROR] View rendering failed:\n";
    echo $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    exit(1);
}
