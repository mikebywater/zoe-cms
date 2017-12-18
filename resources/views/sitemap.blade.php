<?xml version="1.0" encoding="UTF-8"?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>

        <loc>{{url('/')}}</loc>

        <lastmod>{{\Carbon\Carbon::now()->format('Y-m-d')}}</lastmod>

    </url>

    @foreach($pages as $page)
    <url>

        <loc>{{url('/')}}/pages/{{urlencode($page->name)}}</loc>

        <lastmod>{{$page->updated_at->format('Y-m-d')}}</lastmod>

    </url>
    @endforeach

    <url>

        <loc>{{url('/')}}/reviews</loc>

        <lastmod>{{\Carbon\Carbon::now()->format('Y-m-d')}}</lastmod>

    </url>

</urlset>