<template>
  <div id="status-message">
    <p>{{ statusMessage }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      statusMessage: "Default color is red",
    };
  },
};
</script>
 
<style>
#status-message {
  margin-top: 100px;
  text-align: center;
  font-size: 30px;
  background-color: red;
}
</style>