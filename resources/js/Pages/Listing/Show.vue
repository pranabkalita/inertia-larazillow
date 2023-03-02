<script>
import MainLayout from '../../layouts/MainLayout.vue';

export default {
    layout: MainLayout
}
</script>

<script setup>
import ListingAddress from '../../Components/ListingAddress.vue';

defineProps({
    listing: Object
})
</script>

<template>
    <ListingAddress :listing="listing" />
</template>
