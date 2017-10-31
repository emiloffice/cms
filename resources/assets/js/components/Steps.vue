<template>
    <ul class="steps" style="height: 140px;overflow: hidden;" v-on:touchmove="test()">
        <li style="transform:translate(0,99px)">
            <div class="step"></div>
            <div class="des"></div>
        </li>
        <li style="transform:translate(100px,33px);">
            <div class="step"></div>
            <div class="des"></div>
        </li>
        <li style="transform:translate(200px,-33px);">
            <div class="step"></div>
            <div class="des"></div>
        </li>
        <li style="transform:translate(300px,-99px);">
            <div class="step"></div>
            <div class="des"></div>
        </li>
    </ul>
</template>

<script>
    export default {
        mounted() {
            console.log('Steps Component mounted.')
        },
        data(){
            return{
                isActive: false
            }
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            },
            test(){
                alert('touchmove')
            }
        }
    }
</script>
