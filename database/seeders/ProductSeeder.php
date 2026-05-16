<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Zirconia Oxygen Analyzer',
                'slug' => Str::slug('Zirconia Oxygen Analyzer'),
                'description' => 'High-precision oxygen measurement for industrial combustion processes.',
                'category' => 'Analyzer & Engineering',
                'brand' => 'RB Technologies',
                'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=600',
                'specifications' => json_encode(['Range' => '0-25% O2', 'Accuracy' => '+/- 1%']),
            ],
            [
                'name' => 'Continuous Emissions Monitoring System (CEMS)',
                'slug' => Str::slug('Continuous Emissions Monitoring System'),
                'description' => 'Reliable monitoring of gas emissions for environmental compliance.',
                'category' => 'Analyzer & Engineering',
                'brand' => 'Sick',
                'image' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=600',
                'specifications' => json_encode(['Gases' => 'SO2, NOX, CO', 'Cert' => 'MCERTS']),
            ],
            [
                'name' => 'Multi-Parameter Water Analyzer',
                'slug' => Str::slug('Multi-Parameter Water Analyzer'),
                'description' => 'Advanced water quality analysis for various industrial applications.',
                'category' => 'Analyzer & Engineering',
                'brand' => 'ECD',
                'image' => 'https://images.unsplash.com/photo-1542337311-64d17ec23f14?auto=format&fit=crop&q=80&w=600',
                'specifications' => json_encode(['Parameters' => 'pH, DO, Conductivity']),
            ],
            [
                'name' => 'Pressure Transmitter',
                'slug' => Str::slug('Pressure Transmitter'),
                'description' => 'Accurate pressure measurement for gas and liquid processes.',
                'category' => 'Automation & Instrumentation',
                'brand' => 'PIEZUS',
                'image' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80&w=600',
                'specifications' => json_encode(['Range' => '0-100 Bar', 'Output' => '4-20mA']),
            ],
            [
                'name' => 'Electric Control Valve',
                'slug' => Str::slug('Electric Control Valve'),
                'description' => 'Precise control of flow and pressure in automated systems.',
                'category' => 'Automation & Instrumentation',
                'brand' => 'RTK - Regeltechnik',
                'image' => 'https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&q=80&w=600',
                'specifications' => json_encode(['Type' => 'Globe Valve', 'Drive' => 'Electric']),
            ],
            [
                'name' => 'High-Purity Fittings & Valves',
                'slug' => Str::slug('High-Purity Fittings and Valves'),
                'description' => 'Quality fittings and valves for high-pressure gas systems.',
                'category' => 'Automation & Instrumentation',
                'brand' => 'NAI LOK',
                'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=600',
                'specifications' => json_encode(['Material' => 'SS316L', 'Press' => '6000 PSI']),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
