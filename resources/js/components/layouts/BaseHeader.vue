<template>
    <header class="bg-primary text-white p-8 flex justify-between items-center  w-full  mt-0 px-10 xl:px-20">
        <h1 class="text-2xl sm:text-4xl font-bold ">GorillazNFT</h1>

        <nav class="hidden lg:flex w-full xl:w-1/2 justify-around">
            <ul class="flex w-1/2 justify-between  xl:justify-around  text-xl space-x-5
           ">
                <li>
                    <router-link to="/" class="text-gray-200 text-xl  font-bold hover:text-white hover:font-bold ">Home
                    </router-link>
                </li>
                <li>
                    <router-link to="/about" class="text-gray-200 text-xl  font-bold hover:text-white hover:font-bold ">
                        About
                    </router-link>
                </li>
                <li>
                    <router-link to="/about" class="text-gray-200 text-xl  font-bold hover:text-white hover:font-bold ">
                        Collection
                    </router-link>
                </li>
                <li>
                    <router-link to="/about" class="text-gray-200 text-xl  font-bold hover:text-white hover:font-bold ">
                        FAQs
                    </router-link>
                </li>
            </ul>
            <ul class="flex space-x-4">
                <li class="cursor-pointer">
                    <IconDiscord/>
                </li>
                <li class="cursor-pointer">
                    <IconTwitter/>
                </li>
            </ul>
        </nav>
        <div class="lg:hidden cursor-pointer" @click="toggleSidebar">
            <IconMenu/>
        </div>

        <div id="sidebar"
             class=" lg:hidden fixed top-0 left-[-10px] w-[80vw]  h-full bg-white shadow-xl transform -translate-x-full overflow-y-auto transition-transform duration-300 ease-in-out z-40">
            <div class="px-6 sm:px-10 py-7 md:px-16 md:py-12 select-none z-50">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl sm:text-4xl font-bold text-black">GorillazNFT</h1>
                    <div class="cursor-pointer" @click="toggleSidebar">
                        <IconClose :class="showSidebar ? 'rotate-0' : 'rotate-[360deg] transition'"/>
                    </div>
                </div>

                <ul class="flex flex-col space-y-6 mt-10 ">
                    <router-link to="/"
                                 class="flex justify-between group cursor-pointer text-black text-2xl font-bold hover:text-gray-500 hover:font-bold">
                        Home
                        <IconRightArrow
                            class="group-hover:rotate-[-45deg] transition-transform duration-300 ease-in-out"/>
                    </router-link>
                    <router-link to="/about"
                                 class="flex justify-between group cursor-pointer text-black text-2xl  font-bold hover:text-gray-500 hover:font-bold">
                        About
                        <IconRightArrow
                            class="group-hover:rotate-[-45deg] transition-transform duration-300 ease-in-out"/>
                    </router-link>

                    <router-link to="/about"
                                 class="flex justify-between group cursor-pointer text-black text-2xl  font-bold hover:text-gray-500 hover:font-bold">
                        Collection
                        <IconRightArrow
                            class="group-hover:rotate-[-45deg] transition-transform duration-300 ease-in-out"/>
                    </router-link>
                    <router-link to="/about" class="flex justify-between group cursor-pointer text-black text-2xl  font-bold hover:text-gray-500 hover:font-bold">

                            FAQs
                        <IconRightArrow
                            class="group-hover:rotate-[-45deg] transition-transform duration-300 ease-in-out"/>
                    </router-link>

                </ul>
                <div class="flex gap-6 mt-20">
                        <span class="cursor-pointer">
                            <IconDiscord class="scale-150" fill="discordColor"/>
                        </span>
                    <span class="cursor-pointer">
                            <IconTwitter class="scale-150" :fill="twitterColor"/>
                        </span>
                </div>
            </div>
        </div>
    </header>
</template>
<script setup>
import IconDiscord from "../icons/IconDiscord.vue";
import IconTwitter from "../icons/IconTwitter.vue";
import IconMenu from "../icons/IconMenu.vue";
import IconClose from "../icons/IconClose.vue";
import IconRightArrow from "../icons/IconRightArrow.vue";

import {ref} from "vue";

const discordColor = ref("black");
const twitterColor = ref("black");


const showSidebar = ref(false);

const toggleSidebar = () => {
    showSidebar.value = !showSidebar.value;
    sidebar.classList.toggle('-translate-x-full');
};


</script>
