<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { reactive } from "vue";
// import { Inertia } from "@inertiajs/inertia";
const form = reactive({
    title: null,
    content: null,
});

const submitFunction = () => {
    router.post("/api/inertia-test", form);
};
</script>

<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title" />{{ form.title
        }}<br />
        <input type="text" name="content" v-model="form.content" />{{
            form.content
        }}<br />
        <button>送信</button>
    </form>
</template>
