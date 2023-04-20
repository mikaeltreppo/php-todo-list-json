
const { createApp } = Vue

createApp({
    data() {
        return {
            todoItem: '',
            todoList: [],
        } 
    },
    methods: {
        showList(){
            axios.get('server.php').then(response => {
                this.todoList = response.data;
                this.todoItem = '';

            })
        }
    },
    mounted(){
        this.showList();
    }
}).mount('#app')
