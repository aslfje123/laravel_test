<template>
  <div 
    class="
      full-width 
      row 
      justify-between
    ">
    <div 
      class="
        row
        q-pr-xs
        col-12 
        col-sm-6"
    >
      <c-btn 
        class="
          col-12 
          bg-info
          text-bold
        ">
        Sign in with Facebook
      </c-btn>
    </div>
    <div 
      class="
        row
        col-12 
        col-sm-6
        q-pl-xs"
    >
      <c-btn
        class="
          col-12
          bg-red-6
          text-bold
        ">
        Sign in with Google
      </c-btn>
    </div>
  </div>
</template>

<script>
import cBtn from '../common/c-btn'

export default {
  name: 'SocialsContainer',
  components: {
    cBtn
  }
}
</script>