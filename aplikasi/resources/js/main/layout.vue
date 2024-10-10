<script setup>
import Header from './Header.vue';
import Sidebar from './Sidebar.vue';
import Footer from './Footer.vue';
</script>

<template>
    <div>
        <Header/>
        <Sidebar/>
        <article>
            <slot />
        </article>
        <Footer/>
    </div>
</template>