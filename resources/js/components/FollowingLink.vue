<template>
    <div>
        <a href="#" class="text-dark pl-3" v-text="linkText"></a>
    </div>
</template>

<script>
    export default {
        props: ['follows'],

        data: function () {

            console.log(this.follows);
            return {
                status: this.follows,
            }
        },

        computed: {
            linkText() {

                return (this.status) ? 'Following': 'Follow';
            }
        }
    }
</script>
