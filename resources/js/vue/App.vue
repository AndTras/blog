<template>
    <transition name="fade" mode="out-in">
        <router-view class="view"></router-view>
    </transition>
</template>

<script>
export default {
  name: "app",
  data () {
    return {

    }
  }
}
</script>