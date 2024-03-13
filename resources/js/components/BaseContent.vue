<template>
    <div class="bg-primary justify-center items-center flex flex-col  relative h-screen z-10">
        <h1 class="text-white text-2xl sm:text-4xl md:text-6xl font-semibold w-full 2xl:w-1/2 px-4 sm:px-20 2xl:px-0 text-center leading-tight ">
            NFT art inspired by the eclectic world of Gorillaz music
        </h1>
        <button
            class="bg-white text-primary px-8 py-3 rounded-full text-xl font-semibold hover:bg-neutral-600 transition-colors hover:text-white mt-20 outline-0"
        >
            Explore
        </button>
        <div class="flex  w-full items-center justify-center carousel-track z-50 mt-40">
            <img
                src="../../../public/assets/gorillaz.jpeg"
                alt=""
                class="w-56 rounded-2xl"
            />
        </div>
    </div>
    <div class="h-screen bg-primary">
        <h1 class="text-center text-4xl text-white font-bold">Featured in</h1>
        <div class="px-20 mt-20 flex justify-center items-center gap-10">
            <div
                class="rounded-3xl border border-gray-400 space-y-8 text-white w-1/4 pt-4 group hover:border-gray-50 transition-colors cursor-pointer">
                <h1 class="text-3xl px-8">Test</h1>
                <p class="my-4 text-xl px-8">TestvTestTest Test Test TestTest TestTestTest</p>
                <div
                    class="border-t-2 border-gray-400 flex justify-between px-8 py-4 items-center group-hover:border-gray-50">
                    <p class="text-xl">Read more</p>
                    <IconWhiteArrow class="group-hover:rotate-[-30deg] transition duration-300"/>
                </div>
            </div>
            <div
                class="rounded-3xl border border-gray-400 space-y-8 text-white w-1/4 pt-4 group hover:border-gray-50 transition-colors cursor-pointer">
                <h1 class="text-3xl px-8">Test</h1>
                <p class="my-4 text-xl px-8">TestvTestTest Test Test TestTest TestTestTest</p>
                <div
                    class="border-t-2 border-gray-400 flex justify-between px-8 py-4 items-center group-hover:border-gray-50">
                    <p class="text-xl">Read more</p>
                    <IconWhiteArrow class="group-hover:rotate-[-30deg] transition duration-300"/>
                </div>
            </div>
            <div
                class="rounded-3xl border border-gray-400 space-y-8 text-white w-1/4 pt-4 group hover:border-gray-50 transition-colors cursor-pointer">
                <h1 class="text-3xl px-8">Test</h1>
                <p class="my-4 text-xl px-8">TestvTestTest Test Test TestTest TestTestTest</p>
                <div
                    class="border-t-2 border-gray-400 flex justify-between px-8 py-4 items-center group-hover:border-gray-50">
                    <p class="text-xl">Read more</p>
                    <IconWhiteArrow class="group-hover:rotate-[-30deg] transition duration-300"/>
                </div>
            </div>
        </div>

        <div class="text-white flex w-full px-64 mt-40 ">
            <h1 class="text-5xl w-1/2 font-bold">Meet the Gorillaz</h1>
            <div class="w-1/2 ml-auto">
                <p class="text-xl leading-8 tracking-wide ">The CryptoPunks are 24x24 pixel art images, generated algorithmically. Most are
                    punky-looking guys
                    and girls, but there are a few rarer types mixed in: Apes, Zombies and even the odd Alien. Every
                    punk has their own profile page that shows their attributes as well as their ownership/for-sale
                    status.</p>
                <div class="space-x-2">
                    <button
                        class="bg-white text-black px-8 py-3 rounded-full text-xl font-semibold hover:bg-neutral-600 transition-colors  hover:text-white mt-20 outline-0">
                        Buy
                    </button>
                    <button
                        class="border border-gray-400 px-8 py-3 rounded-full text-xl font-semibold hover:border-gray-50    ">
                        View full collection
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import IconWhiteArrow from "./icons/IconWhiteArrow.vue";

const images = [
    '../../../public/assets/gorillaz.jpeg'
];


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
