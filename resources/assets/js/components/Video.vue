<template>
    <div class="video-page" @mousewheel="returnFalse()">
        <iframe width="900" height="600" :src="videoSrc" frameborder="0" gesture="media" allowfullscreen></iframe>
        <i class="fa fa-close fa-2x play_close" @click="play_close()"></i>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Video Component mounted.')
        },
        components: {

        },
        props:[
          'videoSrc'
        ],
        methods:{
            returnFalse(){
                return false;
            },
            play_close(){
                this.$parent.videoIsShow = false
            }
        }
    }
</script>
<style>
    .video-page{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        background-color: rgba(0, 0, 0, 0.9);
    }
    .video-page iframe {
        width: 900px;
        height: 600px;
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -450px;
        margin-top: -300px;
    }
    .play_close{
        position: fixed;
        top: 20px;
        right: 20px;
        width: 20px;
        height: 20px;
        display: block;
        color: #fff;
        cursor: pointer;
    }
</style>
