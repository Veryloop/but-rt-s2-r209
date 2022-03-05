<!-- global-top.vue -->
<template>
  <footer v-if="$slidev.nav.currentPage !== 1">
    <div class="absolute bottom-0 left-0 right-0 p-1" style="font-size: 10px;">
      <a href="https://github.com/MaximeChartier">Maxime Chartier - 2022</a>
    </div>
    <div class="absolute bottom-0 right-0 p-2"> {{ $slidev.nav.currentPage }} / {{ $slidev.nav.total }}</div>
  </footer>
</template>