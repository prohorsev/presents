<template>
    <div class="personal-account container pt30">
        <h1 class="personal-account__title fs36 mb30">Личный кабинет</h1>

        <div class="personal-account__wish-list wish-list mb30">
            <h4 class="wish-list__title mb5 lhr">Список желаний</h4>
            <div class="wish-list__box">
                <p class="wish-list__wish lhr"
                   v-for="(item, i) in wishList"
                   :key="i"
                >
                    <a href="#" class="wish-list__link tdef">{{ item.name }}</a></p>
                <p class="wish-list__wish lhr"><a href="#" class="wish-list__link tdef">Добавить еще желание</a></p>
            </div>
        </div>

        <div class="personal-account__about about-me mb30">
            <h4 class="about-me__title mb5 lhr">Мои увлечения</h4>
            <div class="wish-list__box">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa dolor neque? Dignissimos esse et, fugiat nemo officia quo. Amet dolores enim ex iusto nam omnis recusandae voluptas voluptatem? Accusantium ad alias, assumenda at aut delectus doloremque eveniet harum illo nihil nobis nulla odit quia repellat tempora velit, veritatis, voluptatibus? </p>
            </div>
        </div>

        <div class="personal-account__info info-account mb30">
            <h4 class="info-account__title mb5 lhr">Вы состоите в группе, <a href="#" class="tdef">Новый год</a></h4>
            <a href="#" class="tdef lhr">Добавить группу</a>
        </div>
    </div>
</template>

<script>
export default {
    data: ()=>({
        wishList: [
            {
                name: 'Желание 1',
                link: '#'
            },
            {
                name: 'Желание 2',
                link: '#'
            },
        ],
    })
}
</script>

<style lang="scss">

</style>
