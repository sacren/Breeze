<template>
    <h2 v-show="jobList.length" class="mb-2 font-bold">{{ listName }}</h2>
    <ul>
        <li
                v-for="job in jobList"
                :key="job.id">

            <label>
                {{ job.name }}
                <input
                        name="fieldName"
                        type="checkbox"
                        v-model="job.status">
            </label>
        </li>
    </ul>
</template>

<script>
    export default {
        props: {
            jobList: Array,
            listName: String,
            fieldName: String,
        },
    };
</script>
