<template>
  <GuestLayout>
    <Head title="Регистрация" />

    <div class="register">
			<div class="container">
        <div class="register__wrapper">
          <h1 class="title-2">Создай новый аккаунт</h1>
          <p class="register__text">
            Присоединяйся к сообществу из 518 млн человек!
          </p>
          <form @submit.prevent="submit" class="form form-register">
						<div class="input-wrapper" :class="{ 'input-error': form.errors.name }">
              <img src="/public/images/icons/user.svg" alt="user icon" class="input-icon">
              <TextInput
                id="name"
                type="text"
                v-model="form.name"
                placeholder="Ваше имя"
                required
                autocomplete="name"
              />
            </div>
						<InputError :message="form.errors.name" />
						<DateOfBirth @update:dob="updateDateOfBirth"/>
						<Gender @update:gender="updateGender"/>
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
            <button class="btn btn-main" type="submit" :class="{ 'btn--disabled': form.processing }" :disabled="form.processing">Создать аккаунт</button>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>

</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import DateOfBirth from '@/Components/SelectDateBirth.vue';
import Gender from '@/Components/SelectGender.vue';
import { Head, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const isPasswordVisible = ref(false);

const form = useForm({
	name: '',
  email: '',
  password: '',
	birth_date: '',
	gender: '',
})

const submit = () => {
  form.post(route('register'), {
      onFinish: () => form.reset('password', 'password_confirmation'),
  });
};

const togglePasswordVisibility = () => {
  isPasswordVisible.value = !isPasswordVisible.value;
}

const updateDateOfBirth = (dob) => {
	form.birth_date = dob;
	console.log(`Дата рождения в компоненте формы: ${form.birth_date}`);
}

const updateGender = (gender) => {
	form.gender = gender === 'male' ? 1 : 2;
	console.log(`Пол в компоненте формы: ${form.gender}`);
}

</script>