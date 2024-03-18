<template>
    <div
        class="flex flex-col lg:flex-row items-start 2xl:justify-between py-24 ">
        <div class="flex flex-col w-full px-4 sm:px-10 mx-auto lg:mx-0  gap-5 cursor-pointer"
        >
            <h1 class="text-4xl font-bold">Details & FAQ</h1>
            <div class="rounded-xl py-3 px-4 bg-primary text-white text-lg w-full mx-auto"
                 v-for="(section, index) in data" :key="index">
                <Disclosure  as="div"

                >
                    <DisclosureButton class="py-2 text-2xl font-bold tracking-wider">
                        {{section.title}}
                    </DisclosureButton>
                    <DisclosurePanel class="text-white  py-2 ">
                      {{section.description}}
                    </DisclosurePanel>
                </Disclosure>
            </div>
        </div>
    </div>
</template>
<script setup>
import axios from "axios";
import {onMounted, ref} from "vue";
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
} from '@headlessui/vue'


const data = ref([]);
onMounted(() => {
    getDetailsData();
});
const getDetailsData = async () => {
    try {
        const response = await axios.get("http://localhost:8000/api/details");
        data.value = response.data;
    } catch (error) {
        console.error(error);
    }
};
</script>
