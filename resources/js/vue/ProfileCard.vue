<template>
        <div>
            <button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 mb-3 border border-blue hover:border-transparent rounded-full"
                    style="outline: none;"
                    @click="showForm"
            >
                {{ status ? 'Close Edit Form' : 'Edit Profile' }}
            </button>

            <div id="edit-form" class="pb-4 w-full max-w-xxl bg-white border hover:border-blue-400 rounded px-4 pt-6 pb-8 mb-4" v-show="status">
                <slot></slot>
                <div class="flex items-center">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" type="button">
                        Save Changes
                    </button>
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Discard
                    </button>
                </div>
            </div>
        </div>

</template>

<script>
    export default {
        data(){
            return{
               status: false
            }
        },
        methods: {
            showForm(){
                this.status = !this.status;
            }
        }
    }
</script>


