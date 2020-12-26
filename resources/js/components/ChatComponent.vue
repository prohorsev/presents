<template>
    <div class="chat">
        <h3 class="chat__title">Чат комнаты</h3>
        <div class="chat__container">
            <div class="chat__messages">
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>
                <div class="chat__message">
                    <p>
                        <span>11:22  </span><span>Ivan:<br></span>
                        mesdr      mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr mesdr
                    </p>
                </div>

            </div>
            <div class="chat__form">
                <textarea class="chat__textarea" name="user-message" cols="26" rows="3" placeholder="Ваше сообщение" v-model="userMessage"></textarea>
                <div class="chat__btns">
                    <button class="chat__btn">Отправить</button>
                    <button class="chat__btn">Очистить</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: "ChatComponent",
    data: function () {
      return {
        userMessage: '',
      }
    }
  }
</script>

<style scoped>

</style>
