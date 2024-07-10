<template>
<header class="header">
	<div class="container">
		<div class="header__wrapper">
			<Link :href="route('home')" class="header__logo">
				<img src="/public/images/logo.png" alt="Logo">
				<p>Znakomstva.com</p>
			</Link>
			<div class="header__info">
				<p>Впервые здесь?</p>
				<a href="#!" class="btn-outline">Регистрация</a>
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
import { Link } from "@inertiajs/inertia-vue3"
import { ref } from "vue";
const currentYear = ref(new Date().getFullYear());
</script>