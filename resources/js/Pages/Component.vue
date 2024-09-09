<template>
    <div class="min-h-screen grid place-content-center">
        <app-button></app-button>
    </div>
</template>

<script>
export default {
    components: {
        'app-button': {
            mounted() {
                alert('Hello Vue!');
            },
        },
    },
};
</script>
