<template>
    <div
        class="bg-primary rounded-b-[60px]  flex flex-col lg:flex-row items-start justify-evenly 2xl:justify-between py-24 ">
        <div class="flex flex-col w-full px-4 sm:px-10 lg:w-1/2 gap-5 cursor-pointer"
        >
            <div
                v-for="(section, index) in data" :key="index"
                @click="selectSection(index)"
                class="border flex flex-col  border-gray-400 p-4 sm:p-16 lg:p-10 rounded-2xl hover:border-gray-50
                 text-white text-lg sm:text-2xl font-bold"
                :class="{'bg-cyan-800': selectedSection === index && index === 0 , 'bg-orange-500': selectedSection === index && index === 1, 'border-0' : selectedSection === index}"
            >
                {{ section.title }}
            </div>
        </div>
        <img
            :src="images[selectedSection] ?? images[0]"
            alt=""
            class="mt-10 mx-auto  lg:mt-0  lg:w-1/3 rounded-2xl"
        />
    </div>
</template>
<script setup>
import axios from "axios";
import {onMounted, ref} from "vue";

const images = ref([]);
const data = ref([]);
const selectedSection = ref(0);
onMounted(() => {
    getInfoData();
});
const getInfoData = async () => {
    try {
        const response = await axios.get("http://localhost:8000/api/infos");
        images.value = response.data.map((section) => `/storage/${section.image}`);
        data.value = response.data;
    } catch (error) {
        console.error(error);
    }
};

const selectSection = (index) => {
    selectedSection.value = index;
};
</script>
