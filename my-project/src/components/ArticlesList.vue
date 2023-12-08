<template>
	<div class="articles-list">
		<h1 class="list-title">Liste des Articles</h1>
		<p>Cliquez sur les articles pour les ouvrir</p>
		<ul>
			<li v-for="article in articles" :key="article.id" class="article-item">
				<router-link :to="{ name: 'article-detail', params: { id: article.id } }">{{ article.title }}</router-link>
			</li>
		</ul>
	</div>
</template>
  
<script setup lang="ts">
import { ref, onMounted } from "vue";
import axios from "axios";

interface Article {
	id: number;
	title: string;
}

const articles = ref<Article[]>([]);

onMounted(() => {
	axios
		.get<Article[]>("http://127.0.0.1:8000/api/articles")
		.then((response) => {
			articles.value = response.data;
		})
		.catch((error) => {
			console.error("Erreur lors de la récupération des articles :", error);
		});
});
</script>
  
<style>
.articles-list {
	margin: 20px;
	padding: 20px;
	border: 1px solid #ddd;
	border-radius: 5px;
	background-color: #f7f7f7;
}

.article-item {
	margin-bottom: 20px;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	background-color: #fff;
}

.list-title {
  font-size: 24px; 
  font-weight: bold; 
  margin-bottom: 10px;
}
</style>