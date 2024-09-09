const { createApp } = Vue;

createApp({
    data() {
        return{
            todolist: [],
            url: 'server.php',
        }
    },
    methods: {
        getTodolist() {
            axios.get(this.url).then((result) => {
                console.log(result.data)
                this.todolist = result.data;
            });
        }
    },
    mounted(){
        this.getTodolist();
    }
}).mount("#app")