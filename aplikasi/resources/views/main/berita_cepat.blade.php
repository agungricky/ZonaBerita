<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                {{-- Brita 1 --}}
                <div class="p-b-20">
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl12 tab01-title">
                                {{ $konten_Beritacepat[0]->Kategori }}
                            </h3>

                            <!-- Nav tabs -->
                            @php
                                $counter = 1;
                            @endphp
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach ($sub_kategori as $item)
                                    @if ($item->Kategori_idKategori == $konten_Beritacepat[0]->Kategori_idKategori)
                                        <li class="nav-item">
                                            <a class="nav-link {{ $counter == 1 ? 'active' : '' }}" data-toggle="tab"
                                                href="#tab1-{{ $item->idSub_kategori }}"
                                                role="tab">{{ $item->Sub_kategori }}</a>
                                        </li>

                                        <li class="nav-item-more dropdown dis-none">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>

                                            <ul class="dropdown-menu">

                                            </ul>
                                        </li>

                                        @if ($counter == 3)
                                        @break
                                    @endif
                                    @php
                                        $counter++;
                                    @endphp
                                @endif
                            @endforeach
                        </ul>

                        <!--  -->
                        <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                            View all
                            <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                        </a>
                    </div>

                    <div class="tab-content p-t-35">
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($sub_kategori as $item)
                            @if ($item->Kategori_idKategori == $konten_Beritacepat[0]->Kategori_idKategori)
                                <div class="tab-pane fade {{ $counter == 1 ? 'show active' : '' }}"
                                    id="tab1-{{ $counter }}" role="tabpanel">
                                    <div class="row">
                                        @php
                                            $no = 1;
                                        @endphp
                                        <div class="col-md-6 p-r-25 p-r-15-sr991">
                                            @foreach ($berita as $value)
                                                @if ($item->idSub_kategori == $value->Sub_kategori_idSub_kategori && $no == 1)
                                                    <div class="m-b-30">
                                                        <a href="" class="wrap-pic-w hov1 trans-03">
                                                            <img src="{{ url($value->foto) }}" alt="IMG">
                                                        </a>
                                                        <div class="p-t-20">
                                                            <h5 class="p-b-5">
                                                                <a href="blog-detail-01.html"
                                                                    class="f1-m-3 cl2 hov-cl10 trans-03">
                                                                    {{ $value->Judul }}
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-4 cl8 hov-cl10 trans-03">
                                                                    {{ $value->Sub_kategori }}
                                                                </a>
                                                                <span class="f1-s-3 m-rl-3">-</span>
                                                                <span class="f1-s-3">{{ $value->created_at }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @php $no++; @endphp
                                                @endif
                                            @endforeach
                                        </div>

                                        @php
                                            $no = 1;
                                        @endphp
                                        <div class="col-md-6 p-r-25 p-r-15-sr991">
                                            @foreach ($berita as $value)
                                                @if ($item->idSub_kategori == $value->Sub_kategori_idSub_kategori)
                                                    @if ($no > 1 && $no <= 4)
                                                        <div class="flex-wr-sb-s m-b-30">
                                                            <a href="blog-detail-01.html"
                                                                class="size-w-1 wrap-pic-w hov1 trans-03">
                                                                <img src="{{ url($value->foto) }}" alt="IMG">
                                                            </a>
                                                            <div class="size-w-2">
                                                                <h5 class="p-b-5">
                                                                    <a href="blog-detail-01.html"
                                                                        class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                        {{ $value->Judul }}
                                                                    </a>
                                                                </h5>
                                                                <span class="cl8">
                                                                    <a href="#"
                                                                        class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                        {{ $value->Sub_kategori }}
                                                                    </a>
                                                                    <span class="f1-s-3 m-rl-3">-</span>
                                                                    <span
                                                                        class="f1-s-3">{{ $value->created_at }}</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $no++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            @endif
                            @php
                                $counter++;
                            @endphp
                        @endforeach
                    </div>
                </div>

                {{-- Brita 2 --}}
                <div class="tab01 p-b-20">
                    <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                        <!-- Brand tab -->
                        <h3 class="f1-m-2 cl13 tab01-title">
                            {{ $konten_Beritacepat[1]->Kategori }}
                        </h3>

                        <!-- Nav tabs -->
                        @php
                            $counter = 1;
                        @endphp
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($sub_kategori as $item)
                                @if ($item->Kategori_idKategori == $konten_Beritacepat[1]->Kategori_idKategori)
                                    <li class="nav-item">
                                        <!-- Pastikan tab pertama memiliki kelas 'active' -->
                                        <a class="nav-link {{ $counter == 1 ? 'active' : '' }}" data-toggle="tab"
                                            href="#tab1-{{ $item->idSub_kategori }}"
                                            role="tab">{{ $item->Sub_kategori }}</a>
                                    </li>

                                    @if ($counter == 3)
                                    @break
                                @endif
                                @php
                                    $counter++;
                                @endphp
                            @endif
                        @endforeach
                    </ul>

                    <!-- Link view all -->
                    <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                        View all
                        <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                    </a>
                </div>

                <!-- Tab content -->
                <div class="tab-content p-t-35">
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($sub_kategori as $item)
                        @if ($item->Kategori_idKategori == $konten_Beritacepat[1]->Kategori_idKategori)
                            <!-- Pastikan tab pertama memiliki kelas 'show active' -->
                            <div class="tab-pane fade {{ $counter == 1 ? 'show active' : '' }}"
                                id="tab1-{{ $item->idSub_kategori }}" role="tabpanel">
                                <div class="row">
                                    @php
                                        $no = 1;
                                    @endphp
                                    <!-- Konten berita -->
                                    <div class="col-md-6 p-r-25 p-r-15-sr991">
                                        @foreach ($berita as $value)
                                            @if ($item->idSub_kategori == $value->Sub_kategori_idSub_kategori && $no == 1)
                                                <div class="m-b-30">
                                                    <a href="" class="wrap-pic-w hov1 trans-03">
                                                        <img src="{{ url($value->foto) }}" alt="IMG"
                                                            height="200px">
                                                    </a>
                                                    <div class="p-t-20">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html"
                                                                class="f1-m-3 cl2 hov-cl10 trans-03">
                                                                {{ $value->Judul }}
                                                            </a>
                                                        </h5>
                                                        <span class="cl8">
                                                            <a href="#"
                                                                class="f1-s-4 cl8 hov-cl10 trans-03">
                                                                {{ $value->Sub_kategori }}
                                                            </a>
                                                            <span class="f1-s-3 m-rl-3">-</span>
                                                            <span
                                                                class="f1-s-3">{{ $value->created_at }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                @php $no++; @endphp
                                            @endif
                                        @endforeach
                                    </div>

                                    <!-- Berita tambahan -->
                                    @php
                                        $no = 1;
                                    @endphp
                                    <div class="col-md-6 p-r-25 p-r-15-sr991">
                                        @foreach ($berita as $value)
                                            @if ($item->idSub_kategori == $value->Sub_kategori_idSub_kategori)
                                                @if ($no > 1 && $no <= 4)
                                                    <div class="flex-wr-sb-s m-b-30">
                                                        <a href="blog-detail-01.html"
                                                            class="size-w-1 wrap-pic-w hov1 trans-03">
                                                            <img src="{{ url($value->foto) }}" alt="IMG">
                                                        </a>
                                                        <div class="size-w-2">
                                                            <h5 class="p-b-5">
                                                                <a href="blog-detail-01.html"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    {{ $value->Judul }}
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    {{ $value->Sub_kategori }}
                                                                </a>
                                                                <span class="f1-s-3 m-rl-3">-</span>
                                                                <span
                                                                    class="f1-s-3">{{ $value->created_at }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                @endif
                                                @php $no++; @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @php
                                $counter++;
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Brita 3 --}}
            <div class="tab01 p-b-20">
                <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                    <!-- Brand tab -->
                    <h3 class="f1-m-2 cl14 tab01-title">
                        {{ $konten_Beritacepat[2]->Kategori }}
                    </h3>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($sub_kategori as $item)
                            @if ($item->Kategori_idKategori == $konten_Beritacepat[2]->Kategori_idKategori)
                                <li class="nav-item">
                                    <a class="nav-link {{ $counter == 1 ? 'active' : '' }}" data-toggle="tab"
                                        href="#tab3-{{ $item->idSub_kategori }}"
                                        role="tab">{{ $item->Sub_kategori }}</a>
                                </li>

                                <li class="nav-item-more dropdown dis-none">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        href="#">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- Dropdown menu content -->
                                    </ul>
                                </li>

                                @if ($counter == 3)
                                @break
                            @endif

                            @php $counter++; @endphp
                        @endif
                    @endforeach
                </ul>

                <!-- View all link -->
                <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                    View all
                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                </a>
            </div>

            <!-- Tab content -->
            <div class="tab-content p-t-35">
                @php
                    $counter = 1;
                @endphp
                @foreach ($sub_kategori as $item)
                    @if ($item->Kategori_idKategori == $konten_Beritacepat[2]->Kategori_idKategori)
                        <div class="tab-pane fade {{ $counter == 1 ? 'show active' : '' }}"
                            id="tab3-{{ $item->idSub_kategori }}" role="tabpanel">
                            <div class="row">
                                @php $no = 1; @endphp

                                <!-- Konten berita utama -->
                                <div class="col-md-6 p-r-25 p-r-15-sr991">
                                    @foreach ($berita as $value)
                                        @if ($item->idSub_kategori == $value->Sub_kategori_idSub_kategori && $no == 1)
                                            <div class="m-b-30">
                                                <a href="" class="wrap-pic-w hov1 trans-03">
                                                    <img src="{{ url($value->foto) }}" alt="IMG">
                                                </a>
                                                <div class="p-t-20">
                                                    <h5 class="p-b-5">
                                                        <a href="blog-detail-01.html"
                                                            class="f1-m-3 cl2 hov-cl10 trans-03">
                                                            {{ $value->Judul }}
                                                        </a>
                                                    </h5>
                                                    <span class="cl8">
                                                        <a href="#"
                                                            class="f1-s-4 cl8 hov-cl10 trans-03">
                                                            {{ $value->Sub_kategori }}
                                                        </a>
                                                        <span class="f1-s-3 m-rl-3">-</span>
                                                        <span
                                                            class="f1-s-3">{{ $value->created_at }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            @php $no++; @endphp
                                        @endif
                                    @endforeach
                                </div>

                                <!-- Berita tambahan -->
                                @php
                                    $no = 1;
                                @endphp
                                <div class="col-md-6 p-r-25 p-r-15-sr991">
                                    @foreach ($berita as $value)
                                        @if ($item->idSub_kategori == $value->Sub_kategori_idSub_kategori)
                                            @if ($no > 1 && $no <= 4)
                                                <div class="flex-wr-sb-s m-b-30">
                                                    <a href=""
                                                        class="size-w-1 wrap-pic-w hov1 trans-03">
                                                        <img src="{{ url($value->foto) }}"
                                                            alt="IMG">
                                                    </a>
                                                    <div class="size-w-2">
                                                        <h5 class="p-b-5">
                                                            <a href="blog-detail-01.html"
                                                                class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                {{ $value->Judul }}
                                                            </a>
                                                        </h5>
                                                        <span class="cl8">
                                                            <a href="#"
                                                                class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                {{ $value->Sub_kategori }}
                                                            </a>
                                                            <span class="f1-s-3 m-rl-3">-</span>
                                                            <span
                                                                class="f1-s-3">{{ $value->created_at }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                            @php
                                                $no++;
                                            @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        @php $counter++; @endphp
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('main.berita_populer')
</div>
</div>
</section>
