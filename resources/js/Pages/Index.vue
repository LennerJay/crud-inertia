<template>
    <div class="container mx-auto pt-5">
        {{ $page.props.flash.message }}
        <Link :href="route('Create')">Create a Post</Link>
        <div class="post__block" v-for="post in posts" :key="post.id">
        <h1 class="font-bold">{{ post.title }}</h1>
        <h2>{{ post.author }}</h2>
        <Link :href="route('Show',post.id)">Read | </Link>
        <Link :href="route('Edit',post.id)">Edit | </Link>
        <Link :href="route('Delete',post.id)" method="delete" as="button">Delete</Link>
        </div>
    </div>
</template>

<script setup>
defineProps({
    posts:Object
})
</script>

