<template>
    <div>
    <h2>Sample Front end</h2>
    <form>
    <input v-model="title" type="text" placeholder="New Book Title">
    <button @click.prevent="formclicked()" type="submit">Submit New Book</button>
    </form>
    <ul v-if="books">
    <li v-for="book in books" v-bind:key="book._id">{{ book.title }} {{book.commentcount}} comment(s)</li>
  </ul>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        async created() {
     const books = await axios.get(`/api/books`)
     if (books.data) {
       this.books = books.data;
     }
   },
        methods: {
          formclicked(){
          axios.post('/api/books', {
    title:this.title
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });
          }
          },
          data() {
      return {
        books: null
      }
    }
    }
</script>
