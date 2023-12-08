import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';

import ArticlesList from '../components/ArticlesList.vue';
import ArticleDetail from '../components/ArticleDetail.vue';

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'articles-list',
    component: ArticlesList,
  },
  {
    path: '/articles/:id',
    name: 'article-detail',
    component: ArticleDetail,
    props: true,
  },
];


const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
