<template>
    <div class="page-controller">
        <button v-if="arrowsType != 'no'" class="prev-btn" :class="{moving:arrowsType === 'animate'}" @click="changePage(prevIndex)"></button>
        <ul>
            <li @click="changePage(index)" v-for="index in pageNum" :key="'controller-'+index" class="controller-item"></li>
        </ul>
        <button v-if="arrowsType != 'no'" class="next-btn" :class="{moving:arrowsType === 'animate'}" @click="changePage(nextIndex)"></button>
    </div>
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