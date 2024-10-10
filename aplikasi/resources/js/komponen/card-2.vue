<script setup>
defineProps({
    title:String,
    icon:String,
    status:String,
    jumlah:Number,
    deskripsi:String,
    footer_card:String
})
</script>

<template>
    <!-- Sales Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li>
                        <a class="dropdown-item" href="#">Selengkapnya</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">{{ title }} <span>| {{ status }}</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i :class="icon"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ jumlah }}</h6>
                        <span class="text-success small pt-1 fw-bold">{{ deskripsi }}</span>
                        <span class="text-muted small pt-2 ps-1">{{ footer_card }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sales Card -->
</template>