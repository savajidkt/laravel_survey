@extends('admin.layout.app')
@section('page_title','Admin Dashboard')
@section('content')
<!-- Dashboard Ecommerce Starts -->
<div>Welcome to {{auth()->user()->name}}</div>
<!-- Dashboard Ecommerce ends -->

<div class="row mt-2">
    <div class="col-lg-6 col-md-6 col-12">
      <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Survey Results</h4>
          </div>
          <div class="card-body p-0">
              <div id="survey-results" class="my-2"></div>
              <div class="row border-top text-center mx-0">
                  <div class="col-6 border-right py-1">
                      <p class="card-text mb-0">Have taken the Survey</p>
                      <h1 class="font-weight-bolder mb-0">{{$survey_results['completed']}}</h1>
                  </div>
                  <div class="col-6 py-1">
                      <p class="card-text mb-0">Have Not taken the Survey</p>
                      <h1 class="font-weight-bolder mb-0">{{$survey_results['pending']}}</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Timeline Card -->
                        <div class="col-lg-6 col-12">
                            <div class="card card-user-timeline">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="list" class="user-timeline-title-icon"></i>
                                        <h4 class="card-title">Recent Activity</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="timeline ml-50">
                                        @foreach($recent_activity as $key=>$activity)
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>{{$activity->user->full_name}} submitted a survey </h6>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>  {{ \Carbon\Carbon::parse($activity->updated_at)->format('d/m/Y  g:i A')}}</p>

                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

  </div>

@endsection

@section('extra-script')
<script>
    //------------ Goal Overview Chart ------------
  //---------------------------------------------
  var $barColor = '#f3f3f3';
  var $trackBgColor = '#EBEBEB';
  var $textMutedColor = '#b9b9c3';
  var $budgetStrokeColor2 = '#dcdae3';
  var $goalStrokeColor2 = '#51e5a8';
  var $strokeColor = '#ebe9f1';
  var $textHeadingColor = '#5e5873';
  var $earningsStrokeColor2 = '#28c76f66';
  var $earningsStrokeColor3 = '#28c76f33';
  var $goalOverviewChart = document.querySelector('#survey-results');
  goalOverviewChartOptions = {
    chart: {
      height: 245,
      type: 'radialBar',
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        blur: 3,
        left: 1,
        top: 1,
        opacity: 0.1
      }
    },
    colors: [$goalStrokeColor2],
    plotOptions: {
      radialBar: {
        offsetY: -10,
        startAngle: -150,
        endAngle: 150,
        hollow: {
          size: '77%'
        },
        track: {
          background: $strokeColor,
          strokeWidth: '50%'
        },
        dataLabels: {
          name: {
            show: false
          },
          value: {
            color: $textHeadingColor,
            fontSize: '2.86rem',
            fontWeight: '600'
          }
        }
      }
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: 'horizontal',
        shadeIntensity: 0.5,
        gradientToColors: [window.colors.solid.success],
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100]
      }
    },
    series: ["{{$survey_results['percentage']}}"],
    stroke: {
      lineCap: 'round'
    },
    grid: {
      padding: {
        bottom: 30
      }
    }
  };
  goalOverviewChart = new ApexCharts($goalOverviewChart, goalOverviewChartOptions);
  goalOverviewChart.render();
</script>
@endsection('extra-script')
