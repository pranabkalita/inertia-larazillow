<script>
import MainLayout from '../../layouts/MainLayout.vue';

export default {
    layout: MainLayout
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3';
import ListingAddress from '../../Components/ListingAddress.vue';

defineProps({
    listings: Array
})
</script>

<template>
    <div v-for="listing in listings" :key="listing.id">
        <div>
            <Link :href="route('listings.show', listing.id)">
                <ListingAddress :listing="listing" />
            </Link>
        </div>
        <div>
            <Link :href="route('listings.edit', listing.id)">Edit</Link>
        </div>
        <div>
            <Link :href="route('listings.destroy', listing.id)" as="button" method="DELETE">Delete</Link>
        </div>
    </div>
</template>
