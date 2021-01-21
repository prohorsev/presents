<template>
    <div>
        <p>{{ vue_budget }}/{{ room_sum }}руб.</p>

        <div class="d-flex aic fs18">
            <label for="user_sum" class="fs18">Ваш вклад:</label>
            <input type="number" placeholder="0" name="user_sum" id="user_sum" class="fs18 ml10 mr10" v-model="now_user_sum">
            <button @click="addSum" class="btnsmall fs16">ОК</button>
        </div>
    </div>
</template>

<script>
  export default {
    name: "BudgetComponent",
    props: ['room_sum', 'budget', 'user_sum', 'room_id', 'user_id', 'room_is_active'],
    data: function () {
      return {
        now_user_sum: 0,
        last_user_sum: 0,
        vue_budget: 0,
        token: null,
      }
    },

    methods: {

      addSum() {

        this.vue_budget = this.vue_budget - +this.last_user_sum + +this.now_user_sum;
        (
            async () => {
              const response = await fetch('/budget/', {
                method: 'post',
                headers: {
                  'Accept': 'application/json, text/plain, */*',
                  'Content-Type': 'application/json',
                  // "authorization": "Bearer " + this.token,
                },
                body: JSON.stringify({
                  user_sum: +this.now_user_sum,
                  room_id: this.room_id,
                  budget: this.vue_budget,
                  _token: this.token,
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
      let inputs = budget.getElementsByTagName('input');
      for (let input of inputs) {
        if (input.name === '_token') {
          this.token = input.value;
          break;
        }
      }
    }
  }
</script>

<style scoped>
label {
    white-space: nowrap;
}

input {
    border-bottom: 1px solid #757575;
}
</style>
