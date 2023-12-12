<script setup lang="ts">
import { ref } from "vue";
import axios from 'axios';

const email = ref('');
const password = ref('');

const login = () => {
	const loginInfo = {
		email: email.value,
		password: password.value,
	};

	axios.post('http://127.0.0.1:8000/api/login', loginInfo)
}
</script>

<template>

<h2>Connexion</h2>
<form action="" method="post">
	<div>
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" v-model="email" required>
      </div>
	  <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" v-model="password" required>
      </div>
      <button type="submit">Se connecter</button>
</form>

</template>