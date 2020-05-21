<template>
  <div 
    class="
      input-container
      full-width
      q-mb-md
    ">
    <p 
      class="
        text-bold
        text-grey-9
        q-mb-xs
      "
    >
      <slot />
    </p>
    <q-input 
      @input="$emit('emitInput', $event)"
      :value="value"
      input-class="input-container__input" 
      borderless 
      bg-color="grey-2" 
      :type="type" 
      :placeholder="placeholder" 
      dense>
      <template 
        v-if="type === 'password'" 
        v-slot:append>
        <a 
          href="/" 
          class="
            input__forgot-password 
            q-mr-md 
            text-primary
          "
        >
          {{ passwordText }}
        </a>
      </template>
    </q-input>
  </div>
</template>

<script>
export default {
  name: 'BasicInput',
  props: {
    type: {
      type: String,
      default: 'password'
    },
    placeholder: {
      type: String
    },
    passwordText: {
      type: String,
      default: 'Forgot password?'
    },
    value: {
      type: String
    }
  }
}
</script>

<style scoped lang="scss">
.input__forgot-password {
  font-size: 10.5px;
}
</style>