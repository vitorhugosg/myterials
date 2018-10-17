<template>
  <div class="dataTables_filter md-form">
    <input v-model="search" type="search" class="form-control" placeholder="Search" />
  </div>
</template>

<script>
const DatatableSearch = {
  name: 'DatatableSearch',
  data() {
    return {
      search: ''
    };
  },
  watch: {
    search() {
      this.$emit('getValue', this.search);
    }
  }
};

export default DatatableSearch;
</script>