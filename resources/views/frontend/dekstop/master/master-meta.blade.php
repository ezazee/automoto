<meta charset="utf-8">
<title>
    {{ request()->is('/') ? 'Automoto.id | Berita Otomotif Terkini' : ($post->title ?? 'Automoto.id | Berita Otomotif Terkini') }}
</title>
<meta name="description" content="
    {{ request()->is('/') ? 'menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif' : ($post->description ?? 'menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif') }}
">
<meta name="keywords" content="
    {{ request()->is('/') ? 'berita, gosip, selebriti, Indopop, Indonesia' : ($post->keyword ?? 'berita, gosip, selebriti, Indopop, Indonesia') }}
">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="
    {{ request()->is('/') ? 'Automoto.id' : ($post->title ?? 'Automoto.id') }}
">
<meta property="og:description" content="
    {{ request()->is('/') ? 'menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.' : ($post->description ?? 'menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.') }}
">
<meta property="og:image" content="
    {{
        !empty($post->gambar)
            ? (is_array($post->gambar)
                ? (isset($post->gambar[0])
                    ? (filter_var($post->gambar[0], FILTER_VALIDATE_URL)
                        ? $post->gambar[0]
                        : asset('storage/' . $post->gambar[0]))
                    : asset('images/share.jpg'))
                : (filter_var($post->gambar, FILTER_VALIDATE_URL)
                    ? $post->gambar
                    : asset('storage/' . $post->gambar)))
            : asset('images/share.jpg')
    }}
">

<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Automoto.id">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="
    {{ request()->is('/') ? 'Automoto.id' : ($post->title ?? 'Automoto.id') }}
">
<meta name="twitter:description" content="
    {{ request()->is('/') ? 'menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.' : ($post->description ?? 'menyajikan berita seputar otomotif motor, mobil dan life style sebagai bacaan ringan, informatif dan inspiratif. Disajikan dengan cepat, tepat, ringan.') }}
">
<meta name="twitter:image" content="
    {{
        !empty($post->gambar)
            ? (is_array($post->gambar)
                ? (isset($post->gambar[0])
                    ? (filter_var($post->gambar[0], FILTER_VALIDATE_URL)
                        ? $post->gambar[0]
                        : asset('storage/' . $post->gambar[0]))
                    : asset('images/share.jpg'))
                : (filter_var($post->gambar, FILTER_VALIDATE_URL)
                    ? $post->gambar
                    : asset('storage/' . $post->gambar)))
            : asset('images/share.jpg')
    }}
">

<!-- Favicon -->
<link rel="apple-touch-icon" href="{{ asset('frontend/logo/favicon.png') }}">
<link rel="shortcut icon" href="{{ asset('frontend/logo/favicon.png') }}">

<meta name="theme-color" content="#030303">
