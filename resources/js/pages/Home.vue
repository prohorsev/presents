<template>
        <div class="home container">
            <div class="home__wrapper">
                <div class="home__text">
                    <h1 class="home__title">Дарите подарки!</h1>
                    <ul>
                        <li
                            style="list-style-image: url('storage/images/icon-checkmark.svg')"
                            v-for="(item, idx) in title"
                            :key="idx"
                        >{{ item }}</li>
                    </ul>
                    <router-link :to="{name: 'roomCreate'}" class="home__btn">Создать группу</router-link>
                </div>
                <div class="home__img">
                    <img src="storage/images/bg-home.svg" alt="">
                </div>
            </div>
        </div>
</template>

<script>
export default {
    data: () => ({
        title: [
            'MyGift - это онлайн-генератор для организаций поздравлений',
            'Встречайте праздник бесконтактно',
            'Найдите идеи для личных подарков',
            // 'Задавайте вопросы о списке желаний анонимно',
        ]
})
}
</script>

<style lang="scss">

</style>
