<?php

namespace App\Http\Controllers;

use App\Models\Product;

class FacebookCatalogController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'brand'])
            ->where('status', 1)
            ->get();

        $xml = new \SimpleXMLElement(
            '<?xml version="1.0" encoding="UTF-8"?>
             <rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">
                <channel></channel>
             </rss>'
        );

        $channel = $xml->channel;
        $channel->addChild('title', 'My Shop Catalog');
        $channel->addChild('link', url('/'));
        $channel->addChild('description', 'Facebook Product Catalog');

        foreach ($products as $product) {

            $item = $channel->addChild('item');

            $item->addChild('g:id', $product->id, 'http://base.google.com/ns/1.0');
            $item->addChild('g:title', htmlspecialchars($product->name), 'http://base.google.com/ns/1.0');
            $item->addChild(
                'g:description',
                htmlspecialchars(strip_tags($product->short_description)),
                'http://base.google.com/ns/1.0'
            );

            $item->addChild(
                'g:availability',
                $product->stock_amount > 0 ? 'in stock' : 'out of stock',
                'http://base.google.com/ns/1.0'
            );

            $item->addChild('g:condition', 'new', 'http://base.google.com/ns/1.0');
            $item->addChild(
                'g:price',
                number_format($product->selling_price, 2) . ' BDT',
                'http://base.google.com/ns/1.0'
            );

            $item->addChild(
                'g:link',
                route('product', $product->slug),
                'http://base.google.com/ns/1.0'
            );

            $item->addChild(
                'g:image_link',
                asset($product->image),
                'http://base.google.com/ns/1.0'
            );

            $item->addChild(
                'g:brand',
                optional($product->brand)->name ?? 'Default Brand',
                'http://base.google.com/ns/1.0'
            );

            $item->addChild(
                'g:google_product_category',
                optional($product->category)->fb_category ?? 'Retail',
                'http://base.google.com/ns/1.0'
            );
        }

        return response($xml->asXML(), 200)
            ->header('Content-Type', 'application/xml');
    }
}
