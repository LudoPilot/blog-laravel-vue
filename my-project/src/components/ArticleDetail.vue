<template>
	<div>
	  <h2 class="list-title">Détails de l'Article</h2>
	  <template v-if="article">
		<h3>{{ article.title }}</h3>
		<p>{{ article.content }}</p>
	  </template>
	  <template v-else>
		<p>Chargement en cours...</p>
	  </template>
	</div>
  </template>
  
<script setup lang="ts">
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRoute } from 'vue-router';

//const { id } = defineProps(['id']);

interface Article {
  title: string;
  content: string;
}

const article = ref<Article | null>(null);

onMounted(() => {
	const route = useRoute();
	const articleId = route.params.id;
  axios.get(`http://127.0.0.1:8000/api/articles/${articleId}`)
    .then(response => {
      article.value = response.data;
    })
    .catch(error => {
      console.error('Erreur lors de la récupération des détails de l\'article :', error);
    });
});

</script>
  