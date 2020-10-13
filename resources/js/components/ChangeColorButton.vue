<template>
  <div id="button-change-color">
    <v-btn
      dark
      @click="changeColor = !changeColor"
      :style="{
        backgroundColor: changeColor ? 'red' : 'gray',
        color: changeColor ? 'white' : '#fff333',
      }"
    >
      Change my color!
    </v-btn>
  </div>
</template>