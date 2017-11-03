<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner">
            <img src="/images/m_index_banner.png" alt="" style="width: 100%">
        </div>
        <p class="title"></p>
        <agile class="game_list container index" :dots="false" :arrows="false">
            <div class="slide">
                <img src="/images/m_seekingdawn_thumb.png" alt="seekingdawn cover" style="" class="cover">
                <p class="des">Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，
                    带你进入身临其境的外星人“死亡世界”。
                    如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。</p>
                <a href="#" class="more"><img src="/images/m_more.png" alt=""></a>
            </div>
            <div class="slide">
                <img src="/images/m_seekingdawn_thumb.png" alt="seekingdawn cover" style="" class="cover">
                <p class="des">Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，
                    带你进入身临其境的外星人“死亡世界”。
                    如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。</p>
                <a href="#" class="more"><img src="/images/m_more.png" alt=""></a>
            </div>
            <div class="slide">
                <img src="/images/m_seekingdawn_thumb.png" alt="seekingdawn cover" style="" class="cover">
                <p class="des">Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，
                    带你进入身临其境的外星人“死亡世界”。
                    如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。</p>
                <a href="#" class="more"><img src="/images/m_more.png" alt=""></a>
            </div>
            <div class="slide">
                <img src="/images/m_seekingdawn_thumb.png" alt="seekingdawn cover" style="" class="cover">
                <p class="des">Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，
                    带你进入身临其境的外星人“死亡世界”。
                    如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。</p>
                <a href="#" class="more"><img src="/images/m_more.png" alt=""></a>
            </div>
            <div class="slide">
                <img src="/images/m_seekingdawn_thumb.png" alt="seekingdawn cover" style="" class="cover">
                <p class="des">Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，
                    带你进入身临其境的外星人“死亡世界”。
                    如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。</p>
                <a href="#" class="more"><img src="/images/m_more.png" alt=""></a>
            </div>
        </agile>
        <div class="about index">
            <img src="/images/m_about_us.png" alt="ABOUT US" style="width: 100%">
            <div class="des container">
                <p class="title">我们的愿景</p>
                <p>我们希望能够成为世界顶尖的游戏开发商，做出能够风靡世界的3A游<br/>
                    戏，为中国游戏的崛起做出努力。</p>
                <p class="title" style="margin-top: 20px">我们的价值观</p>
                <p style="margin-bottom: 20px;">我们的价值观是做好玩的游戏，至始至终以游戏性为目的去研发游戏<br/>
                    ，做顶尖的和精品的游戏。</p>
                <a href="/url"><i class="lozenge"></i><span>MORE</span></a>
            </div>
        </div>
        <ul class="news container" style="padding-top: 0px">
            <li>
                <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                <p class="des">
                    <span class="news-title">最刺激的星际吃鸡 </span>
                    <span class="create-at">2017.08.31</span>
                </p>
            </li>
            <li>
                <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                <p class="des">
                    <span class="news-title">最刺激的星际吃鸡 </span>
                    <span class="create-at">2017.08.31</span>
                </p>
            </li>
            <li>
                <div class="thumb"><img src="/images/new1-thumb.png" alt=""></div>
                <p class="des">
                    <span class="news-title">最刺激的星际吃鸡 </span>
                    <span class="create-at">2017.08.31</span>
                </p>
            </li>
        </ul>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/m/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
            console.log(this.$msg)
        },
        components:{
            NavBar, FooterBar
        },
        methods: {
            navigation(){
                this.isActive === true ? this.isActive = false : this.isActive = true
            },
            left: function (){
                alert('left')
            },
            right: function () {
                alert('right')

            }
        },
    }

</script>
