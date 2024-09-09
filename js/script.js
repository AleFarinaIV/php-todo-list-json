const { createApp } = Vue;

createApp({
    data() {
        return{
            todolist: [],
            url: 'server.php',
        }
    }
}).mount("#app")