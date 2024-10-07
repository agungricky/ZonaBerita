<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{isset($berita_utama[0]->foto) ? $berita_utama[0]->foto : ''}})">
                    <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                    
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            {{isset($berita_utama[0]->Kategori) ? $berita_utama[0]->Kategori : 'Tidak Ada Konten'}}
                        </a>

                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                {{isset($berita_utama[0]->Judul ) ? $berita_utama[0]->Judul : ''}}
                            </a>
                        </h3>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">

                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{ isset($berita_utama[1]->foto) ? $berita_utama[1]->foto : ''}});">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{isset($berita_utama[1]->Kategori) ? $berita_utama[1]->Kategori : 'Tidak Ada Konten'}}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="blog-detail-01.html" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                        {{isset($berita_utama[1]->Judul) ? $berita_utama[1]->Judul : ''}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{isset($berita_utama[2]->foto) ? $berita_utama[2]->foto : ''}});">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{isset($berita_utama[2]->Kategori) ? $berita_utama[2]->Kategori : 'Tidak Ada Konten'}}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        {{isset($berita_utama[2]->Judul) ? $berita_utama[2]->Judul : ''}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{isset($berita_utama[3]->foto) ? $berita_utama[3]->foto : ''}});">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{isset($berita_utama[3]->Kategori) ? $berita_utama[3]->Kategori : 'Tidak Ada konten'}}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        {{isset($berita_utama[3]->Judul) ? $berita_utama[3]->Judul : ''}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>