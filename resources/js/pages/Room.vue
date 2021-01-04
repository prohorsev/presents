<template>
    <div class="congratulation">
        <div class="container">
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <h1>Создайте группу для поздравления</h1>
                        <form action="" method="post" class="congratulation__form">
                            <div class="congratulation__user">

                                <label for="title">Название группы</label>
                                <input
                                    id="title"
                                    type="text"
                                    placeholder="Название группы"
                                    v-model.trim="presentTitle"
                                >

                                <label for="person">Кого поздравляем?</label>
                                <input
                                    type="text"
                                    placeholder="Имя"
                                    name="person"
                                    id="person"
                                    v-model.trim="presentPerson"
                                >

                                <label for="date">Дата поздравления</label>
                                <input
                                    type="date"
                                    placeholder="Когда поздравить?"
                                    name="date"
                                    id="date"
                                    v-model.trim="presentDate"
                                >


                                <label for="amount">Бюджет подарка</label>
                                <input
                                    type="number"
                                    placeholder="10000"
                                    name="amount"
                                    id="amount"
                                    v-model.trim="presentAmount"
                                >

                            </div>
                            <button
                                class="btn"
                                type="submit"
                                @click="$router.push({ name: 'films' })"
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
        presentTitle: '',
        presentPerson: '',
        presentDate: '',
        presentAmount: '',
    })
}
</script>
