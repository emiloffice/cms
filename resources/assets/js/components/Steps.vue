<template>
    <ul class="steps" style="height: 140px;overflow: hidden;"  v-touch:left ="left" v-touch:right ="right" >
        <li  v-for="(step, index) in steps" :style="step.style">
            <div class="step"><p class="time">{{step.time}}</p><p class="des">{{step.des}}</p></div>
        </li>
    </ul>
</template>

<script>
    export default {
        created(){
            let _this = this
            console.log(typeof(_this.CoordinateX))
            this.steps.map(function (v,k) {
                v.style = 'bottom:'+ (33*(k)) + 'px;left:'+ (100*k)+'px'
            })
            console.log(this.steps)
        },
        mounted() {
            console.log('Steps Component mounted.')

        },
        data(){
            return{
                isActive: false,
                postionB:0,
                postionL:0,
                steps:[
                    {time:'2016.3',des:'公司在深圳成立 ',style:""},
                    {time:'2016.6',des:'《Dream Flight》 在Oculus成功上线   ',style:""},
                    {time:'2016.8',des:'天使轮百万美金融资    ',style:""},
                    {time:'2017.3',des:'《Seeking Dawn》获得 腾讯GAD-VR游戏大赛  最佳视觉奖    ',style:""},
                    {time:'2017.6',des:'公司携产品 《Seeking Dawn》 参加美国E3展 大获好评    ',style:""},
                    {time:'2017.6',des:'公司获得数千万 美金A轮融资',style:""},
                ],
                stepIndex:0
            }
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            },
            left: function (){
                alert('left')
                this.postionB = this.postionB - 33
                this.postionL = this.postionL - 100
                let _this = this
                this.steps.map(function (v,k) {
                    v.style = 'bottom:'+ (_this.postionB+33*k) + 'px;left:'+(_this.postionL+ 100*k)+'px'
                })
            },
            right: function () {
                alert('right')
                this.postionB = this.postionB + 33
                this.postionL = this.postionL + 100
                let _this = this
                this.steps.map(function (v,k) {
                    v.style = 'bottom:'+ (_this.postionB+33*k) + 'px;left:'+(_this.postionL+ 100*k)+'px'
                })
            },
            changePosition(){
                alert('change Data')
                alert(this.CoordinateX)
            }
        },
        computed:{
            changeStyle:  {
                get: function() {
                    return this.step.style
                },
                set: function () {

                }
            }
        },
        watch:{
            'stepIndex': 'changePosition'
        }

    }
</script>
