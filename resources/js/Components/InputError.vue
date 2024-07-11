<template>
    <div v-show="message">
        <p class="error-message">
            {{ message }}
        </p>
    </div>
</template>

<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>
