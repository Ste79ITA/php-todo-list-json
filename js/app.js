const { createApp } = Vue;

createApp({
  data() {
    return {
      todos: [],
    };
  },
  methods: {},
  created() {
    console.log('TEST');
  },
}).mount('#app');
