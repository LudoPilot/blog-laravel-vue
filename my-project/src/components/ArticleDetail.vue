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
		<router-link to="/" class="back-button">Retour à la liste des articles</router-link>
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

<style>
.back-button {
	display: inline-block;
	margin-top: 20px;
	padding: 10px 20px;
	background-color: #007bff;
	color: #fff;
	text-decoration: none;
	border-radius: 5px;
	cursor: pointer;
}

.back-button:hover {
	background-color: #0056b3;
}
</style>