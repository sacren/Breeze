<template>
    <div class="min-h-screen grid place-content-center">
        <app-button :processing="true">Click me</app-button>
    </div>
</template>

<script>
    import AppButton from '@/Components/AppButton.vue';

    export default {
        components: {
            'app-button': AppButton,
        },
    };
</script>
