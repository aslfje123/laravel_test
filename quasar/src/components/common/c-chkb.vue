<template>
  <div class="q-mb-md">
    <q-checkbox 
      size="xs" 
      :label="label" 
      dense 
      :value="value"
      @input="$emit('emitCheckbox', !value)"
      class="text-bold"
    />
  </div>
</template>

<script>
export default {
  name: 'BasicCheckbox',
  props: {
    label: {
      type: String
    },
    value: {
      type: Boolean
    }
  }
}
</script>