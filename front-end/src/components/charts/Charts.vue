<template>
  <mdb-container fluid>

    <!--Section: Main panel-->
    <section class="my-5">

        <!--Card-->
        <mdb-card cascade narrow>

            <!--Section: Chart-->
            <section>

                <!--Grid row-->
                <mdb-row>

                    <!--Grid column-->
                    <mdb-col xl="5" lg="12" class="mr-0">

                        <!--Card image-->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <h2 class="h2-responsive mb-0">Sales</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <mdb-card-body cascade class="pb-0">

                            <!--Panel data-->
                            <mdb-card-body class="row pt-3">

                                <!--First column-->
                                <mdb-col md="6">

                                    <!--Date select-->
                                    <p class="lead"><span class="badge info-color p-2">Data range</span></p>

                                    <mdb-select>
                                        <option value="" disabled selected>Choose time period</option>
                                        <option value="1">Today</option>
                                        <option value="2">Yesterday</option>
                                        <option value="3">Last 7 days</option>
                                        <option value="3">Last 30 days</option>
                                        <option value="3">Last week</option>
                                        <option value="3">Last month</option>
                                    </mdb-select>

                                    <!--Date pickers-->
                                    <p class="lead mt-5"><span class="badge info-color p-2">Custom date</span></p>
                                    <br>

                                    <mdb-date-picker :date="startTimeFrom" :option="optionFrom"></mdb-date-picker>
                                    <mdb-date-picker :date="startTimeTo" :option="optionTo"></mdb-date-picker>

                                </mdb-col>
                                <!--/First column-->

                                <!--Second column-->
                                <mdb-col md="6" class="text-center mb-2">

                                    <!--Summary-->
                                    <p>Total sales: <strong>2000$</strong>
                                        <mdb-tooltip trigger="hover" :options="{placement: 'top'}">
                                            <div class="tooltip">Total sales in the given period</div>
                                            <mdb-btn slot="reference" color="info" size="sm" class="p-2"><mdb-icon icon="question"/></mdb-btn>
                                        </mdb-tooltip>
                                    </p>

                                    <p>Average sales: <strong>100$</strong>
                                        <mdb-tooltip trigger="hover" :options="{placement: 'top'}">
                                            <div class="tooltip">Average daily sales in the given period</div>
                                            <mdb-btn slot="reference" color="info" size="sm" class="p-2"><mdb-icon icon="question"/></mdb-btn>
                                        </mdb-tooltip>
                                    </p>

                                    <!--Change chart-->
                                    <mdb-simple-chart class="my-4" style="width: auto; height: auto" :value="76" color="green">{{76}}%</mdb-simple-chart>
                                    <h5 class="d-inline">
                                        <mdb-badge color="green" class="p-2">Change <mdb-icon icon="arrow-circle-up" class="ml-1" /></mdb-badge>
                                    </h5>
                                    <span>
                                        <mdb-tooltip trigger="hover" :options="{placement: 'top'}">
                                            <div class="tooltip">Percentage change compared to the same period in the past</div>
                                            <mdb-btn slot="reference" color="info" size="sm" class="p-2"><mdb-icon icon="question"/></mdb-btn>
                                        </mdb-tooltip>
                                    </span>
                                </mdb-col>
                                <!--/Second column-->

                            </mdb-card-body>
                            <!--/Panel data-->

                        </mdb-card-body>
                        <!--/.Card content-->

                    </mdb-col>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-7 col-lg-12 mb-4">

                        <!--Card image-->
                        <mdb-view cascade class="indigo gradient-card-header">

                            <!-- Chart -->
                            <mdb-line-chart :data="lineChartData" :options="lineChartOptions" :height="300"></mdb-line-chart>

                        </mdb-view>
                        <!--/Card image-->

                    </div>
                    <!--Grid column-->

                </mdb-row>
                <!--Grid row-->

            </section>
            <!--Section: Chart-->

        </mdb-card>

    </section>

    <section>

      <mdb-row>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Line Chart</h5></mdb-view>
            <mdb-card-body>
              <mdb-line-chart :data="lineChartData2" :options="lineChartOptions2" :height="300"></mdb-line-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Radar Chart</h5></mdb-view>
            <mdb-card-body>
              <mdb-radar-chart :data="radarChartData" :options="radarChartOptions" :height="300"></mdb-radar-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Bar Chart</h5></mdb-view>
            <mdb-card-body>
              <mdb-bar-chart :data="barChartData" :options="barChartOptions" :height="300"></mdb-bar-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Polar Chart</h5></mdb-view>
            <mdb-card-body>
              <mdb-polar-chart :data="polarChartData" :options="polarChartOptions" :height="300"></mdb-polar-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Pie Chart</h5></mdb-view>
            <mdb-card-body>
              <mdb-pie-chart :data="pieChartData" :options="pieChartOptions" :height="300"></mdb-pie-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Doughnut Chart</h5></mdb-view>
            <mdb-card-body>
              <mdb-doughnut-chart :data="pieChartData" :options="pieChartOptions" :height="300"></mdb-doughnut-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Minimalist Chart</h5></mdb-view>
            <mdb-card-body class="text-center">
              <mdb-simple-chart style="width: auto; height: auto" :value="56" color="#4CAF50">
                56%
              </mdb-simple-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Minimalist Chart</h5></mdb-view>
            <mdb-card-body class="text-center">
              <mdb-simple-chart style="width: auto; height: auto" :value="76" color="red">
                76%
              </mdb-simple-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
        <mdb-col md="6" lg="4" class="mb-4">
          <mdb-card cascade narrow>
            <mdb-view cascade class="gradient-card-header blue"><h5 class="mb-0">Minimalist Chart</h5></mdb-view>
            <mdb-card-body class="text-center">
              <mdb-simple-chart style="width: auto; height: auto" :value="100" color="grey">
                100%
              </mdb-simple-chart>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
      </mdb-row>

    </section>

    <!--Section: Docs link-->
    <section class="pb-4 pt-5">

        <!--Panel-->
        <div class="card text-center">
            <h3 class="card-header primary-color white-text">Full documentation</h3>
            <div class="card-body">
                <p class="card-text">Read the full documentation for these components.</p>
                <a href="https://mdbootstrap.com/vue/advanced/charts/" target="_blank" class="btn btn-primary">Learn more</a>
            </div>
        </div>
        <!--/.Panel-->

    </section>
    <!--Section: Docs link-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardBody, mdbCardText, mdbSelect, mdbBtn, mdbDatePicker, mdbTooltip, mdbSimpleChart, mdbIcon, mdbBadge, mdbView, mdbLineChart, mdbCardHeader, mdbListGroup, mdbListGroupItem, mdbRadarChart, mdbBarChart, mdbPolarChart, mdbPieChart, mdbDoughnutChart } from 'mdbvue'

export default {
  name: 'Charts',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbCard,
    mdbCardBody,
    mdbCardText,
    mdbSelect,
    mdbBtn,
    mdbDatePicker,
    mdbTooltip,
    mdbSimpleChart,
    mdbIcon,
    mdbBadge,
    mdbView,
    mdbLineChart,
    mdbCardHeader,
    mdbListGroup,
    mdbListGroupItem,
    mdbRadarChart,
    mdbBarChart,
    mdbPolarChart,
    mdbPieChart,
    mdbDoughnutChart
  },
  data () {
    return {
      startTimeFrom: {
        time: ''
      },
      startTimeTo: {
        time: ''
      },
      optionFrom: {
        type: 'day',
        placeholder: 'From',
        week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
        month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        format: 'YYYY-MM-DD',
        inputStyle: {
          'display': 'inline-block',
          'padding': '6px',
          'line-height': '22px',
          'font-size': '16px',
          'border': 'none',
          'border-bottom': '1px solid #ced4da',
          'color': '#5F5F5F',
          'width': '100%'
        },
        color: {
          header: 'teal',
          headerText: 'white',
          checkedDay: 'teal'
        },
        buttons: {
          ok: 'Ok',
          cancel: 'Cancel'
        }
      },
      optionTo: {
        type: 'day',
        placeholder: 'To',
        week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
        month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        format: 'YYYY-MM-DD',
        inputStyle: {
          'display': 'inline-block',
          'padding': '6px',
          'line-height': '22px',
          'font-size': '16px',
          'border': 'none',
          'border-bottom': '1px solid #ced4da',
          'color': '#5F5F5F',
          'width': '100%'
        },
        color: {
          header: 'teal',
          headerText: 'white',
          checkedDay: 'teal'
        },
        buttons: {
          ok: 'Ok',
          cancel: 'Cancel'
        }
      },
      lineChartData: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'My First dataset',
            backgroundColor: 'rgba(255,255,255,0.4)',
            borderColor: '#fff',
            pointBackgroundColor: 'transparent',
            borderWidth: 2,
            pointBorderColor: '#fff',
            pointBorderWidth: 1,
            data: [30, 41, 23, 34, 43, 56, 70]
          }
        ]
      },
      lineChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(255, 255, 255, 0.2)'
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(255, 255, 255, 0.2)'
            }
          }]
        }
      },
      lineChartData2: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label: 'My First dataset',
            fillColor: 'rgba(220,220,220,0.2)',
            strokeColor: 'rgba(220,220,220,1)',
            pointColor: 'rgba(220,220,220,1)',
            pointStrokeColor: '#fff',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: 'My Second dataset',
            fillColor: 'rgba(151,187,205,0.2)',
            strokeColor: 'rgba(151,187,205,1)',
            pointColor: 'rgba(151,187,205,1)',
            pointStrokeColor: '#fff',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(151,187,205,1)',
            data: [28, 48, 40, 19, 86, 27, 90]
          }
        ]
      },
      lineChartOptions2: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          xAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            },
            ticks: {
              fontColor: 'black'
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            },
            ticks: {
              fontColor: 'black'
            }
          }]
        },
        legend: {
          labels: {
            fontColor: 'black'
          }
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
          },
          {
            label: 'My Second dataset',
            fillColor: 'rgba(151,187,205,0.2)',
            strokeColor: 'rgba(151,187,205,1)',
            pointColor: 'rgba(151,187,205,1)',
            pointStrokeColor: '#fff',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(151,187,205,1)',
            data: [28, 48, 40, 19, 96, 27, 100]
          }
        ]
      },
      radarChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          labels: {
            fontColor: 'black'
          }
        }
      },
      barChartData: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
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
            },
            ticks: {
              fontColor: 'black'
            }
          }],
          yAxes: [{
            gridLines: {
              display: true,
              color: 'rgba(0, 0, 0, 0.1)'
            },
            ticks: {
              fontColor: 'black'
            }
          }]
        },
        legend: {
          labels: {
            fontColor: 'black'
          }
        }
      },
      polarChartData: {
        labels: ['Red', 'Green', 'Yellow', 'Grey', 'Dark Grey'],
        datasets: [
          {
            data: [300, 50, 100, 40, 120],
            backgroundColor: ['rgba(247, 70, 74, 0.3)', 'rgba(70, 191, 189, 0.3)', 'rgba(253, 180, 92, 0.3)', 'rgba(148, 159, 177, 0.3)', 'rgba(77, 83, 96, 0.3)'],
            hoverBackgroundColor: ['rgba(247, 70, 74, 0.4)', 'rgba(70, 191, 189, 0.4)', 'rgba(253, 180, 92, 0.4)', 'rgba(148, 159, 177, 0.4)', 'rgba(77, 83, 96, 0.4)']
          }
        ]
      },
      polarChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          labels: {
            fontColor: 'black'
          }
        }
      },
      pieChartData: {
        labels: ['Red', 'Green', 'Yellow', 'Grey', 'Dark Grey'],
        datasets: [
          {
            data: [300, 50, 100, 40, 120],
            backgroundColor: ['#F7464A', '#46BFBD', '#FDB45C', '#949FB1', '#4D5360'],
            hoverBackgroundColor: ['#FF5A5E', '#5AD3D1', '#FFC870', '#A8B3C5', '#616774']
          }
        ]
      },
      pieChartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          labels: {
            fontColor: 'black'
          }
        }
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
