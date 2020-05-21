<template>
  <q-layout>
    <q-header 
      class="
        layout-nav 
        bg-white
      ">
      <q-toolbar>
      </q-toolbar>
    </q-header>
    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
export default {
  name: 'MainLayout'
}
</script>

<style lang="scss" scoped>
.layout-nav {
  box-shadow:
    16px 22px 17.9px rgba(0, 0, 0, 0.02),
    16px 41px 33.4px rgba(0, 0, 0, 0.01),
    16px 100px 80px rgba(0, 0, 0, 0.04)
  ;
}
</style>