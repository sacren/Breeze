<template>
    <button
    :class="{
             'px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-gray-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150': true,
             'bg-green-800': type === 'primary',
             'bg-red-800': type === 'secondary',
             'bg-blue-800': type === 'muted',
             'is-loading text-transparent': processing,
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

            processing: {
                type: Boolean,
                default: false,
            },
        },
    };
</script>

<style scoped>
@keyframes spinner {
    to {transform: rotate(360deg);}
}

.is-loading:before {
    content: '';
    box-sizing: border-box;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    border-radius: 50%;
    border: 2px solid #ccc;
    border-top-color: #000;
    animation: spinner .6s linear infinite;
}
</style>
