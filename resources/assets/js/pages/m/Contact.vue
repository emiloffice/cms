<template>
    <div class="container-fluid">
        <nav-bar></nav-bar>
        <div class="banner ">
            <div style="text-align: center">
                <img src="/images/m_contact_banner.png" alt="" style="width: 100%;">
            </div>
        </div>
        <div class="contact_info container">
            <p><img src="/images/m_contact_title.png" alt="" style="width:100%"></p>
            <ul class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <li><p><i class=""></i><a href="mailto:contact@multiverseinc.com"><i class="icon iconfont">&#xe632;</i>{{$t("contact_view.Regular")}}：contact@multiverseinc.com</a></p></li>
                <li><p><i class=""></i><a  :href="$t('contact_view.Public_email')"><i class="icon iconfont">&#xe61f;</i>{{$t("contact_view.Public")}}：{{$t("contact_view.Public_email")}}</a></p></li>
                <li><p><i class=""></i><a  href="mailto:lilian.chen@multiverseinc.com"><i class="icon iconfont">&#xe6dc;</i>{{$t("contact_view.Human")}}：lilian.chen@multiverseinc.com</a></p></li>
                <li><p><i class=""></i><a  href="mailto:chenjun.li@multiverseinc.com"><i class="icon iconfont">&#xe640;</i>{{$t("contact_view.Business")}}：chenjun.li@multiverseinc.com</a></p></li>
            </ul>
            <ul class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <li><p><i class="icon iconfont">&#xe66e;</i><a href="https://facebook.com/MultiverseVR">facebook.com/MultiverseVR</a></p></li>
                <li><p><i class="icon iconfont">&#xec9c;</i><a href="https://twitter.com/VRmultiverse">twitter.com/VRmultiverse</a></p></li>
                <li><p><i class="icon iconfont">&#xe605;</i><a href="https://instagram.com//MultiverseVR">instagram.com//MultiverseVR</a></p></li>
                <li><p><i class="icon iconfont">&#xe64b;</i><a href="https://linkedin.com/company/multiverse-entertainment">linkedin.com/company/multiverse-entertainment</a></p></li>
            </ul>
        </div>
        <form class="contact_form container" method="post" action="/contact">
            <p><img src="/images/question.png" alt="" style="width:100%"></p>
            <div class="input-group fl">
                <label for="name"><i class="icon iconfont">&#xe609;</i>{{$t("input.name.label")}}</label>
                <input type="text" name="name" id="name" class="input md">
            </div>
            <div class="input-group fr">
                <label for="company"><i class="icon iconfont">&#xe61e;</i>{{$t("input.company.label")}}</label>
                <input type="text" name="company" id="company" class="input md">
            </div>
            <div class="input-group fl">
                <label for="email"><i class="icon iconfont">&#xe687;</i>{{$t("input.email.label")}}</label>
                <input type="text" name="email" id="email" class="input md">
            </div>
            <div class="input-group fr">
                <label for="mobile"><i class="icon iconfont">&#xe600</i>{{$t("input.mobile.label")}}</label>
                <input type="text" name="mobile" id="mobile" class="input md">
            </div>
            <div class="input-group fl">
                <label for="content" style="vertical-align: top;"><i class="icon iconfont">&#xe686;</i>{{$t("input.content.label")}}</label>
                <textarea type="text" name="content" id="content" ></textarea>
            </div>
            <div class="clearfix"></div>
            <div class="input-group tc">
                <input type="submit" class="submit" :value="$t('input.send')">
            </div>
        </form>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import NavBar from '../../components/m/NavBar'
    import FooterBar from '../../components/m/FooterBar'
    export default {
        mounted() {
            console.log('Index Pages mounted.')
        },
        components:{
            NavBar, FooterBar
        },
        data(){
            return{
                navIndex: 6
            }
        }
    }

</script>
}
