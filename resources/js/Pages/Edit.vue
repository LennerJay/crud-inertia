<template>
    <div>
        <Link :href="route('Home')">Back</Link>
        <form @submit.prevent="handleSubmit" >
            <div >
                <label for="title">Title</label><br>
                <input type="text" v-model="form.title" name="title" id="title" class="border-2">
            </div>
            <div>
                <label for="author">Author</label><br>
                <input type="text" v-model="form.author" name="author" id="author" class="border-2">
            </div>
            <div>
                <label for="content">Content</label><br>
                <textarea type="text" v-model="form.content" name="content" id="content" class="border-2"></textarea>
            </div>
            <div>
                <button type="submit" >Update Post</button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    post: Object
})

const form = useForm({
    title:props.post.title,
    author:props.post.author,
    content:props.post.content,
})

const handleSubmit = ()=>{
    form.put(`/update/${props.post.id}`)
}
</script>

