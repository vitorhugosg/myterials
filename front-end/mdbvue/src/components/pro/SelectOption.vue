<template>
  <li :data-multiple="multiple" :class="className">
    <input v-if="multiple" :data-multiple="multiple" type="checkbox" :class="['form-check-input', {'filled-in': filled}]"/>
    <label v-if="multiple" :data-multiple="multiple" :data-value="value" class="form-check-label"></label>
    <img v-if="icon" :src="icon" :data-value="value" :alt="alt" class="rounded-circle" />
    <span :data-multiple="multiple" class="filtrable" :data-value="value">
      <slot></slot>
    </span>
  </li>
</template>

<script>
import classNames from 'classnames';

const SelectOption = {
  name: 'SelectOption',
  props: {
    multiple: {
      type: Boolean,
      default: false
    },
    disabled: {
      type: Boolean,
      default: false
    },
    value: {
      type: [String, Number]
    },
    icon: {
      type: String
    },
    alt: {
      type: String,
      default: "Option icon"
    },
    filled: {
      type: Boolean,
      default: false
    },
    active: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    className() {
      return classNames(
        this.disabled && 'disabled',
        this.active && 'active'
      );
    }
  }
};

export default SelectOption;
export { SelectOption as mdbSelectOption };
</script>

<style scoped>
label {
  float: left;
  margin-left: 10px;
  margin-top: 6px;
  margin-bottom: 0;
}
</style>
