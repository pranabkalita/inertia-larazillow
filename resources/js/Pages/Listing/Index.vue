<script>
import MainLayout from "../../layouts/MainLayout.vue";

export default {
    layout: MainLayout,
    components: { Box },
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";

import ListingAddress from "@/Components/ListingAddress.vue";
import Box from "@/Components/UI/Box.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import Price from "@/Components/Price.vue";

defineProps({
    listings: Array,
});
</script>

<template>
    <div class="grid grid-cols-1 md:grid-col-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">
            <div>
                <Link :href="route('listings.show', listing.id)">
                    <Price :price="listing.price" class="text-2xl font-bold" />
                    <ListingSpace :listing="listing" class="text-lg" />
                    <ListingAddress :listing="listing" class="text-gray-500" />
                </Link>
            </div>
            <div>
                <Link :href="route('listings.edit', listing.id)">Edit</Link>
            </div>
            <div>
                <Link
                    :href="route('listings.destroy', listing.id)"
                    as="button"
                    method="DELETE"
                    >Delete</Link
                >
            </div>
        </Box>
    </div>
</template>
