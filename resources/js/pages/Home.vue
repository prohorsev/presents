<template>
        <div class="home container">
            <div class="home__wrapper">
                <div class="home__text">
                    <h1 class="home__title">Дарите подарки!</h1>
                    <ul>
                        <li style="list-style-image: url('storage/images/icon-checkmark.svg')">MyGift - это онлайн-генератор для организаций поздравлений</li>
                        <li style="list-style-image: url('storage/images/icon-checkmark.svg')">Встречайте праздник бесконтактно</li>
                        <li style="list-style-image: url('storage/images/icon-checkmark.svg')">Найдите идеи для личных подарков</li>
                        <li style="list-style-image: url('storage/images/icon-checkmark.svg')">Задавайте вопросы о списке желаний анонимно</li>
                    </ul>
                    <router-link :to="{name: 'roomCreate'}" class="home__btn">Создать группу</router-link>
                </div>
                <div class="home__img">
                    <img src="storage/images/bg-home.svg" alt="">
                </div>
            </div>
        </div>
</template>

<style lang="scss">

</style>
