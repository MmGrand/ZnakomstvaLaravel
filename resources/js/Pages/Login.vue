<template>
  <GuestLayout>
    <Head title="Вход" />

    <div class="login">
      <div class="container">
        <div class="login__wrapper">
          <h1 class="title-1">Знакомства без преград</h1>
          <p class="login__text">
            Для современного мира сплочённость команды профессионалов однозначно
            фиксирует необходимость системы обучения кадров, соответствующей
            насущным потребностям.
          </p>
          <form @submit.prevent="submit" class="form form-login">
            <div class="input-wrapper" :class="{ 'input-error': form.errors.email }">
              <img src="/public/images/icons/email.svg" alt="email icon" class="input-icon">
              <TextInput
                id="email"
                type="email"
                v-model="form.email"
                placeholder="Введите электронную почту"
                required
                autocomplete="username"
              />
            </div>
            <InputError :message="form.errors.email" />
            <div class="input-wrapper" :class="{ 'input-error': form.errors.password }">
              <img src="/public/images/icons/password.svg" alt="password icon" class="input-icon">
              <TextInput
                id="password"
                :type="isPasswordVisible ? 'text' : 'password'"
                v-model="form.password"
                placeholder="Введите пароль"
                required
                autocomplete="current-password"
              />
              <img src="/public/images/icons/eye.svg" alt="eye icon" class="input-icon-right" @click="togglePasswordVisibility">
            </div>
            <InputError :message="form.errors.password" />
            <button class="btn btn-main" type="submit" :class="{ 'btn--disabled': form.processing }" :disabled="form.processing">Войти</button>
            <a href="#!" class="btn btn-link" @click="openModal">Я не помню пароль</a>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>

  <ForgetPopup :isOpen="isModalOpen" @close="closeModal"/>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import ForgetPopup from "../Components/Popups/ForgetPopup.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const isPasswordVisible = ref(false);
const isModalOpen = ref(false);

const form = useForm({
  email: '',
  password: ''
})

const submit = () => {
  form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

const openModal = () => {
  isModalOpen.value = true;
}

const closeModal = () => {
  isModalOpen.value = false;
}

const togglePasswordVisibility = () => {
  isPasswordVisible.value = !isPasswordVisible.value;
}
</script>