<template>
    <div>
        <h1>Home</h1>
    </div>

    {{ greeting }}
</template>

<script>
    export default {
        data() {
            return {
                greeting: 'Hello World!',
            };
        },
    };
</script>
