<template>
    <div>
        <button class="btn btn-primary btn-sm ml-3" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        data: function () {
            return {
                status: this.follows,
            }
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {

                        this.status = ! this.status;

                    })
                    .catch(errors => {

                        if (errors.response.status){
                            window.location = '/login';
                        }
                    });
            }
        },

        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow': 'Follow';
            }
        }
    }
</script>
