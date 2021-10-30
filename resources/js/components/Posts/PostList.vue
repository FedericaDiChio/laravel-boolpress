<template>
    <section id="post-list">
        <h3>I miei post</h3>
        <PostCard v-for="post in posts" :key="post.id" :post="post" />
    </section>
</template>

<script>
import PostCard from "./PostCard.vue";
export default {
    name: "PostList",
    components: {
        PostCard,
    },
    data() {
        return {  
            posts: [],
            baseUri: "http://localhost:8000/",
            };
    },
    methods: {
        getPosts() {
            axios.get(`${this.baseUri}api/posts`)
            .then((res) => {
                console.log(res.data);
                this.posts = res.data;
                //TODO: DESTRUCTURING DA METTERE CON IL PAGINATE
                // const { data, current_page, last_page } = res.data;
            }).catch((err) => {
                console.error(err);
            })
        },
    }, 
    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>