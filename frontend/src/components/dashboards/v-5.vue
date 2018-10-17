<template>
  <mdb-container fluid>

    <!--Heading & Date-->
    <div class="row mb-5">

        <!--First column-->
        <div class="col-md-6 panel-title mb-5 mt-3">
            <h5><span class="px-4 py-3 white-text z-depth-1-half blue lighten-1" style="
                border-radius: 5px;">Search analitycs</span></h5>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-6">

            <div class="card">
                <div class="card-body pb-1">

                    <div class="row">

                        <div class="col-lg-4 col-sm-12">
                          <!--Date select-->
                          <mdb-select class="colorful-select dropdown-primary">
                            <option value="3" selected>Last 30 days</option>
                            <option value="1">Today</option>
                            <option value="2">Yesterday</option>
                            <option value="3">Last 7 days</option>
                            <option value="3">Previous week</option>
                            <option value="3">Previous month</option>
                            <option value="3">Custom date</option>
                          </mdb-select>
                            <!--/Date select-->
                        </div>
                        <div class="col-lg-4 col-sm-6 p-2">
                          <mdb-date-picker :date="startTimeFrom" :option="optionFrom"></mdb-date-picker>
                        </div>
                        <div class="col-lg-4 col-sm-6 p-2">
                          <mdb-date-picker :date="startTimeTo" :option="optionTo"></mdb-date-picker>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>
    <!--Heading & Date-->

    <!--Section: Main chart-->
    <section>

        <!--Card-->
        <div class="card card-cascade narrower">

            <!--Card image-->
            <div class="view view-cascade gradient-card-header blue-gradient">
              <mdb-line-chart :data="lineChartData" :options="lineChartOptions" :height="400"></mdb-line-chart>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body card-body-cascade blue-panel text-center">

                <!--Second row-->
                <div class="row mx-3 mb-0 text-center">
                    <div class="col mt-1 mb-2">

                        <div class="btn-group mt-1">
                            <label class="btn btn-info btn-md active">
                                <input type="checkbox" name="options" id="option1" autocomplete="off" checked>Clicks <strong>1000</strong> <i class="fa fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn btn-info btn-md">
                                <input type="checkbox" name="options" id="option2" autocomplete="off">Impressions <strong>1000</strong> <i class="fa fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn red accent-2 btn-md">
                                <input type="checkbox" name="options" id="option2" autocomplete="off">CTR <strong>5%</strong> <i class="fa fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn red accent-2 btn-md">
                                <input type="checkbox" name="options" id="option2" autocomplete="off">Position <strong>4.14</strong> <i class="fa fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>
                            </label>
                        </div>

                    </div>
                </div>
                <!--/Second row-->

                <!--Third row-->
                <div class="row mx-3 mb-5 text-center">

                    <!--First column-->
                    <div class="col">

                        <div class="btn-group mt-1">
                            <label class="btn btn-primary btn-md">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>Queries
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn btn-primary btn-md">
                                <input type="radio" name="options" id="option2" autocomplete="off">Pages
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn btn-primary btn-md">
                                <input type="radio" name="options" id="option3" autocomplete="off">Countries
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn btn-primary btn-md">
                                <input type="radio" name="options" id="option4" autocomplete="off">Devices
                            </label>
                        </div>
                        <div class="btn-group mt-1">
                            <label class="btn btn-primary btn-md">
                                <input type="radio" name="options" id="option4" autocomplete="off">Search type
                            </label>
                        </div>

                    </div>
                    <!--/Second column-->

                </div>
                <!--/Third row-->

                <!--Third row-->
                <div class="row mb-0">
                    <!--First column-->
                    <div class="col-md-12">

                        <!--Panel content-->
                        <div class="card-body pt-0">
                            <!--Table-->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <!--Table head-->
                                    <thead class="rgba-stylish-strong white-text">
                                        <tr>
                                            <th>Queries</th>
                                            <th>Clicks</th>
                                            <th>Impressions</th>
                                            <th>CTR</th>
                                            <th>Position</th>
                                            <th>Day</th>
                                            <th>Week</th>
                                            <th>Month</th>
                                            <th>Local</th>
                                            <th>Global</th>
                                        </tr>
                                    </thead>
                                    <!--/Table head-->

                                    <!--Table body-->
                                    <tbody>
                                        <tr class="none-top-border">
                                            <td>bootstrap material design</td>
                                            <td>1000</td>
                                            <td>10000</td>
                                            <td>5%</td>
                                            <td>3.21</td>
                                            <td>2 <span class="badge primary-color">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                            <td>2 <span class="badge grey">0 </span></td>
                                            <td>200 (US)</td>
                                            <td>2000</td>
                                        </tr>
                                        <tr>
                                            <td>bootstrap material design</td>
                                            <td>1000</td>
                                            <td>10000</td>
                                            <td>5%</td>
                                            <td>3.21</td>
                                            <td>2 <span class="badge primary-color">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                            <td>2 <span class="badge grey">0 </span></td>
                                            <td>200 (US)</td>
                                            <td>2000</td>
                                        </tr>
                                        <tr>
                                            <td>bootstrap material design</td>
                                            <td>1000</td>
                                            <td>10000</td>
                                            <td>5%</td>
                                            <td>3.21</td>
                                            <td>2 <span class="badge primary-color">1 <i class="fa fa-arrow-circle-up"></i></span></td>
                                            <td>2 <span class="badge red accent-2">1 <i class="fa fa-arrow-circle-down"></i></span></td>
                                            <td>2 <span class="badge grey">0 </span></td>
                                            <td>200 (US)</td>
                                            <td>2000</td>
                                        </tr>

                                    </tbody>
                                    <!--/Table body-->
                                </table>

                            </div>
                            <!--/Table-->

                            <!--Bottom Table UI-->
                            <div class="d-flex justify-content-between">

                                <!--Name-->
                                <select class="mdb-select colorful-select dropdown-primary mt-2">
                                    <option value="" disabled >Rows number</option>
                                    <option value="1" selected>5 rows</option>
                                    <option value="2">25 rows</option>
                                    <option value="3">50 rows</option>
                                    <option value="4">100 rows</option>
                                </select>

                                <!--Pagination -->
                                <nav class="my-4">
                                    <ul class="pagination pagination-circle pg-blue mb-0">

                                        <!--First-->
                                        <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

                                        <!--Arrow left-->
                                        <li class="page-item disabled">
                                            <a class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        </li>

                                        <!--Numbers-->
                                        <li class="page-item active"><a class="page-link">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link">4</a></li>
                                        <li class="page-item"><a class="page-link">5</a></li>

                                        <!--Arrow right-->
                                        <li class="page-item">
                                            <a class="page-link" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>

                                        <!--First-->
                                        <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

                                    </ul>
                                </nav>
                                <!--/Pagination -->

                            </div>
                            <!--Bottom Table UI-->

                        </div>
                        <!--/.Panel content-->

                    </div>
                    <!--/First column-->
                </div>
                <!--/Third row-->

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </section>
    <!--/Section: Main chart-->

  </mdb-container>
</template>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbView, mdbCardBody, mdbBadge, mdbSelect, mdbBtn, mdbDatePicker, mdbLineChart } from 'mdbvue'

export default {
  name: 'Dashboardv5',
  components: {
    mdbContainer,
    mdbRow,
    mdbCol,
    mdbCard,
    mdbView,
    mdbCardBody,
    mdbBadge,
    mdbSelect,
    mdbBtn,
    mdbDatePicker,
    mdbLineChart
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
      }
    }
  }
}
</script>

<!-- Add 'scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
