<template>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<Link :href="route('login')" class="header__logo">
					<img src="/public/images/logo.png" alt="Logo">
					<p>Znakomstva.com</p>
				</Link>
				<div class="header__nav">
					<a href="#!" class="header__nav-item header__nav-item--active">Анкеты</a>
					<a href="#!" class="header__nav-item">Сообщения</a>
					<a href="#!" class="header__nav-item">Подписка</a>
				</div>
				<div class="header__right">
					<div class="header__select">
						<select>
							<option value="ru">Россия</option>
						</select>
					</div>
					<div class="header__btns">
						<button><img src="/public/images/icons/search.svg" alt="search icon"></button>
						<button><img src="/public/images/icons/notification.svg" alt="notification icon"></button>
					</div>
					<div class="profile">
						<a class="profile__info" href="#!">
							<img class="profile__photo" src="/public/images/photo.png" alt="photo user">
							<p class="profile__name">Иван Иванов</p>
						</a>
					</div>
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