<template>
    <div class="chat">
        <h3 class="chat__title">Чат комнаты</h3>
        <div class="chat__container">
            <div class="chat__messages" id="chat-messages">
                <div class="chat__message" v-for="message in messages">
                    <p><span>{{ message.created_at }}  </span><span>{{ message.name }}</span><br>
                        {{ message.message }}</p>
                </div>
                <div style="height: 1px" ></div>
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
        token: null,
      }
    },

    methods: {
      clearMessage() {
        this.userMessage = '';
      },
      sendMessage() {
        (
          async () => {
            const response = await fetch('/message/', {
              method: 'post',
              headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({
                message: this.userMessage,
                room_id: this.room_id,
                _token: this.token,
                // user_id: this.user_id,
                // user_name: this.user_name,
              })
            });
            const answer = await response.json();
            if (answer.answer != 'ok') {
              console.log(answer.answer);
              alert('Не удалось отправить сообщение');
            }

          })();
        this.userMessage = '';
      },
      addMessage(message) {
        let date= new Date();

        let month = date.getMonth() + 1;

        let day = date.getDate();
        if (day < 10) {
          day = '0' + day;
        }

        let hours = date.getHours();
        if (hours < 10) {
          hours = '0' + hours;
        }

        let minutes = date.getMinutes();
        if (minutes < 10) {
          minutes = '0' + minutes;
        }

        let timestamp = day + ' ' + month + ' ' + date.getFullYear() + ' ' + hours + ':' + minutes;
        let mes = {
          message: message.message,
          name: message.user_name,
          created_at : timestamp
        };
        this.messages.push(mes);
      },

      scrollChat() {
        let el = document.getElementById('chat-messages');
        el.scrollTop = el.scrollHeight;
      }
    },

    created() {
      Echo.private('presents-' + this.room_id)
        .listen('MessageSend', (el) => {
          this.addMessage(el);
        });

      (
        async () => {
          const response = await fetch('/message/' + this.room_id, {
            method: 'get',
          });
          const answer = await response.json();
          if (answer.messages) {
            let messages = answer.messages;
            messages.forEach(mes => {
              let timestamp = mes.created_at;
              timestamp = new Date(timestamp);
              let month = (timestamp.getMonth() + 1).toString();
              timestamp = timestamp.toString();
              timestamp = timestamp.substring(8,21);
              let result = timestamp.substr(0, 2) + ' ' + month + timestamp.substring(2);
              mes.created_at = result;
              this.messages.push(mes);
            });
          } else {
            console.log(answer.answer);
            alert('Не удалось загрузить сообщения чата. Попробуйте еще раз');
          }
        })();

      let inputs = chat.getElementsByTagName('input');
      for (let input of inputs) {
        if (input.name === '_token') {
          this.token = input.value;
          break;
        }
      }
    },

    updated() {
      this.scrollChat();
    }

  }
</script>

<style scoped>

</style>
