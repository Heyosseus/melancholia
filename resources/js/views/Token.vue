<template>
    <div>
        <base-header></base-header>
        <div class="relative h-screen">
            <div class="mx-auto flex flex-col w-1/2  items-center justify-center h-[60vh] space-y-4 z-50">
                <h1 class="text-6xl z-50 uppercase py-2 font-bold px-6 tracking-[8px]  rounded-xl">Coming soon
                </h1>
                <p class="text-center text-md z-50">Get ready for the launch of [Token Name]! Our innovative cryptocurrency
                    is set to redefine digital transactions. Stay tuned for updates on our upcoming launch!</p>

            </div>
            <transition-group name="slide" tag="div" class="absolute inset-0 flex justify-center items-center z-10">
                <img v-for="(image, index) in images" :key="index" :src="image" alt="gorillaz"
                     class="absolute animate z-10" :style="imageStyles[index]"/>
            </transition-group>
        </div>
        <base-footer></base-footer>
    </div>
</template>

<script setup>
import BaseHeader from "../components/layouts/BaseHeader.vue";
import BaseFooter from "../components/layouts/BaseFooter.vue";
import axios from "axios";
import {ref, computed, onMounted} from "vue";

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

const imageStyles = computed(() => {
    return images.value.map(() => ({
        left: `${Math.random() * 50}%`,
        top: `${Math.random() * 50}%`,
    }));
});
</script>

<style>
.animate {
    animation: slide-in 0.6s ease forwards;
    transform: scale(1.2);
    animation-delay: 0.4s;
}

@keyframes slide-in {
    0% {
        aspect-ratio: 3/2;
    }

    100% {
        transform: scale(0.2);
        border-radius: 50%;
        aspect-ratio: 1/1;
        object-fit: fill;
        animation-fill-mode: forwards;
    //visibility: hidden;
    }
}

.slide-enter-active,
.slide-leave-active {
    transition: transform 0.6s ease-in, opacity 2s ease;
}

.slide-enter-from,
.slide-leave-to {
//transform: translateX(-50%); opacity: 0;
}

.slide-enter-to,
.slide-leave-from {
    transform: translateY(0);
    opacity: 1;
}
</style>
