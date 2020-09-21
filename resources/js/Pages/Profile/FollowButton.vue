<template>
    <button class="bg-blue-500 hover:bg-blue-700  text-white font-bold py-1 px-2  rounded-full">
                        Follow
                        </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    }
</script>
