<template>
    <div class="alert alert-warning">
        <div v-if="messages.length < 1">
            Beginning translation...
        </div>
        <div v-else>
            <ul class="list-group" v-for="message in messages">
                <li class="list-group-item">
                    {{ message.message }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: ['translation_id'],
    data() {
        return {
            messages: []
        }
    },

    created() {
        Echo.channel(`laravel_database_translation_.${this.translation_id}`)
            .listen('TranslationEvent', (e) => {
                console.log(e);
                this.messages.push(e)
            });
    }
}
</script>

<style scoped></style>
