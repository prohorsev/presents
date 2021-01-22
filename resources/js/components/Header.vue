<template>
    <header class="header container">
        <div class="d-flex jcsb aic">
            <div class="logo">
                <router-link :to="{name: 'home'}" class="d-flex aic tgreyd fs16">
                    <svg class="ic50 mr10" viewBox="0 0 50 50">
                        <use xlink:href="storage/icons/main.svg#logo"></use>
                    </svg>
                    MyGIFT
                    </router-link>
            </div>

            <nav class="menu">
                <ul class="d-flex aic">
                    <li class="menu__li">
                        <router-link :to="{name: 'roomList'}" >
                            Мои группы
                        </router-link>
                    </li>
                </ul>
            </nav>
            <router-link :to="{name: 'home'}" class="menu__login d-flex aic">  <!-- {{ route('login') }}-->
                <span class="mr10 tgreyd fs16">Войти</span>
            </router-link>

        </div>
    </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>
