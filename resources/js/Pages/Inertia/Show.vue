<script setup>
import { Head, Link } from "@inertiajs/vue3";
defineProps({
    id: String,
});
</script>
<template>ルートパラメータ：{{ id }}</template>
