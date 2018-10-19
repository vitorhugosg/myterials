<template>
  <ul :is="tag" :class="className">
    <slot></slot>
  </ul>
</template>

<script>
import classNames from 'classnames';

const Tab = {
  props: {
    tag: {
      type: String,
      default: "ul"
    },
    color: {
      type: String
    },
    pills: {
      type: Boolean
    },
    tabs: {
      type: Boolean
    },
    vertical: {
      type: Boolean
    },
    justify: {
      type: Boolean
    },
    classes: {
      type: String
    },
    header: {
      type: Boolean
    }
  },
  computed: {
    className() {
      return classNames(
        'nav',
        this.justify && 'nav-justified',
        this.tabs && 'nav-tabs',
        this.pills && 'md-pills',
        this.vertical ? 'flex-column' : '',
        this.pills && this.color ? 'pills-'+this.color : !this.pills && this.color ? 'tabs-'+this.color  : false,
        this.classes ? this.classes : false,
        this.header && 'nav-pills card-header-pills'
      );
    }
  }
};

export default Tab;
export { Tab as mdbTab };
</script>

<style scoped>
</style>
