<template>
    <div class="flex flex-col items-center" v-if="status.user === 'success' && user">
        <div class="relative mb-8">
            <div class="w-100 h-64 overflow-hidden z-10">
                <UploadableImage image-width="1500" image-height="300" location="cover" />
            </div>
            <div class="absolute flex items-center bottom-0 left-0 -mb-8 ml-12 z-20">
                <div class="w-32">
                    <img class="object-cover w-32 h-32 border-4 border-gray-200 rounded-full shadow-lg" src="data:image/jpeg;base64,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" alt="user profile image">
                </div>
                <p class="text-2xl text-gray-100 ml-4">{{ user.data.attributes.name }}</p>
            </div>
            <div class="absolute flex items-center bottom-0 right-0 mb-4 mr-12 z-20">
                <button v-if="friendButtonText && friendButtonText !== 'Accept'" class="py-1 px-3 bg-gray-400 rounded"
                        @click="$store.dispatch('sendFriendRequest', $route.params.userId)">
                    {{ friendButtonText }}
                </button>
                <button v-if="friendButtonText && friendButtonText === 'Accept'" class="mr-2 py-1 px-3 bg-gray-500 rounded"
                        @click="$store.dispatch('acceptFriendRequest', $route.params.userId)">
                    Accept
                </button>
                <button v-if="friendButtonText && friendButtonText === 'Accept'" class="mr-2 py-1 px-3 bg-gray-500 rounded"
                        @click="$store.dispatch('ignoreFriendRequest', $route.params.userId)">
                    Ignore
                </button>
            </div>
        </div>
        <div v-if="status.posts === 'loading'">Loading posts...</div>
        <div v-else-if="posts.length < 1">No posts found. Get started!</div>
        <Post v-else v-for="(post, postKey) in posts.data" :key="postKey" :post="post" />
    </div>
</template>
<script>
import Post from '../../components/Post';
import UploadableImage from "../../components/UploadableImage";
import { mapGetters } from 'vuex';

export default {
    name: "Show",

    components: {
        Post,
        UploadableImage,
    },

    mounted() {
            this.$store.dispatch('fetchUser', this.$route.params.userId);
            this.$store.dispatch('fetchUserPosts', this.$route.params.userId);
    },

    computed: {
        ...mapGetters({
            user: 'user',
            posts: 'posts',
            status: 'status',
            friendButtonText: 'friendButtonText',
        }),
    }
}
</script>
<style scoped>

</style>