<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DownloadProductImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:download-images';
    protected $description = 'Download all external product images to local storage';

    public function handle()
    {
        $products = Product::whereNotNull('thumbnail')
            ->where('thumbnail', 'not like', 'storage/%')
            ->get();

        $bar = $this->output->createProgressBar(count($products));
        $this->info("Found {$products->count()} products with external images");

        foreach ($products as $product) {
            try {
                $cleanUrl = strtok($product->thumbnail, '?');

                $contents = file_get_contents($cleanUrl);
                $filename = 'products/product-' . $product->id . '-' . time() . '.jpg';
                Storage::disk('public')->put($filename, $contents);

                $product->update(['thumbnail' => 'storage/' . $filename]);
                $bar->advance();
            } catch (\Exception $e) {
                $this->error("Failed to process product #{$product->id}: {$e->getMessage()}");
            }
        }

        $bar->finish();
        $this->newLine();
        $this->info('Completed processing product images');
    }
}
