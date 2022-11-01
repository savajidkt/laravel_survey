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
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>Terri Walker submitted a survey</h6>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>  10/22/2022  08:00PM</p>
                                                
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>Brittany Adler submitted a survey</h6>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>  10/22/2022  08:00PM</p>
                                                
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>William Waters submitted a survey</h6>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>  10/22/2022  08:00PM</p>
                                                
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>Thomas Platt submitted a survey</h6>
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>  10/22/2022  08:00PM</p>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

  </div>

@endsection
