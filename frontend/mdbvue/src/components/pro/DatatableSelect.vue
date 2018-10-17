<template>
  <div class="dataTables_length d-flex flex-row">
    <label>Show entries</label>
    <mdb-select @getValue="getOptionValue" :wrapperClass="'mdb-select'">
      <div :value="options[0]" selected>{{ options[0] }}</div>
      <div v-for="(option, index) in options" v-if="index !== 0" :key="option" :value="option">
        {{ option }}
      </div>
      
      <!-- przemyslec jak zrobic fora i zamienic importy na import zalezny od tego czy paczka pro jest dostepna -->
    </mdb-select>
  </div>
</template>

<script>
import mdbSelect from './Select';

const DatatableSelect = {
  name: "DatatabMaterialeSelect",
  components: {
    mdbSelect
  },
  props: {
    entries: {
      type: Number,
      default: 10
    },
    options: {
      type: Array
    }
  },
  methods: {
    getOptionValue(value) {
      this.$emit('getValue', value);
    }
  }
};

export default DatatableSelect;
</script>