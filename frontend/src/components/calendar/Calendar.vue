<template>
  <mdb-container fluid>

    <v-app id="dayspan" v-cloak>
      <ds-calendar-app :calendar="calendar"></ds-calendar-app>
    </v-app>

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol } from 'mdbvue'
import { Calendar } from 'dayspan'

export default {
  name: 'Calendar',
  data: () => ({
    calendar: Calendar.months()
  }),
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    Calendar
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
#dayspan {
  font-family: Roboto, sans-serif;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
#dayspan nav {
  position: absolute;
}
#dayspan .v-navigation-drawer--fixed {
  position: absolute;
}
</style>
