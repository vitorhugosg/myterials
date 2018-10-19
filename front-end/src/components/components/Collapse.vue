<template>
  <mdb-container fluid>

      <h2 class="mt-lg-5 mb-5 pb-4 font-weight-bold"><strong>Accordion</strong></h2>

      <mdb-accordion>
        <mdb-card>
          <mdb-card-header>
            <a href="#" @click.prevent="active === 1 ? active = 0 : active = 1">
              <h5 class="mb-0">
                Collapsible Group Item #1 <mdb-icon icon="angle-down" :class="active === 1 ? 'rotate-icon' : ''"/>
              </h5>
            </a>
          </mdb-card-header>
          <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
            <mdb-card-body v-if="active === 1" class="collapse-item">
              <p class="p-2">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </p>
            </mdb-card-body>
          </transition>
        </mdb-card>
        <mdb-card>
          <mdb-card-header>
            <a href="#" @click.prevent="active === 2 ? active = 0 : active = 2">
              <h5 class="mb-0">
                Collapsible Group Item #2 <mdb-icon icon="angle-down" :class="active === 2 ? 'rotate-icon' : ''"/>
              </h5>
            </a>
          </mdb-card-header>
          <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
            <mdb-card-body v-if="active === 2" class="collapse-item">
              <p class="p-2">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </p>
            </mdb-card-body>
          </transition>
        </mdb-card>
        <mdb-card>
          <mdb-card-header>
            <a href="#" @click.prevent="active === 3 ? active = 0 : active = 3">
              <h5 class="mb-0">
                Collapsible Group Item #3 <mdb-icon icon="angle-down" :class="active === 3 ? 'rotate-icon' : ''"/>
              </h5>
            </a>
          </mdb-card-header>
          <transition @before-enter="beforeEnter" @enter="enter" @before-leave="beforeLeave">
            <mdb-card-body v-if="active === 3" class="collapse-item">
              <p class="p-2">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </p>
            </mdb-card-body>
          </transition>
        </mdb-card>
      </mdb-accordion>

      <!--Section: Docs link-->
      <section class="pb-4 pt-5 mt-5">

          <!--Panel-->
          <div class="card text-center">
              <h3 class="card-header primary-color white-text">Full documentation</h3>
              <div class="card-body">
                  <p class="card-text">Read the full documentation for these components.</p>
                  <a href="https://mdbootstrap.com/vue/advanced/collapse/" target="_blank" class="btn btn-primary">Learn more</a>
              </div>
          </div>
          <!--/.Panel-->

      </section>
      <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbAccordion, mdbCard, mdbCardBody, mdbCardHeader, mdbIcon } from 'mdbvue'

export default {
  name: 'Collapse',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbAccordion,
    mdbCard,
    mdbCardBody,
    mdbCardHeader,
    mdbIcon
  },
  data () {
    return {
      active: 0,
      elHeight: 0
    }
  },
  methods: {
    beforeEnter (el) {
      this.elHeight = el.scrollHeight
    },
    enter (el) {
      el.style.height = this.elHeight + 'px'
    },
    beforeLeave (el) {
      el.style.height = 0
    }
  }
}
</script>

<style scoped>
.collapse-item {
  overflow: hidden;
  height: 0;
  padding: 0;
  transition: height .5s;
}
</style>
