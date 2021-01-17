<template>
    <div>
        <p>Бюджет подарка: <br>{{ vue_budget }}/{{ room_sum }}руб.</p>
        <label for="user_sum"></label>
        <p>Ваша вклад:</p><input type="number" placeholder="Ваш сумма" name="user_sum" id="user_sum" v-model="now_user_sum">
        <button @click="addSum">Ок</button>
    </div>

</template>

<script>
  export default {
    name: "BudgetComponent",
    props: ['room_sum', 'budget', 'user_sum', 'room_id', 'user_id'],
    data: function () {
      return {
        now_user_sum: 0,
        last_user_sum: 0,
        vue_budget: 0,
      }
    },

    methods: {

      addSum() {

          this.vue_budget = this.vue_budget - +this.last_user_sum + +this.now_user_sum;
          (
            async () => {
              const response = await fetch('/api/budget/', {
                method: 'post',
                headers: {
                  'Accept': 'application/json, text/plain, */*',
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                  user_sum: +this.now_user_sum,
                  room_id: this.room_id,
                  budget: this.vue_budget,
                  user_id: this.user_id
                })
              });
              const answer = await response.json();
              if (answer.answer === 'ok') {
                this.last_user_sum = this.now_user_sum;
                console.log(this.$root);
                this.$root.$refs.usersBudgetComponent.setUserSum(this.user_id, +this.now_user_sum);
                alert('Ваша сумма успешно сохранена');
              } else {
                console.log(answer.answer);
                this.vue_budget = this.vue_budget - +this.now_user_sum + this.last_user_sum;
                this.now_user_sum = +this.last_user_sum;
                alert('Что-то пошло не так. Перезагрузите страницу и попробуйте еще раз сохранить свою сумму');
              }

            })();

      }
    },

    created() {
      this.vue_budget = this.budget;
      this.now_user_sum = this.user_sum;
      this.last_user_sum = this.user_sum;
    }
  }
</script>

<style scoped>

</style>
