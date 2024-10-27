<template>
<header class="bg-gray-900 p-0.1 flex justify-between items-center z-40 shadow-sm px-10">
    <div class="info-header text-white  flex w-18 p-3 gap-10 hover:text-opacity-70">
            <div class="logo">
                <h3 class="font-bold cursor-pointer text-lg text-white"><a :href="this.route('dashboard')">
                        Sistema Nexos
                    </a></h3>
            </div>

        </div>

        <div class="flex items-center gap-5 ">
            <span class="material-icons hover:opacity-70 text-white cursor-pointer">
                    notifications
            </span>
            <span class="material-icons hover:opacity-70 text-white cursor-pointer">
                    mail
            </span>

            <logo-component size="w-10 h-10 cursor-pointer"></logo-component>

        </div>
    </header>
</template>

<script>
export default {
    name: "NavBar",
};
</script>


