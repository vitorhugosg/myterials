<template>
  <mdb-container fluid>

    <!--Section heading-->
    <div class="mb-5">
      <h4 class="text-left font-weight-bold dark-grey-text">Your business is growing</h4>
      <p class="grey-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
      <hr>
    </div>
    <!--Section: Analytical panel-->
    <section class="mb-5">
      <!--Card-->
      <div class="card card-cascade narrower">
        <!--Section: Chart-->
        <section>
          <!--Grid row-->
          <div class="row mb-4">
            <!--Grid column-->
            <div class="col-xl-5 col-md-12 mr-0">
              <!--Card image-->
              <div class="view view-cascade gradient-card-header light-blue lighten-1">
                <h4 class="h4-responsive font-weight-bold mb-0">Visitors by country</h4>
              </div>
              <!--/Card image-->
              <!--Card content-->
              <div class="card-body card-body-cascade pb-0">
                <!--Panel data-->
                <div class="card-body pt-2">
                  <table class="table no-header">
                    <tbody>
                      <tr>
                        <td><img src="../../assets/flags/us.png" class="flag mr-2"> United States</td>
                        <td>307</td>
                      </tr>
                      <tr>
                        <td><img src="../../assets/flags/in.png" class="flag mr-2"> India</td>
                        <td>504</td>
                      </tr>
                      <tr>
                        <td><img src="../../assets/flags/cn.png" class="flag mr-2"> China</td>
                        <td>613</td>
                      </tr>
                      <tr>
                        <td><img src="../../assets/flags/pl.png" class="flag mr-2"> Poland</td>
                        <td>208</td>
                      </tr>
                      <tr>
                        <td><img src="../../assets/flags/it.png" class="flag mr-2"> Italy</td>
                        <td>314</td>
                      </tr>
                    </tbody>
                  </table>
                  <mdb-btn dark-waves flat rounded class="grey lighten-3 float-right font-weight-bold dark-grey-text">View full report</mdb-btn>
                </div>
                <!--/Panel data-->
              </div>
              <!--/.Card content-->
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-xl-7 col-md-12 mb-4">
              <!--Card image-->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <!-- Chart -->
                <mdb-pie-chart :data="pieChartData" :options="pieChartOptions" :height="300"></mdb-pie-chart>
              </div>
              <!--/Card image-->
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
          <!--Second row-->
          <div class="row mb-0">
            <!--First column-->
            <div class="col-md-12">
              <!--Panel content-->
              <div class="card-body pt-0">
                <div class="table-responsive">
                  <!--Table-->
                  <table class="table table-hover">
                    <!--Table head-->
                    <thead>
                      <tr class="rgba-stylish-strong white-text">
                        <th>Campaign name</th>
                        <th>Source</th>
                        <th>Conversion rate</th>
                        <th>Invested</th>
                      </tr>
                    </thead>
                    <!--/Table head-->
                    <!--Table body-->
                    <tbody>
                      <tr class="none-top-border">
                        <td>Newsletter</td>
                        <td>Newsletter</td>
                        <td>5%</td>
                        <td>100$</td>
                      </tr>
                      <tr>
                        <td>Facebook</td>
                        <td>Facebook</td>
                        <td>5%</td>
                        <td>100$</td>
                      </tr>
                      <tr>
                        <td>Adwords</td>
                        <td>Adwords</td>
                        <td>5%</td>
                        <td>100$</td>
                      </tr>
                      <tr>
                        <td>Sponsored post</td>
                        <td>Sponsored post</td>
                        <td>5%</td>
                        <td>100$</td>
                      </tr>
                      <tr>
                        <td>Newsletter 2</td>
                        <td>Newsletter 2</td>
                        <td>5%</td>
                        <td>100$</td>
                      </tr>
                    </tbody>
                    <!--/Table body-->
                  </table>
                  <!--/Table-->
                </div>
              </div>
              <!--/.Panel content-->
            </div>
            <!--/First column-->
          </div>
          <!--/Second row-->
        </section>
        <!--Section: Chart-->
      </div>
      <!--/.Card-->
    </section>
    <!--Section: Analytical panel-->

    <!--Section: Cascading panels-->
    <section class="mb-5">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
          <!--Card-->
          <div class="card card-cascade narrower">
            <!--Card image-->
            <div class="view view-cascade gradient-card-header mdb-color lighten-4">
              <mdb-pie-chart :data="pieChartData2" :options="pieChartOptions" :height="150"></mdb-pie-chart>
            </div>
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body card-body-cascade text-center">
              <div class="list-group list-panel">
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio <i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac facilisi<i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus <i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet<i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros <i class="fa fa-wrench ml-auto"></i></a>
              </div>
            </div>
            <!--/.Card content-->
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
          <!--Card-->
          <div class="card card-cascade narrower">
            <!--Card image-->
            <div class="view view-cascade gradient-card-header primary-color">
              <mdb-bar-chart :data="barChartData" :options="barChartOptions" :height="150"></mdb-bar-chart>
            </div>
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body card-body-cascade text-center">
              <div class="list-group list-panel">
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio <i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac facilisi<i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus <i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet<i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros <i class="fa fa-wrench ml-auto"></i></a>
              </div>
            </div>
            <!--/.Card content-->
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">
          <!--Card-->
          <div class="card card-cascade narrower">
            <!--Card image-->
            <div class="view view-cascade gradient-card-header red accent-2">
              <mdb-radar-chart :data="radarChartData" :options="radarChartOptions" :height="150"></mdb-radar-chart>
            </div>
            <!--/Card image-->
            <!--Card content-->
            <div class="card-body card-body-cascade text-center">
              <div class="list-group list-panel">
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio <i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac facilisi<i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus <i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet<i class="fa fa-wrench ml-auto"></i></a>
                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros <i class="fa fa-wrench ml-auto"></i></a>
              </div>
            </div>
            <!--/.Card content-->
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!--Section: Cascading panels-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbView, mdbCardBody, mdbBadge, mdbBtn, mdbPieChart, mdbBarChart, mdbRadarChart } from 'mdbvue'

export default {
  name: 'Dashboardv4',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbCard,
    mdbView,
    mdbCardBody,
    mdbBadge,
    mdbBtn,
    mdbPieChart,
    mdbBarChart,
    mdbRadarChart
  },
  data () {
    return {
      pieChartData: {
        labels: ['United States', 'India', 'China', 'Poland', 'Italy'],
        datasets: [
          {
            data: [307, 504, 613, 208, 314],
            backgroundColor: ['#F7464A', '#46BFBD', '#FDB45C', '#949FB1', '#4D5360'],
            hoverBackgroundColor: ['#FF5A5E', '#5AD3D1', '#FFC870', '#A8B3C5', '#616774']
          }
        ]
      },
      pieChartData2: {
        labels: ['March', 'April', 'May', 'June'],
        datasets: [
          {
            data: [307, 123, 613, 208],
            backgroundColor: ['#F7464A', '#46BFBD', '#FDB45C', '#949FB1'],
            hoverBackgroundColor: ['#FF5A5E', '#5AD3D1', '#FFC870', '#A8B3C5']
          }
        ]
      },
      pieChartOptions: {
        responsive: true,
        maintainAspectRatio: false
      },
      barChartData: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 12, 4],
          backgroundColor: 'rgba(255, 255, 255, 0.3)',
          borderColor: '#fff',
          borderWidth: 1
        }]
      },
      barChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            barPercentage: 1,
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            },
            ticks: {
              beginAtZero: true,
              min: 0
            }
          }]
        }
      },
      radarChartData: {
        labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
        datasets: [
          {
            label: 'My First dataset',
            fillColor: 'rgba(220,220,220,0.2)',
            strokeColor: 'rgba(220,220,220,1)',
            pointColor: 'rgba(220,220,220,1)',
            pointStrokeColor: '#fff',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [65, 59, 90, 81, 56, 55, 40]
          }
        ]
      },
      radarChartOptions: {
        responsive: true,
        maintainAspectRatio: false
      }
    }
  }
}
</script>

<!-- Add 'scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
