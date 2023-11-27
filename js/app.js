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
      if (this.newTodo === '') return;
      const data = { text: this.newTodo, done: false };
      axios.post('store.php', data, {
        headers: { 'Content-Type': 'multipart/form-data' },
      });
      this.newTodo = '';
    },
    taskDone(todo) {
      todo.done = !todo.done;
    },
    deleteTask(i) {
      axios.get('delete.php', {
        params: {
          value: i,
        },
      });
    },
  },
  created() {
    this.fetchData();
  },
}).mount('#app');
