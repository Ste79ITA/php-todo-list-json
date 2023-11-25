const { createApp } = Vue;

createApp({
  data() {
    return {
      todos: [],
      newTodo: '',
    };
  },
  methods: {
    fetchData() {
      axios.get('./server.php').then((res) => {
        this.todos = res.data.results;
      });
    },
    sendTodo() {
      const data = { text: this.newTodo, done: false };
      console.log(data);
      axios.post('store.php', data, {
        headers: { 'Content-Type': 'multipart/form-data' },
      });
      this.newTodo = '';
    },
    taskDone(todo) {
      todo.done = !todo.done;
    },
  },
  created() {
    this.fetchData();
  },
}).mount('#app');
