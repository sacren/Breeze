<template>
    <div class="min-h-screen grid place-content-center">
        <app-button :processing="true">Click me</app-button>
    </div>
</template>

<script>
    import BreezeButton from '@/Components/BreezeButton.vue';

    export default {
        components: {
            'app-button': BreezeButton,
        },
    };
</script>
