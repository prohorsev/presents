<template>
    <div class="chat">
        <h3 class="chat__title">Чат комнаты</h3>
        <div class="chat__container">
            <div class="chat__messages">
                <div class="chat__message" v-for="message in messages">
                    <p><span>{{ message.created_at }}  </span><span>{{ message.name }}</span><br>
                        {{ message.message }}</p>
                </div>
            </div>
            <div class="chat__form">
                <textarea class="chat__textarea" name="user-message" cols="26" rows="3" placeholder="Ваше сообщение" v-model="userMessage" @keyup.enter="sendMessage()"></textarea>
                <div class="chat__btns">
                    <button class="chat__btn" @click="sendMessage()">Отправить</button>
                    <button class="chat__btn" @click="clearMessage()">Очистить</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: "ChatComponent",
    props: ['room_id', 'user_id', 'user_name'],
    data: function () {
      return {
        userMessage: '',
        messages: [],
      }
    },

    methods: {
      clearMessage() {
        this.userMessage = '';
      },
      sendMessage() {
        axios.post('/api/message', {message: this.userMessage, room_id: this.room_id, user_id: this.user_id});
        this.userMessage = '';

      },
      addMessage(message) {
        let date= new Date();
        let timestamp = date.getFullYear() + '-' + date.getMonth() + 1 + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes();
        let mes = {
          message: message,
          name: this.user_name,
          created_at : timestamp
        };
        this.messages.push(mes);
      },
    },

    created() {
      console.log('presents-' + this.room_id);
      Echo.private('presents-' + this.room_id)
        .listen('MessageSend', (e) => {
          this.addMessage(e.message);
        });


      (
        async () => {
          const response = await fetch('/api/message/' + this.room_id, {
            method: 'get',
          });
          const answer = await response.json();
          let messages = answer.messages;
          messages.forEach(mes => {
            let time = mes.created_at;
            mes.created_at = time.substring(0,16);
            this.messages.push(mes);
          });

        })();
    },
  }
</script>

<style scoped>

</style>
