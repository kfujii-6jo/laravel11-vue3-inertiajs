<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const newTitle = ref("");
const newContent = ref("");
</script>
<template>
    <Head title="Welcome" />
    <h1>Inertia のテスト</h1>
    <br />
    <a href="/">aタグ経由です</a> <br />
    <Link href="/">Link経由です</Link> <br />
    <Link :href="route('inertia.index')">controllerへ</Link> <br />
    <Link :href="route('inertia.show', { id: 2 })">ルートパラメータ</Link>
    <div class="mb-8"></div>
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}</input> <br />
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}</input> <br />
    <Link as="button" method="POST" :href="route('inertia.store')"
    :data ="{
        title: newTitle,
        content: newContent
    }">DB保存テスト</Link>
</template>
