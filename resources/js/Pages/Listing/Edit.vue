<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    listing: Object
})

const form = useForm({
    beds: props.listing.beds,
    baths: props.listing.baths,
    area: props.listing.area,
    city: props.listing.city,
    street: props.listing.street,
    code: props.listing.code,
    street_nr: props.listing.street_nr,
    price: props.listing.price
})

const submit = () => form.put(route('listings.update', props.listing.id))
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
            <button type="submit">Update</button>
        </div>
    </div>
</form>
</template>
