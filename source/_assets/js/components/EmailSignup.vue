<template>
    <div class="text-center p-4 border-2">
        <h3>Sign up to the mailing list</h3>

        <p>
            Keep up-to-date with the latest posts, memes and everything else by signing up to the mailing list.
        </p>
        <form ref="form" @submit="signup" :action="action" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

            <input type="email" v-model="email" name="EMAIL" placeholder="Your Email Address">

            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_45528f4b6626291ccfb196fa7_851b9a1264" tabindex="-1" value=""></div>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                error: '',
                success: '',
                isSending: false,
                action: "https://tpavlek.us13.list-manage.com/subscribe/post-json?u=45528f4b6626291ccfb196fa7&id=851b9a1264"
            }
        },
        methods: {
            signup(e) {
                e.preventDefault();

                let vue = this;
                this.$jsonp(this.action, { 'EMAIL': this.email, 'callbackQuery': 'c' })
                    .then((data) => {

                        vue.isSending = false;
                        if (data['result'] == 'error') {
                            vue.error = data['msg'];
                        } else {
                            vue.success = data['msg'];
                        }
                    })
                    .catch((err) => { console.log(err)});
            }
        }
    }
</script>
