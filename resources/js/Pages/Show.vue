<template>
    <Link :href="route('Home')">Back</Link>
    <div class="container mx-auto pt-5">
        <div class="post__block">
        <h1 class="font-bold">{{ post.title }}</h1>
        <h2>{{ post.author }}</h2>
        <p class="font-light">{{ post.content }}</p>

        </div>
    </div>
</template>

<script setup>
defineProps({
    post:Object
})

</script>

