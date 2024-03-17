<template>
        <div class="bg-primary justify-center items-center flex flex-col  relative  z-10">
        <h1 class="text-white text-2xl sm:text-4xl md:text-6xl font-semibold w-full 2xl:w-1/2 px-4 sm:px-20 2xl:px-0 text-center pt-20 ">
            NFT art inspired by the diverse sounds of Gorillaz music
        </h1>
        <button
            class="bg-white text-primary px-8 py-3 rounded-full text-xl font-semibold hover:bg-neutral-600 transition-colors hover:text-white mt-20 outline-0"
        >
            Explore
        </button>
        <div
             class="flex w-full flex-row items-center justify-center carousel-track z-50 my-32">
            <div  v-for="(image, index) in images" :key="index" class="flex">
                <img :src="image" alt="" class="w-56 rounded-2xl"/>

            </div>
        </div>
    </div>

</template>

<script setup>
import axios from "axios";
import {onMounted, ref} from "vue";

const images = ref([]);
onMounted(() => {
    getImages();
});
const getImages = async () => {
    try {
        const response = await axios.get("http://localhost:8000/api/sections");
        images.value = response.data.map((section) => `/storage/${section.image}`);
        console.log(images.value);
    } catch (error) {
        console.error(error);
    }
};

</script>

<style>
.carousel-container {
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    position: relative;
    padding: 100px;
    border-color: #4b5563;
    width: 100%;
}

.carousel-card {
    display: flex;
    justify-content: space-between;

    &:hover {
        transform: scale(0.9);
        cursor: pointer;
    }

    border-radius: 20%;
}

.carousel-card > img {
    border-radius: 15px;
}


.carousel-track {
    display: flex;
    //position: absolute;
    //left: 0;
    //bottom: 0;
    justify-content: space-around;
    align-items: center;
    gap: 16px;
    width: 100%;
    z-index: -10;
    animation: slide 25s linear infinite backwards;
}

@keyframes slide {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>
