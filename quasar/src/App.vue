<template>
  <div 
    id="q-app"
    class="app-container"
  >
    <router-view />
  </div>
</template>

<script >
export default {
  name: 'App'
}
</script>

<style lang="scss" scoped>
.app-container {
  font-family: 'Nunito', sans-serif;
  font-size: 10.5px;
}
</style>
