
const { createApp } = Vue

createApp({
    data() {
        return {
            todoItems: '',
            todoItem: '',
            todoList: [
                
            ],
        }
    },
    methods: {
        showList() {
            axios.get('server.php').then(response => {
                this.todoList = response.data;


            })
        },
        addItem() {

            const data = {
                todoItem: this.todoItems,
            }
            axios.post('server.php', data, { headers: { 'Content-Type': 'multipart/form-data' } })
            .then(response => {
                this.todoList = response.data;
                    this.todoItems = '';
                  
            });
        },
        remove() {
            this.todoItem = !this.todoItem
        

        }

    },
    mounted() {
        this.showList();
    }
}).mount('#app')
