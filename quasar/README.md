# Quasar App (quasar-login)

A Quasar Framework app

Made by Gábor Filip Ónodi-Pető for UXtweak.

## Install the dependencies
```bash
npm install
```

### Start the app in development mode (hot-code reloading, error reporting, etc.)
```bash
quasar dev
```


### Build the app for production
```bash
quasar build
```

## My steps

1. Make a project:
  * `quasar create quasar-login`
  * I use VS Code on a Windows machine, with some specific lintering on board, hopefully it won't make any troubles when viewing the project.

2. Deleted unnecessary items:
  - pre-defined components
  - pre-defined favicons
  - pre-defined routes
  - pre-defined layout

3. Defined the components:

  - Container components:
    - LoginContainer
    - SocialsContainer

  - Dumb components:
    - c-btn
    - c-inp
    - c-chkb

4. Added a new page, where I imported my container components.
5. Added font, and changes primary color.
6. Added some global css in app.scss, because figured out I can't deal with input other way than that.
7. Changed my mind about structure, so the FormContainer will be a wrapper container to the LoginContainer because if the developer decides, that he wants to use that space for the register and forgot the password form, than he can use the same wrapper.
8. Added my own box shadow, because Quasar ones wasnt like the one on the design.
9. Added changes to the font sizes.
10. Realised, that a lot of things can be done by only quasar classes, so went and started rewriting the classes.
11. Connected the inputs to the container components, so it is always nice and easy to work with.

# Bonus

1. Quick added notification that show that the user actually sent the document.