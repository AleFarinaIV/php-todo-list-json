const { createApp } = Vue;

createApp({
    data() {
        return{
            todolist: [],
            url: 'server.php',
            todo_item: '',
        }
    },
    methods: {
        getTodolist() {
            axios.get(this.url).then((result) => {
                console.log(result.data)
                this.todolist = result.data;
            });
        },
        addTodoItem() {
            const data = new FormData();
            data.append('todoItem', this.todo_item);

            axios.post(this.url, data).then((result) => {
                console.log(result.data);
                this.todo_item = '';
                this.todolist = result.data;
            });
        }
    },
    mounted(){
        this.getTodolist();
    }
}).mount("#app")