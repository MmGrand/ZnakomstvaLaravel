<template>
	<input
  type="email"
  v-model="model"
  placeholder="Введите электронную почту"
  class="input-field"
	ref="input"
	/>
</template>

<script setup>
import { onMounted, ref } from "vue";

const model = defineModel({
	type: String,
	required: true
});

const input = ref(null);

onMounted(() => {
	if(input.value.hasAttribute('autofocus')) {
		input.value.focus();
	}
});

defineExpose({ focus: () => input.value.focus() });
</script>