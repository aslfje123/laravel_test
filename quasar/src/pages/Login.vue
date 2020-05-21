<template>
  <q-page 
    class="
      flex 
      flex-center
    "
  >
  <form-container />
  </q-page>
</template>

<script>
import FormContainer from '../components/FormContainer'

export default {
  name: 'PageIndex',
  components: {
    FormContainer
  }
}
</script>
