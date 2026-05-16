<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Strategic Meeting with Key Principles from Russia',
                'slug' => Str::slug('Strategic Meeting with Key Principles from Russia'),
                'content' => 'PT. Indotek Prima Jaya recently hosted a high-level strategic meeting with our esteemed principles from Russia. The meeting focused on strengthening our cooperation in providing advanced industrial measurement solutions for the Indonesian market. Discussions covered technical enhancements, future product roadmaps, and logistics optimization to ensure our clients receive the best technology with unmatched reliability.',
                'excerpt' => 'Strengthening international partnerships to bring advanced industrial solutions to Indonesia.',
                'category' => 'Corporate',
                'author' => 'Admin Indotek',
                'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1200',
                'read_time' => '5 min read',
                'is_featured' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Prima Jaya Berbagi: A Commitment to Community Support',
                'slug' => Str::slug('Prima Jaya Berbagi: A Commitment to Community Support'),
                'content' => 'Through our "Prima Jaya Berbagi" initiative, we continue our commitment to corporate social responsibility. This month, the Indotek team visited several local communities to provide essential supplies and support. We believe that a successful business should grow together with the community, and this program is our way of giving back and fostering social well-being.',
                'excerpt' => 'Growing together with the community through our ongoing CSR programs.',
                'category' => 'CSR',
                'author' => 'Admin Indotek',
                'image' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=1200',
                'read_time' => '3 min read',
                'is_featured' => false,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Indotek Prima Jaya Officially Sponsors RSS Football School',
                'slug' => Str::slug('Indotek Prima Jaya Officially Sponsors RSS Football School'),
                'content' => 'We are proud to announce that PT. Indotek Prima Jaya is now an official sponsor of the RSS Football School. We believe in nurturing young talents and supporting healthy lifestyles through sports. By sponsoring RSS, we hope to contribute to the development of the next generation of Indonesian athletes and provide them with better facilities and opportunities to excel.',
                'excerpt' => 'Supporting young athletes and local talent through our sponsorship of RSS Football School.',
                'category' => 'Sponsorship',
                'author' => 'Admin Indotek',
                'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=1200',
                'read_time' => '4 min read',
                'is_featured' => false,
                'published_at' => now()->subDays(5),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
