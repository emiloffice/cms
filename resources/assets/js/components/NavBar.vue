<template>
    <nav class="nav-bar">
        <div class="container">
            <a href="/" class="logo"><img src="/images/logo.png" alt="Multiverse logo"></a>

            <ul class="menu">
                <li><a href="#">关于我们</a></li>
                <li><a href="#">游戏专区</a></li>
                <li><a href="#">我们的事业</a></li>
                <li><a href="#">新闻</a></li>
                <li><a href="#">招聘</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
        }
    }
</script>
