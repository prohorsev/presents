<template>

    <div class="congratulation">
        <div class="container">
            <div class="congratulation__container mt30">
                <div class="congratulation__left">


                    <div v-if="list" class="mt30">
                        <h2 class="fs24">Вы еще не состоите ни в одной группе</h2>
                    </div>

                    <div v-else>
                        <h3 class="fs24">Активные группы</h3>
                        <div
                            class="team-item"
                            v-for="(group, idx) in groups"
                            :key="idx"
                        >
                            <div class="d-flex aifs jcsb">
                                <router-link
                                    :to="{ name: 'roomPage' }"
                                    class="fs20"
                                >{{ group.title }}
                                </router-link>

                                <a href=""
                                   class="mr10"
                                   style="color: orange"
                                >изменить
                                </a><!--  {{ route('room.edit', $room) }}-->

                                <a href=""
                                   class="mr10"
                                   style="color: orange"
                                >удалить
                                </a><!--  {{ route('room.delete', $room) }}-->

                            </div>
                            <hr class="mt10 mb10">
                        </div>
                    </div>

                    <router-link :to="{name: 'roomCreate'}" class="congratulation__btn mt30">Создать группу</router-link>
                </div>

                <div class="congratulation__right">

                    <div class="congratulation__slider">
                        <slider-component></slider-component>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data: () => ({
        groups: [
            {
                id: Date.now(),
                title: 'группа 1',
                person: 'Имя',
                date: '27-01-21',
                amount: 500,
            },
            {
                id: 2,
                title: 'группа 2',
                person: 'Имя 2',
                date: '26-01-21',
                amount: 1000,
            }
        ],
    })
}
</script>
