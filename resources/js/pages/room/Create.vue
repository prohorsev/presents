<template>
    <div class="congratulation">
        <div class="container">
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <h1>Создайте группу для поздравления</h1>

                        <form @submit.prevent="submitHandler">
                            <div class="congratulation__user">

                                <label for="title">Название группы</label>
                                <input
                                    id="title"
                                    type="text"
                                    placeholder="Название группы"
                                    v-model.trim="roomTitle"
                                >

                                <label for="person">Кого поздравляем?</label>
                                <input
                                    type="text"
                                    placeholder="Имя"
                                    name="person"
                                    id="person"
                                    v-model.trim="roomPerson"
                                >

                                <label for="date">Дата поздравления</label>
                                <input
                                    type="date"
                                    placeholder="Когда поздравить?"
                                    name="date"
                                    id="date"
                                    v-model.trim="roomDate"
                                >


                                <label for="amount">Бюджет подарка</label>
                                <input
                                    type="number"
                                    placeholder="10000"
                                    name="amount"
                                    id="amount"
                                    v-model.number="roomAmount"
                                >

                            </div>
                            <button
                                class="btn w300 mt30"
                                type="submit"
                            >Создать поздравление</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Room",
    data: () => ({
        roomTitle: '',
        roomPerson: '',
        roomDate: '',
        roomAmount: '',
    }),
    mounted() {

    },
    methods: {
        submitHandler() {
            const groups = {
                roomTitle: this.roomTitle,
                roomPerson: this.roomPerson,
                roomDate: this.roomDate,
                roomAmount: this.roomAmount,
                id: Date.now(),
            }
        }
    },
}
</script>
