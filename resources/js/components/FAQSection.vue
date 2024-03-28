<template>
    <div
        class="flex flex-col lg:flex-row items-start 2xl:justify-between py-20 ">
        <div class="flex flex-col w-full px-4 sm:px-32 mx-auto lg:mx-0 cursor-pointer"
        >
            <h1 class="text-3xl lg:text-5xl mb-10  text-center">Frequently Asked Questions</h1>
            <div class="border border-black shadow-lg py-6 px-8 bg-white text-primary  w-full mx-auto"
                 v-for="(section, index) in data" :key="index">
                <Disclosure as="div"
                            v-slot="{ open }"
                >
                        <DisclosureButton
                            class="py-2 text-xl font-bold tracking-wider flex items-center w-full  justify-between">
                            <p>  {{ section.title }}</p>
                            <IconRightArrow :class="open && 'rotate-[270deg] transform'" class="rotate-90"/>
                        </DisclosureButton>
                    <transition
                        enter-active-class="transition duration-100 ease-out"
                        enter-from-class="transform scale-95 opacity-0"
                        enter-to-class="transform scale-100 opacity-100"
                        leave-active-class="transition duration-75 ease-out"
                        leave-from-class="transform scale-100 opacity-100"
                        leave-to-class="transform scale-95 opacity-0"
                    >
                        <DisclosurePanel class="text-primary  py-2 ">
                            {{ section.description }}
                        </DisclosurePanel>
                    </transition>
                </Disclosure>
            </div>
        </div>
    </div>
</template>
<script setup>
import axios from "axios";
import IconRightArrow from "@/components/icons/IconRightArrow.vue";
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
