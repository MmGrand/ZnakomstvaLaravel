<template>
  <div class="gender">
    <button
      :class="['gender__btn gender__btn--male', { 'selected': selectedGender === 'male' }]"
      @click="selectGender('male', $event)"
    >
    <img src="/public/images/male.png" alt="gender img">
    </button>
		<button
      :class="['gender__btn gender__btn--female', { 'selected': selectedGender === 'female' }]"
      @click="selectGender('female', $event)"
    >
    <img src="/public/images/female.png" alt="gender img">
    </button>
  </div>
</template>

<script setup>
import { ref, defineEmits } from 'vue';

const emit = defineEmits(['update:gender']);

const selectedGender = ref('');

const selectGender = (gender, event) => {
	event.preventDefault();
	selectedGender.value = gender;
  emit('update:gender', gender);
};
</script>
