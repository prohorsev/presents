<template>

    <div class="congratulation">
        <div class="container">

            <div v-if="list" class="mt30">
                <h2 class="fs36">Вы еще не состоите ни в одной группе</h2>

            </div>
            <div v-else>
                <h1>Мои Группы</h1>
                <div class="congratulation__container">
                    <div class="congratulation__left">
                        <div
                            class="team-item"
                            v-for="(group, idx) in groups"
                            :key="idx"
                        >
                            <router-link
                                :to="{ name: 'roomPage' }"
                                class="fs20 pt10 pb10 d-block"
                            >{{ group.title }}</router-link>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
            <p class="mb20 fs26">Создайте группу:</p>
            <router-link :to="{name: 'roomCreate'}" class="btn w250">Создать группу</router-link>
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
