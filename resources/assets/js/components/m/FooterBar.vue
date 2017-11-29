<template>
    <footer class="footer container">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding tr">
            <div class="media-link">
                <a href="https://www.facebook.com/MultiverseVR"><i class="fa fa-facebook "></i></a>
                <a href="https://twitter.com/VRmultiverse"><i class="fa fa-twitter "></i></a>
                <a href="https://www.linkedin.com/company-beta/10691400"><i class="fa fa-linkedin "></i></a>
                <a href="https://www.instagram.com/vrmultiverse/"><i class="fa fa-instagram "></i></a>
            </div>
            <div class="partner">
                <a href="javascript:;">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-btn_game_vive"></use>
                    </svg>
                </a>
                <a href="javascript:;">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-oculus"></use>
                    </svg>
                </a>
                <a href="javascript:;">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-steam"></use>
                    </svg>
                </a>
                <a href="javascript:;">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-windows"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding copyright">
            <p><a href="https://www.multiverseinc.com/legal/tos">Terms of Service</a> |
                <a href="https://www.multiverseinc.com/legal/privacy">Privacy Policy</a><br/>
                <a href="https://www.multiverseinc.com">Copyright © Multiverse Entertainment LLC</a><br>
                <a href="http://www.miitbeian.gov.cn" v-if="this.$i18n.locale==='zh-CN'">ICP:粤ICP备17134275号-1</a>
            </p>
        </div>

    </footer>
</template>

<script>
    export default {
        mounted() {
            console.log('FooterBar Component mounted.')
        }
    }
</script>
