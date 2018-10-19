<template>
  <div :is="tag" :class="className">
    <slot></slot>
  </div>
</template>

<script>
import classNames from 'classnames';

const Accordion = {
  props: {
    tag: {
      type: String,
      default: "div"
    }
  },
  computed: {
    className() {
      return classNames(
        'accordion'
      );
    }
  }
};

export default Accordion;
export { Accordion as mdbAccordion };
</script>

<style scoped>
</style>
