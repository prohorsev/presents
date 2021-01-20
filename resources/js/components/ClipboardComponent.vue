<template>
    <div class="input-group d-flex aic jcsb">
        <label>
            <input type="text" :value="link">
        </label>
        <button type="button" @click="doCopy">
            <svg class="ic20">
                <use xlink:href="/storage/icons/sprite.svg#copy"></use>copy
            </svg>
        </button >
    </div>
</template>

<script>
export default {
    name: "ClipboardComponent",
    props: ['link'],
    data: function () {
        return {
            message: '',
        }
    },
    methods: {
        doCopy: function () {
            this.$copyText(this.message).then(function (e) {
                alert('Copied');
                console.log(e)
            }, function (e) {
                alert('Can not copy');
                console.log(e)
            })
        }
    },

    created() {
        this.message = this.link;
    }

}
</script>

<style scoped>
    input {
        width: 270px;
    }
</style>
