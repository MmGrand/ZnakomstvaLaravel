<template>
	<transition name="fade" class="popup-forget">
		<div v-if="isOpen" class="popup-forget__overlay" @click="close">
			<div class="popup-forget__content" @click.stop>
				<h2 class="popup-forget__title">
					Я не помню пароль
				</h2>
				<p class="popup-forget__text">Введи свой email и мы вышлем тебе инструкции по изменению пароля</p>
				<form @submit.prevent="submitEmail" class="form-login">
					<div class="input-wrapper" :class="{ 'input-error': form.errors.email }">
              <img src="/public/images/icons/email.svg" alt="email icon" class="input-icon">
              <TextInput
                id="email_forget"
                type="email"
                v-model="form.email"
                placeholder="Введите электронную почту"
                required
                autofocus
                autocomplete="username"
              />
            </div>
            <InputError :message="form.errors.email" />
						<button class="btn btn-main" type="submit" :class="{ 'btn--disabled': form.processing }" :disabled="form.processing">Запросить новый пароль</button>
				</form>
			</div>
		</div>
	</transition>
</template>

<script setup>
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
  isOpen: Boolean,
});

const emit = defineEmits(['close']);

const form = useForm({
  email: ''
})

const close = () => {
  emit('close');
};

const submitEmail = () => {
	close();
};

</script>