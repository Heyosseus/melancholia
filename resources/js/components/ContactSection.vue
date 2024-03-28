<template>
    <div id="contact_us" class="flex flex-col bg-white lg:flex-row lg:justify-center  lg:mx-auto xl:mx-32  lg:space-x-28 lg:shadow-lg px-4 lg:p-16  mb-20 mt-6 lg:mt-10">
        <div class="px-2 ">
            <h1 class="uppercase tracking-wide text-center text-lg lg:text-start mt-6 lg:mt-0">connect with us</h1>
            <div class="w-16 m-auto lg:m-1 lg:w-1/6 h-[1px] bg-primary "></div>
            <h1 class="text-4xl font-bold text-primary tracking-wide mt-10">Let's collaborate</h1>

            <form @submit.prevent="submitForm" method="post" class="mt-10">
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="name" class="text-sm text-primary font-bold mb-1">Name</label>
                        <input v-model="formData.name" type="text" name="name" id="name"
                               class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your name">
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="email" class="text-sm text-primary font-bold mb-1">Email</label>
                        <input v-model="formData.email" type="email" name="email" id="email"
                               class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your email">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-4">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="company" class="text-sm text-primary font-bold mb-1">Company</label>
                        <input v-model="formData.company" type="text" name="company" id="company"
                               class="border border-gray-300 p-3 rounded-md"
                               placeholder="Company name">
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="text" class="text-sm text-primary font-bold mb-1">Subject</label>
                        <input v-model="formData.subject" type="text" name="text" id="text"
                               class="border border-gray-300 p-3 rounded-md"
                               placeholder="Share your ideas">
                    </div>

                </div>

                <button
                    type="submit"
                    class="group flex items-center space-x-2 rounded-full px-5 py-2 border border-pink-950 text-primary hover:bg-primary hover:text-white mt-10">
                    <span>send</span>
                </button>

            </form>

        </div>

        <div class="px-4 lg:px-10 mb-16 lg:mb-0  relative ">
            <h1 class="uppercase tracking-wide mt-10 text-center text-lg lg:text-start lg:mt-0">contact us</h1>
            <div class="w-16 m-auto lg:m-1 lg:w-1/3 h-[1px] bg-primary "></div>
            <div class="mt-10 sm:flex sm:flex-row items-center sm:justify-around lg:flex-col lg:items-start ">
                <h1 class="text-4xl">Our<span class="font-bold text-primary-950 ml-2">Email</span></h1>
                <div class="mt-6 ">
                    <div>
                        <a href="admin@gorillaz.com" class="font-bold text-primary text-lg">admin@gorillaz.com </a>
                    </div>

                    <div class="flex space-x-4 mt-10">
                        <IconDiscord/>
                        <IconTwitter/>
                    </div>

                </div>


            </div>
        </div>
    </div>

</template>

<script setup>
import IconDiscord from "@/components/icons/IconDiscord.vue";
import IconTwitter from "@/components/icons/IconTwitter.vue";
import {ref} from 'vue';
import axios from 'axios';
import Swal from 'sweetalert2';

const formData = ref({
    name: '',
    email: '',
    company: '',
    subject: ''
});

const messageBox = (text, err) => {
    let message = document.createElement('div');
    message.innerText = text;
    message.classList.add('message-box');
    err ?  message.style.background = '#d50e0e' : '';
    document.body.append(message);

    setTimeout(() => {
        message.style.opacity = '0';
        message.style.transition = 'opacity 0.5s';
        setTimeout(() => {
            message.remove();
        }, 500);
    }, 3000);
};

const submitForm = async () => {
    try {
        await axios.post('/api/contact',
            {
                name: formData.value.name,
                email: formData.value.email,
                company: formData.value.company,
                subject: formData.value.subject
            }
        ).then(response => {
            for(let x in formData.value){
                formData.value[x] = '';
            }
          messageBox(response.data.success, false)
        })
    } catch (error)  {
        messageBox(error, true)
    }
}
</script>
<style>
.message-box{
    position: fixed;
    top: 10px;
    right: 10px;
    margin: auto;
    padding: 8px 26px;
    border-radius: 6px;
    background: #00bb00;
    color: white;
    font-weight: bold;
}
</style>
