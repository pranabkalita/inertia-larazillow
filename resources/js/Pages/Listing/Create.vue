<script>
import MainLayout from '../../layouts/MainLayout.vue';

export default {
    layout: MainLayout
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    street: null,
    code: null,
    street_nr: null,
    price: 0
})

const submit = () => form.post(route('listings.create'))
</script>

<template>
    <form v-on:submit.prevent="submit">
        <div>
            <div>
                <label for="">Beds</label>
                <input v-model.number="form.beds" type="text">
                <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
            </div>
            <div>
                <label for="">Baths</label>
                <input v-model.number="form.baths" type="text">
                <div v-if="form.errors.baths">{{ form.errors.baths }}</div>
            </div>
            <div>
                <label for="">Area</label>
                <input v-model.number="form.area" type="text">
                <div v-if="form.errors.area">{{ form.errors.area }}</div>
            </div>
            <div>
                <label for="">City</label>
                <input v-model="form.city" type="text">
                <div v-if="form.errors.city">{{ form.errors.city }}</div>
            </div>
            <div>
                <label for="">Post Code</label>
                <input v-model="form.code" type="text">
                <div v-if="form.errors.code">{{ form.errors.code }}</div>
            </div>
            <div>
                <label for="">Street</label>
                <input v-model="form.street" type="text">
                <div v-if="form.errors.street">{{ form.errors.street }}</div>
            </div>
            <div>
                <label for="">Street Nr</label>
                <input v-model="form.street_nr" type="text">
                <div v-if="form.errors.street_nr">{{ form.errors.street_nr }}</div>
            </div>
            <div>
                <label for="">Price</label>
                <input v-model.number="form.price" type="text">
                <div v-if="form.errors.price">{{ form.errors.price }}</div>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px;
}
</style>
