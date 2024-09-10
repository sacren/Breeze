<template>
    <div class="min-h-screen grid place-content-center">
        <app-button>Click me</app-button>
    </div>
</template>

<script>
    import PrimaryButton from '@/Components/PrimaryButton.vue';

    export default {
        components: {
            'app-button': PrimaryButton,
        },
    };
</script>
