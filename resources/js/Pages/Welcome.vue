<template>
  <GuestLayout>
    <div class="home">
      <div class="container">
        <div class="home__wrapper">
          <h1 class="title-1">Знакомства без преград</h1>
          <p class="home__text">
            Для современного мира сплочённость команды профессионалов однозначно
            фиксирует необходимость системы обучения кадров, соответствующей
            насущным потребностям.
          </p>
          <form @submit.prevent="submit" class="form-login">
            <div class="input-wrapper">
              <img src="/public/images/icons/email.svg" alt="email icon" class="input-icon">
              <input
                type="email"
                placeholder="Введите электронную почту"
                class="input-field"
              />
            </div>
            <div class="input-wrapper">
              <img src="/public/images/icons/password.svg" alt="password icon" class="input-icon">
              <input
                :type="isPasswordVisible ? 'text' : 'password'"
                placeholder="Введите пароль"
                class="input-field"
              />
              <img src="/public/images/icons/eye.svg" alt="eye icon" class="input-icon-right" @click="togglePasswordVisibility">
            </div>
            <button class="btn">Войти</button>
            <a href="#!" class="btn-link">Я не помню пароль</a>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref } from "vue";

const isPasswordVisible = ref(false);

const togglePasswordVisibility = () => {
  isPasswordVisible.value = !isPasswordVisible.value;
}
</script>