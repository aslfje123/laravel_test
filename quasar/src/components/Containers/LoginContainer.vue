<template>
  <div class="
      flex column 
      justify-center 
      items-center
    ">
    <p class="
        text-h5 
        text-grey-9 
        text-bold
      ">
      Login
    </p>
    <q-form
      ref="loginForm"
      class="full-width"
      @submit="onSubmit"
    >
      <c-inp
        @emitInput="handleUsername($event)"
        :value="userInfo.Username"
        :type="'Username'"
        :placeholder="'Your Username'"
      >
        Username: *
      </c-inp>
      <c-inp
        @emitInput="handlePassword($event)"
        :value="userInfo.password"
        :type="'password'"
        :placeholder="'* * * * * * * *'"
      >
        Password: *
      </c-inp>
      <c-chkb
        @emitCheckbox="handleCheckbox($event)"
        :label="'Stay signed in'"
        :value="userInfo.checkbox"
        class="
          self-start
        "
      />
      <c-btn
        type="submit"
        :fullWidth="true"
        style="height: 30px;"
        buttonColor="primary"
      >
        Sign In
      </c-btn>
    </q-form>
    <div class="
        row
        q-mb-md
      ">
      <p class="
          text-bold
        ">
        Don't have an account yet?
      </p>
      <a
        href="#"
        class="
          text-black 
          text-bold 
          q-ml-xs"
      >
        Register!
      </a>
    </div>
    <socials-container />
  </div>
</template>

<script>
import cInp from '../common/c-inp'
import cBtn from '../common/c-btn'
import cChkb from '../common/c-chkb'
import SocialsContainer from './SocialsContainer'

export default {
  name: 'LoginContainer',
  components: {
    cInp,
    cBtn,
    cChkb,
    SocialsContainer
  },
  data () {
    return {
      userInfo: {
        email: '',
        password: '',
        checkbox: false
      }
    }
  },
  created () {
    this.$q.notify.setDefaults({
      position: 'top',
      color: 'primary',
    })
  },
  methods: {
    handleUsername (e) {
      this.userInfo.Username = e
    },
    handlePassword (e) {
      this.userInfo.password = e
    },
    handleCheckbox (e) {
      this.userInfo.checkbox = e
    },
    onSubmit (evt) {
      this.$refs.loginForm.validate().then(success => {
        if (success &&
          this.userInfo.Username != '' &&
          this.userInfo.Username != '' &&
          this.userInfo.Username != '') {
          this.$q.notify(
            'Submitted Username: ' + this.userInfo.Username +
            ' Submitted password: ' + this.userInfo.password +
            ' Submitted checkbox: ' + this.userInfo.checkbox
          )
          this.userInfo.Username = ''
          this.userInfo.password = ''
          this.userInfo.checkbox = false
        }
      })
      evt.target.submit()
    }
  }
}
</script>