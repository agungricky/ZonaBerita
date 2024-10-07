<header>
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                {{-- Navbar Lokasi --}}
                <div class="left-topbar">
                    <x-lokasi></x-lokasi>

                    <a href="#" class="left-topbar-item">About</a>
                    <a href="#" class="left-topbar-item">Contact</a>
                    <a href="#" class="left-topbar-item">Log in</a>
                </div>

                {{-- Sosial Media --}}
                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="{{ asset('public/news_portal/images/icons/logo-01.png') }}"
                        alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <a href="#" class="left-topbar-item">
                        Sing up
                    </a>

                    <a href="#" class="left-topbar-item">
                        Log in
                    </a>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage v1</a></li>
                        <li><a href="home-02.html">Homepage v2</a></li>
                        <li><a href="home-03.html">Homepage v3</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="category-01.html">News</a>
                </li>

                <li>
                    <a href="category-02.html">Entertainment </a>
                </li>

                <li>
                    <a href="category-01.html">Business</a>
                </li>

                <li>
                    <a href="category-02.html">Travel</a>
                </li>

                <li>
                    <a href="category-01.html">Life Style</a>
                </li>

                <li>
                    <a href="category-02.html">Video</a>
                </li>

                <li>
                    <a href="#">Features</a>
                    <ul class="sub-menu-m">
                        <li><a href="category-01.html">Category Page v1</a></li>
                        <li><a href="category-02.html">Category Page v2</a></li>
                        <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                        <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                        <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                        <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                        <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
        </div>

        <!-- Dekstop -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="index.html"><img src="{{ asset('public/news_portal/images/icons/logo-01.png') }}"
                        alt="LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <a href=""><img src="{{ asset('public/news_portal/images/banner-01.jpg') }}" alt="IMG"></a>
            </div>
        </div>

        <!-- Category -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="">
                        <img src="{{ asset('public/news_portal/images/icons/logo-01.png') }}" alt="LOGO">
                    </a>

                    <ul class="main-menu">
                        @foreach ($kategori as $item)
                            <li class="mega-menu-item">
                                <a href="">{{ $item->Kategori }}</a>
                    
                                <div class="sub-mega-menu">
                                    <div class="nav flex-column nav-pills" role="tablist">
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($sub_kategori as $value)
                                            @if ($item->idKategori == $value->Kategori_idKategori)
                                                <a class="nav-link {{ $no == 0 ? 'active' : '' }}" data-toggle="pill"
                                                    href="#news-{{ $item->idKategori }}-{{ $no }}" role="tab">
                                                    {{ $value->Sub_kategori }}
                                                </a>
                                                @php
                                                    $no++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>
                    
                                    <div class="tab-content">
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($sub_kategori as $value)
                                            @if ($item->idKategori == $value->Kategori_idKategori)
                                                <div class="tab-pane {{ $no == 0 ? 'show active' : '' }}" 
                                                     id="news-{{ $item->idKategori }}-{{ $no }}" role="tabpanel">
                                                    <div class="row">
                                                        @foreach ($postingan->where('Sub_kategori_idSub_kategori', $value->idSub_kategori)->sortByDesc('created_at')->take(4) as $post)
                                                            <div class="col-3">
                                                                <div>
                                                                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                                        <img src="{{ $post->foto }}" alt="IMG">
                                                                    </a>
                                    
                                                                    <div class="p-t-10">
                                                                        <h5 class="p-b-5">
                                                                            <a href="blog-detail-01.html"
                                                                                class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                                {{ $post->Judul }}
                                                                            </a>
                                                                        </h5>
                                    
                                                                        <span class="cl8">
                                                                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                                Publish
                                                                            </a>
                                    
                                                                            <span class="f1-s-3 m-rl-3">-</span>
                                    
                                                                            <span class="f1-s-3">
                                                                                {{ $post->created_at->format('Y-m-d') }}
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @php
                                                    $no++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    
                </nav>
            </div>
        </div>
    </div>
</header>
