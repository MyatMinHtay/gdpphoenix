<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


    @foreach ($videos as $video)
        <url>
            <loc>{{ url('courses/details/' . $video->videoslug) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($video->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    @endforeach

    @foreach ($categories as $category)
        <url>
            <loc>{{ url('courses?category=' . $category->categoryname) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z', strtotime($category->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    @endforeach

    

    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.1</priority>
    </url>
</urlset>
