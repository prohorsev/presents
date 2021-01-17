<template>
    <ul>
        <li v-for="user in users">
            <p>{{ user.name }}: <span>{{ user.sum }}</span></p>
        </li>
    </ul>
</template>

<script>
  export default {
    name: "UsersBudgetComponent",
    props: ['friends'],

    data: function () {
      return {
        users: [],
      }
    },

    methods: {
        setUserSum(user_id, user_sum) {
          this.users.forEach(user => {
            if (user.user_id === user_id) {
              user.sum = user_sum;
            }
          });
          console.log(user_id);
          console.log(user_sum);
        }
    },

    created() {
      this.friends.forEach(friend => {
        this.users.push(friend);
      })
    }
  }
</script>

<style scoped>

</style>
