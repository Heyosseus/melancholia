<template>
    <div class="bg-primary">
        <h1 class="text-center text-4xl text-white font-bold">Featured in</h1>
        <div class="px-6 xl:px-20 mt-20 flex flex-col lg:flex-row justify-center items-center gap-6 xl:gap-10">
            <div
                class="rounded-3xl border border-gray-400 space-y-8 text-white w-full lg:w-1/4 pt-4 group hover:border-gray-50 transition-colors cursor-pointer">
                <h1 class="text-3xl px-8">Test</h1>
                <p class="my-4 text-xl px-8">TestvTestTest Test Test TestTest TestTestTest</p>
                <div
                    class="border-t-2 border-gray-400 flex justify-between px-8 py-4 items-center group-hover:border-gray-50">
                    <p class="text-xl">Read more</p>
                    <IconWhiteArrow class="group-hover:rotate-[-30deg] transition duration-300"/>
                </div>
            </div>
            <div
                class="rounded-3xl border border-gray-400 space-y-8 text-white  w-full lg:w-1/4 pt-4 group hover:border-gray-50 transition-colors cursor-pointer">
                <h1 class="text-3xl px-8">Test</h1>
                <p class="my-4 text-xl px-8">TestvTestTest Test Test TestTest TestTestTest</p>
                <div
                    class="border-t-2 border-gray-400 flex justify-between px-8 py-4 items-center group-hover:border-gray-50">
                    <p class="text-xl">Read more</p>
                    <IconWhiteArrow class="group-hover:rotate-[-30deg] transition duration-300"/>
                </div>
            </div>
            <div
                class="rounded-3xl border border-gray-400 space-y-8 text-white w-full lg:w-1/4 pt-4 group hover:border-gray-50 transition-colors cursor-pointer">
                <h1 class="text-3xl px-8">Test</h1>
                <p class="my-4 text-xl px-8">TestvTestTest Test Test TestTest TestTestTest</p>
                <div
                    class="border-t-2 border-gray-400 flex justify-between px-8 py-4 items-center group-hover:border-gray-50">
                    <p class="text-xl">Read more</p>
                    <IconWhiteArrow class="group-hover:rotate-[-30deg] transition duration-300"/>
                </div>
            </div>
        </div>

        <div class="text-white pb-10 flex flex-col xl:flex-row gap-5  w-full px-10 xl:px-32 2xl:px-64 mt-40 ">
            <h1 class="text-5xl w-full xl:w-1/2 font-bold">Meet the Gorillaz</h1>
            <div class="w-full mt-8 xl:mt-0 xl:w-1/2 ml-auto">
                <p class="text-xl leading-8 tracking-wide ">The CryptoPunks are 24x24 pixel art images, generated
                    algorithmically. Most are
                    punky-looking guys
                    and girls, but there are a few rarer types mixed in: Apes, Zombies and even the odd Alien. Every
                    punk has their own profile page that shows their attributes as well as their ownership/for-sale
                    status.</p>
                <div class="sm:space-x-2">
                    <button
                        class="w-full sm:w-fit bg-white outline outline-white text-black px-8 py-3 rounded-full text-xl font-semibold hover:bg-neutral-600 transition-colors  hover:outline-neutral-600 hover:text-white mt-20 ">
                        Buy
                    </button>
                    <button
                        class="w-full mt-4 sm:mt-0 sm:w-fit outline outline-gray-400 px-8 py-3 rounded-full text-xl font-semibold hover:outline-gray-50    ">
                        View full collection
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>
<script setup>
import IconWhiteArrow from "./icons/IconWhiteArrow.vue";
</script>
