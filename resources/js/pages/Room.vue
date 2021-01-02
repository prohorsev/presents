<template>
    <div class="congratulation">
        <div class="container">
            <h1>Поздравить близкого вам человека проще чем вы думаете</h1>
            <div class="congratulation__container">
                <div class="congratulation__left">
                    <div class="congratulation__forms">
                        <h3>Заполните форму для поздравления</h3>
                        <form action="" method="post" class="congratulation__form">
                            <div class="congratulation__user">

                                <label for="name">Название команды</label>
                                <input type="text" placeholder="Название группы" name="name" id="name">

                                <label for="birthday_person">Кого поздравляем?</label>
                                <input type="text" placeholder="Кого будем поздравлять?" name="birthday_person" id="birthday_person">

                                <label for="birthday_date">Дата поздравления</label>
                                <input type="date" placeholder="Когда поздравить?" name="birthday_date" id="birthday_date">

                                <label for="birthday_sum">Бюджет подарка</label>
                                <input type="number" placeholder="10000" name="birthday_sum" id="birthday_sum">

                            </div>
                            <button class="btn congratulation__btn" type="submit">Создать поздравление</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Room"
}
</script>
