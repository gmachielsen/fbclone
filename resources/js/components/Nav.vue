<template>
    <div class="bg-white h-12 px-4 flex items-center border-b border-gray-400 shadow-sm">
        <div class="w-1/3">
            <div class="flex">
                <router-link to="/">
                    <svg class="fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23 12.1c0-6.1-4.9-11-11-11S1 6 1 12.1c0 5.5 4 10.1 9.3 10.9v-7.7H7.5v-3.2h2.8V9.7c0-2.8 1.6-4.3 4.2-4.3 1.2 0 2.5.2 2.5.2v2.7h-1.4c-1.4 0-1.8.8-1.8 1.7v2.1h3.1l-.5 3.2h-2.6V23c5.2-.9 9.2-5.4 9.2-10.9z" fill="#1877f2"/></svg>
                </router-link>

                <div class="ml-2 relative">
                    <div class="absolute text-gray-700">
                        <svg viewBox="0 0 24 24" class="fill-current w-5 h-5 mt-2 ml-2">
                            <path fill-rule="evenodd" d="M20.2 18.1l-1.4 1.3-5.5-5.2 1.4-1.3 5.5 5.2zM7.5 12c-2.7 0-4.9-2.1-4.9-4.6s2.2-4.6 4.9-4.6 4.9 2.1 4.9 4.6S10.2 12 7.5 12zM7.5.8C3.7.8.7 3.7.7 7.3s3.1 6.5 6.8 6.5c3.8 0 6.8-2.9 6.8-6.5S11.3.8 7.5.8z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input type="text" name="search" class="rounded-full pl-8 w-56 bg-gray-200 h-8 focus:outline-none focus:shadow-outline text-sm" placeholder="Search Facebook">
                </div>
            </div>
        </div>
        <div class="w-1/3 flex justify-center items-center h-full">
            <router-link to="/" class="px-6 border-b-2 border-blue-500 h-full flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5"><path d="M22.6 11l-9.9-9c-.4-.4-1.1-.4-1.5 0l-9.9 9c-.3.3-.5.8-.3 1.2.2.5.6.8 1.1.8h1.6v9c0 .4.3.6.6.6h5.4c.4 0 .6-.3.6-.6v-5.5h3.2V22c0 .4.3.6.6.6h5.4c.4 0 .6-.3.6-.6v-9h1.6c.5 0 .9-.3 1.1-.7.3-.5.2-1-.2-1.3zm-2.5-8h-4.3l5 4.5V3.6c0-.3-.3-.6-.7-.6z"/></svg>
            </router-link>
            <router-link :to="'/users/' + authUser.data.user_id" class="px-6 border-b-2 border-white h-full flex items-center ">
                <img src="https://media-exp1.licdn.com/dms/image/C5603AQFf4PZxDtUwgA/profile-displayphoto-shrink_200_200/0?e=1594857600&v=beta&t=FxFKyW_SCTQZgaRsZOFT97AeC4YMyaZgN9Sj5-3QAyE" alt="profile image for user" class="w-8 h-8 object-cover rounded-full">
            </router-link>
            <router-link to="/" class="px-6 border-b-2 border-white h-full flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5"><path d="M.5 11.6c0 3.4 1.7 6.3 4.3 8.3V24l3.9-2.1c1 .3 2.2.4 3.3.4 6.4 0 11.5-4.8 11.5-10.7C23.5 5.8 18.3 1 12 1S.5 5.8.5 11.6zm10.3-2.9l3 3.1 5.6-3.1-6.3 6.7-2.9-3.1-5.7 3.1 6.3-6.7z"/></svg>
            </router-link>
            <router-link :to="'/friends'" class="px-6 border-b-2 border-white h-full flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5"><path d="M 25.5 14 C 25.5 7.649 20.351 2.5 14 2.5 C 7.649 2.5 2.5 7.649 2.5 14 C 2.5 20.351 7.649 25.5 14 25.5 C 20.351 25.5 25.5 20.351 25.5 14 Z M 27 14 C 27 21.18 21.18 27 14 27 C 6.82 27 1 21.18 1 14 C 1 6.82 6.82 1 14 1 C 21.18 1 27 6.82 27 14 Z M 7.479 14 L 7.631 14 C 7.933 14 8.102 14.338 7.934 14.591 C 7.334 15.491 6.983 16.568 6.983 17.724 L 6.983 18.221 C 6.983 18.342 6.99 18.461 7.004 18.578 C 7.03 18.802 6.862 19 6.637 19 L 6.123 19 C 5.228 19 4.5 18.25 4.5 17.327 C 4.5 15.492 5.727 14 7.479 14 Z M 20.521 14 C 22.274 14 23.5 15.492 23.5 17.327 C 23.5 18.25 22.772 19 21.878 19 L 21.364 19 C 21.139 19 20.97 18.802 20.997 18.578 C 21.01 18.461 21.017 18.342 21.017 18.221 L 21.017 17.724 C 21.017 16.568 20.667 15.491 20.067 14.591 C 19.899 14.338 20.067 14 20.369 14 L 20.521 14 Z M 8.25 13 C 7.147 13 6.25 11.991 6.25 10.75 C 6.25 9.384 7.035 8.5 8.25 8.5 C 9.465 8.5 10.25 9.384 10.25 10.75 C 10.25 11.991 9.353 13 8.25 13 Z M 19.75 13 C 18.647 13 17.75 11.991 17.75 10.75 C 17.75 9.384 18.535 8.5 19.75 8.5 C 20.965 8.5 21.75 9.384 21.75 10.75 C 21.75 11.991 20.853 13 19.75 13 Z M 15.172 13.5 C 17.558 13.5 19.5 15.395 19.5 17.724 L 19.5 18.221 C 19.5 19.202 18.683 20 17.677 20 L 10.323 20 C 9.317 20 8.5 19.202 8.5 18.221 L 8.5 17.724 C 8.5 15.395 10.441 13.5 12.828 13.5 L 15.172 13.5 Z M 16.75 9 C 16.75 10.655 15.517 12 14 12 C 12.484 12 11.25 10.655 11.25 9 C 11.25 7.15 12.304 6 14 6 C 15.697 6 16.75 7.15 16.75 9 Z"></path></svg>
            </router-link>
        </div>
        <div class="w-1/3 flex justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5"><path d="M22.9 10.1c-.1-.1-.2-.2-.3-.2L20 9.5c-.1-.5-.3-.9-.6-1.4.2-.2.4-.6.8-1 .3-.4.6-.8.7-1 .1 0 .1-.2.1-.3 0-.1 0-.2-.1-.3-.3-.5-1.1-1.3-2.4-2.4-.1-.1-.2-.1-.4-.1-.1 0-.3 0-.3.1l-2 1.5c-.4-.2-.8-.4-1.3-.5l-.4-2.6c0-.1-.1-.2-.2-.3-.1-.2-.2-.2-.3-.2h-3.2c-.3 0-.4.1-.5.4-.1.5-.3 1.4-.4 2.7-.5.1-.9.3-1.3.5l-2-1.5c-.1-.1-.3-.2-.4-.2-.2 0-.7.3-1.4 1-.6.7-1.1 1.3-1.4 1.6-.1.1-.1.2-.1.3 0 .1 0 .2.1.3.6.8 1.2 1.4 1.5 2-.2.5-.3.9-.5 1.4l-2.6.4c-.1 0-.2.1-.3.2-.1.1-.1.2-.1.3v3.2c0 .1 0 .2.1.3.1.1.2.2.3.2l2.6.4c.1.5.3.9.6 1.4-.2.2-.4.6-.8 1-.3.4-.6.8-.7 1-.1.1-.1.2-.1.3 0 .1 0 .2.1.3.4.5 1.2 1.3 2.4 2.4.1.1.2.2.4.2.1 0 .3 0 .4-.1l2-1.5c.3.1.7.3 1.2.5l.4 2.6c0 .1.1.2.2.3.1.1.2.1.4.1h3.2c.3 0 .4-.1.5-.4.1-.5.3-1.4.4-2.7.4-.1.9-.3 1.3-.5l2 1.5c.1.1.3.1.4.1.2 0 .7-.3 1.3-1 .7-.7 1.2-1.2 1.4-1.5.1-.1.1-.2.1-.3 0-.1 0-.2-.1-.4-.7-.8-1.2-1.5-1.5-2 .2-.4.4-.8.6-1.3l2.7-.4c.1 0 .2-.1.3-.2.1-.1.1-.2.1-.3v-3.2c-.2-.1-.2-.2-.3-.3zm-8.3 4.5c-.7.7-1.6 1.1-2.6 1.1s-1.9-.4-2.6-1.1c-.7-.7-1.1-1.6-1.1-2.6s.4-1.9 1.1-2.6c.7-.7 1.6-1.1 2.6-1.1s1.9.4 2.6 1.1c.7.7 1.1 1.6 1.1 2.6s-.4 1.9-1.1 2.6z"/></svg>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    export default {
        name: "Nav",

        computed: {
            ...mapGetters({
                authUser: 'authUser'
            })
        }
    }
</script>

<style scoped>

</style>
