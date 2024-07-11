<template>
	<div class="date-birth">
		<label for="dob-day" class="date-birth__label">Дата рождения</label>
		<div class="date-birth__content">
			<select id="dob-day" v-model="day" class="date-birth__select">
				<option value="" disabled>День</option>
				<option v-for="d in 31" :key="d" :value="d">{{ d }}</option>
			</select>
			<select v-model="month" class="date-birth__select">
				<option value="" disabled>Месяц</option>
				<option v-for="(month, index) in months" :key="index" :value="index + 1">{{ month }}</option>
			</select>
			<select v-model="year" class="date-birth__select">
				<option value="" disabled>Год</option>
				<option v-for="y in years" :key="y" :value="y">{{ y }}</option>
			</select>
		</div>
	</div>
</template>

<script setup>
import { ref, watch, defineEmits } from 'vue';

const emit = defineEmits(['update:dob']);

const day = ref('');
const month = ref('');
const year = ref('');

const months = [
  'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
  'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
];

const currentYear = new Date().getFullYear();
const years = Array.from({ length: 70 }, (v, k) => currentYear - 18 - k);

watch([day, month, year], ([newDay, newMonth, newYear]) => {
  if (newDay && newMonth && newYear) {
		const dateOfBirth = new Date(newYear, newMonth - 1, newDay);
    emit('update:dob', dateOfBirth);
  }
});
</script>