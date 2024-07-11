<template>
<header class="header">
	<div class="container">
		<div class="header__wrapper">
			<Link :href="route('home')" class="header__logo">
				<img src="/public/images/logo.png" alt="Logo">
				<p>Znakomstva.com</p>
			</Link>
			<div v-if="isLoginPage" class="header__info">
				<p>Впервые здесь?</p>
				<Link :href="route('register')" class="btn btn-outline">Регистрация</Link>
			</div>
			<div v-else class="header__info">
				<p>Уже есть аккаунт?</p>
				<Link :href="route('home')" class="btn btn-outline">Войти</Link>
			</div>
		</div>
	</div>
</header>
<main>
	<slot />
</main>
<footer class="footer">
	<div class="container">
		<div class="footer__wrapper">
			<ul class="menu">
				<li><a href="#!" class="menu-item">О нас</a></li>
				<li><a href="#!" class="menu-item">Поддержка</a></li>
				<li><a href="#!" class="menu-item">Советы</a></li>
				<li><a href="#!" class="menu-item">Контакты</a></li>
				<li><a href="#!" class="menu-item">Правила оплаты</a></li>
			</ul>
			<a href="#!" class="menu-item">Политика обработки персональных данных</a>
			<select name="language" id="language" class="language-select">
				<option value="ru" class="language-select__item">RU</option>
				<option value="en" class="language-select__item">EN</option>
			</select>
			<div class="copyright">
				<p>© Company {{ currentYear }}</p>
			</div>
		</div>
	</div>
</footer>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3"
import { ref, computed } from "vue";
const currentYear = ref(new Date().getFullYear());

const page = usePage();
const isLoginPage = computed(() => page.props.value.currentRouteName === 'home');
</script>