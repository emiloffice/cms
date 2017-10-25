<template>
    <section class="page" v-if="options"
             :style="{background:options.background,color:options.color||'#fff'}"
             :class="{'page-before': options.index < currentPage,'page-after': options.index > currentPage}">
        <div :class="{'page-center': options.isCenter}">
            <slot></slot>
        </div>
    </section>
    <section class="page" v-else>页面正在渲染中。。。</section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {

        }
    }
</script>
<style scoped>
    .page {
        position: absolute;
        width: 100%;
        height: 100%;
        transition: all 0.5s ease 0s;
    }
    .page-before {
        transform: translate3d(0,-100%,0);
    }
    .page-after {
        transform: translate3d(0,100%,0);
    }
</style>