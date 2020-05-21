<template>
  <div 
    class="
      full-width
      form-container
      shadow-24
    ">
    <component :is="currectComponent" />
  </div>
</template>

<script>
import LoginContainer from '../components/containers/LoginContainer'
import SocialsContainer from '../components/containers/SocialsContainer'

export default {
  name: 'FormContainer',
  components: {
    LoginContainer,
    SocialsContainer
  },
  computed: {
    currectComponent() {
      return LoginContainer
    }
  }
}
</script>

<style lang="scss" scoped>
.form-container {
  max-width: 400px;
  padding: 2rem 2rem 1rem 2rem;
  box-shadow: none;
}

@media screen and (min-width: 600px) {
  .form-container {
    box-shadow:
      16px 22px 17.9px rgba(0, 0, 0, 0.01),
      16px 41px 33.4px rgba(0, 0, 0, 0.015),
      16px 100px 80px rgba(0, 0, 0, 0.04)
    ;
    border-radius: 10px;
  } 
}
</style>