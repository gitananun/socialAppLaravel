<template>
    <div class="mx-3">
        <div class="flex justify-between">
            <button class="bg-transparent hover:bg-red-500 flex-auto text-blue-dark font-semibold hover:text-white py-2 px-4 mb-3 border border-blue hover:border-transparent rounded-full"
                    style="outline: none;"
                    @click="showForm"
            >
                    {{ status ? 'Close Delete Form' : 'Delete Profile' }}
            </button>

        </div>

        <div id="delete-form" class="pb-4 w-full w-100 bg-white border hover:border-red-400 rounded px-4 pt-6 pb-8 mb-4" v-show="status">
            <slot>
            </slot>
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
            },
            showDeleteForm(){
                this.status = !this.status;
            }
        }
    }
</script>

<style scoped>
    #delete-form{
        width: 100%;
    }
</style>

