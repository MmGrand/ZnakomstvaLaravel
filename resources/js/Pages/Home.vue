<template>
  <AuthenticatedLayout>
    <Head title="Главная" />
    <div class="main-page">
      <div class="container">
        <div class="main-page__wrapper">
          <section>
            <h2 class="main-page__title">Топ для знакомств</h2>
          </section>
          <section>
            <h2 class="main-page__title">Ищу парня</h2>
          </section>
          <section>
            <h2 class="main-page__title">Мужчины</h2>
          </section>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>

</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";

const testUsers = [
  {
    id: 1,
    name: "Виктор",
    city: "Россия",
    avatar: {
      path: "https://via.placeholder.com/150"
    }
  },
  {
    id: 2,
    name: "Марина",
    city: "Россия",
    avatar: {
      path: "https://via.placeholder.com/150"
    }
  },
  {
    id: 3,
    name: "Алексей",
    city: "Россия",
    avatar: {
      path: "https://via.placeholder.com/150"
    }
  },
  {
    id: 4,
    name: "Виктория",
    city: "Россия",
    avatar: {
      path: "https://via.placeholder.com/150"
    }
  },
  {
    id: 5,
    name: "Максим",
    city: "Россия",
    avatar: {
      path: "https://via.placeholder.com/150"
    }
  }
];
</script>