<template>
    <header class="header container">
        <div class="d-flex jcsb aic">
            <div class="logo">
                <router-link to="/" class="d-flex aic tgreyd fs16">
                    <svg class="ic50 mr10" viewBox="0 0 50 50">
                        <use xlink:href="http://presents/icons/main.svg#logo"></use>
                    </svg>
                    MyGIFT
                </router-link>
            </div>

            <nav class="menu">
                <ul class="d-flex aic">
                    <li class="menu__li">
                        <router-link to="/catalog">Каталог подарков</router-link>
                    </li>
                    <li class="menu__li">
                        <router-link to="/profile">Личный кабинет</router-link>
                    </li>
                    <li class="menu__li">
                        <router-link to="/room">Мои группы</router-link>
                    </li>
                </ul>
            </nav>

            <button class="menu__login d-flex aic">
                <span class="mr10 tgreyd fs16">Войти</span>
                <img src="http://presents/images/user.svg" alt="">
            </button>
        </div>
    </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>
