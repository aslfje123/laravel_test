<template>
  <q-btn 
    :color="buttonColor" 
    :text-color="buttonTextColor"
    unelevated 
    no-caps 
    :type="type"
    :class="{'full-width': fullWidth}" 
    class="
      basic-button
      q-mb-md
    "
  >
    <slot />
  </q-btn>
</template>

<script>
export default {
  name: 'LoginInput',
  props: {
    buttonColor: {
      type: String,
      default: 'primary'
    },
    buttonTextColor: {
      type: String,
      default: 'white'
    },
    fullWidth: {
      type: Boolean,
      default: false
    },
    type: {
      type: String
    }
  }
}
</script>

<style lang="scss" scoped>
.basic-button {
  font-size: 10.5px;
}
</style>