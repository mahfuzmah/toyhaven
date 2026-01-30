<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Str;

class GenerateSlugs extends Command
{
    protected $signature = 'products:generate-slugs';
    protected $description = 'Generate slug for existing products without slug';

    public function handle()
    {
        $products = Product::whereNull('slug')->get();

        if ($products->isEmpty()) {
            $this->info('No products found with null slug.');
            return;
        }

        foreach ($products as $product) {
            $slug = Str::slug($product->name) . '-' . uniqid();

            // Force save to bypass mass assignment
            $product->forceFill(['slug' => $slug])->save();

            $this->info("Slug generated for product: {$product->name} → {$slug}");
        }

        $this->info('All missing slugs generated successfully!');
    }
}
