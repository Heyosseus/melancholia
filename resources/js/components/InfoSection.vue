<template>
    <div class="bg-primary rounded-b-[60px]  flex flex-col lg:flex-row items-start justify-evenly 2xl:justify-between py-24 ">
        <div class="flex flex-col w-full px-4 sm:px-10 lg:w-1/2 gap-5 cursor-pointer">
            <div
                v-for="(color, index) in colors"
                :key="index"
                class="border border-gray-400 p-4 sm:p-16 lg:p-10 rounded-2xl hover:border-gray-50 text-white text-lg sm:text-2xl font-bold"
                :style="{ backgroundColor: color }"
                @click="changeColor(index)"
            >
                Punks with a blue background are not for sale and have no current bids.
            </div>
        </div>
        <img
            src="../../../public/assets/gorillaz.png"
            alt=""
            class="mt-10 mx-auto  lg:mt-0  lg:w-1/3 rounded-2xl"
        />
    </div>
</template>
<script setup>
const colors = ['transparent', 'transparent', 'transparent'];

let changeColor = (index) => {
    const newColors =['transparent', 'transparent', 'transparent'];
    newColors[index] = index === 0 ? 'red' : index === 1 ? 'blue' : 'green';
    this.colors = newColors;
}
</script>
