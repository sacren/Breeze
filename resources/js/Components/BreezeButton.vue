<template>
    <button
    :class="{
             'px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-gray-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150': true,
             'bg-green-800': type === 'primary',
             'bg-red-800': type === 'secondary',
             'bg-blue-800': type === 'muted',
             }" :disabled="processing">
        <slot />
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'primary',
            },
        },

        data() {
            return {
                processing: true,
            };
        },
    };
</script>
