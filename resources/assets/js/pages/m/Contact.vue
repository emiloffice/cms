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
                <li><p><i class=""></i><a href="mailto:contact@multiverseinc.com">常规交流：contact@multiverseinc.com</a></p></li>
                <li><p><i class=""></i><a  href="mailto:bo.liu@multiverseinc.com">公共关系：bo.liu@multiverseinc.com</a></p></li>
                <li><p><i class=""></i><a  href="mailto:lilian.chen@multiverseinc.com">英才招聘：lilian.chen@multiverseinc.com</a></p></li>
                <li><p><i class=""></i><a  href="mailto:chenjun.li@multiverseinc.com">商务合作：chenjun.li@multiverseinc.com</a></p></li>
            </ul>
            <ul class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <li><p><i class=""></i><a href="https://facebook.com/MultiverseVR">facebook.com/MultiverseVR</a></p></li>
                <li><p><i class=""></i><a href="https://twitter.com/VRmultiverse">twitter.com/VRmultiverse</a></p></li>
                <li><p><i class=""></i><a href="https://instagram.com//MultiverseVR">instagram.com//MultiverseVR</a></p></li>
                <li><p><i class=""></i><a href="https://linkedin.com/company/multiverse-entertainment">linkedin.com/company/multiverse-entertainment</a></p></li>
            </ul>
        </div>
        <form class="contact_form container" method="post" action="/contact">
            <p><img src="/images/question.png" alt="" style="width:100%"></p>
            <div class="input-group fl">
                <label for="name">姓名</label>
                <input type="text" name="name" id="name" class="input md">
            </div>
            <div class="input-group fr">
                <label for="company">公司</label>
                <input type="text" name="company" id="company" class="input md">
            </div>
            <div class="input-group fl">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="input md">
            </div>
            <div class="input-group fr">
                <label for="mobile">手机</label>
                <input type="text" name="mobile" id="mobile" class="input md">
            </div>
            <div class="input-group fl">
                <label for="content" style="vertical-align: top;">内容</label>
                <textarea type="text" name="content" id="content" ></textarea>
            </div>
            <div class="clearfix"></div>
            <div class="input-group tc">
                <input type="submit" class="submit" value="发送">
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
        }
    }

</script>
}
