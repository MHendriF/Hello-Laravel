<script setup>
defineProps({
    image: String,
    title: String,
    description: String,
});
</script>

<template>
    <div class="mb-3 hover:bg-gray-100 cursor-pointer">
        <div class="flex items-start gap-1 py-2 px-2">
            <img :src="image" alt="logo" class="w-[32px] rounded-full" />
            <div>
                <h3 class="font-black text-lg">{{ title }}</h3>
                <div class="text-xs text-gray-500">{{ description }}</div>
            </div>
        </div>
    </div>
</template>
<style scoped></style>
