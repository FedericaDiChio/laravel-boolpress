<template>
  <div class="card my-4">
    <div class="card-header">
        <h5>{{ post.title }}</h5>
    </div>
    <div class="card-body">
        <p>{{ post.content }}</p>
    </div>
    <div class="card-footer">
        <small>
           {{ getFormattedDate(post.created_at) }}
        </small>
    </div>
</div>
</template>

<script>
export default {
    name: "PostCard",
    props: ["post"],
    // metodo per formattare la data e mettere lo 0 prima dei numeri minori di 10
    methods: {
        getFormattedDate(date){
            const postDate = new Date(date);
            let day = postDate.getDate();
            let month = postDate.getMonth();
            const year = postDate.getFullYear();

            if (day < 10) day = '0' + day;
            if (month < 10) month = '0' + month;

            return `${day}/${month}/${year}`;
        }

    }
}
</script>

<style>

</style>