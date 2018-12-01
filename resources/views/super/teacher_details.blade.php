@extends('super.index')
@section('content')
@section('title', 'Teacher Details')
<style>
  .center{
    margin: 0 auto;
    text-align: center;
  }
</style>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      @yield('title') View
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="space15"></div>

                        @foreach ($teacher_details as $tcr)
                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <tr>
                                  <td colspan="2" class="center"><img src="{{ $tcr->pic }}" alt="{{ $tcr->usrnme }}" width="150px" height="150" class="circle"></td>
                              </tr>
                              <tr>
                                  <th>Name</th>
                                  <td>{{ $tcr->usrnme }}</td>
                              </tr>                              
                              <tr>
                                  <th>User Power</th>
                                  @if ($tcr->usrpwr == '1')
                                    <td>
                                      <span class="label label-inverse">Admin</span>
                                    </td>
                                  @endif
                              </tr>
                              <tr>
                                  <th>Father's Name</th>
                                  <td>{{ $tcr->fthr }}</td>
                              </tr>
                              <tr>
                                  <th>Mother's Name</th>
                                  <td>{{ $tcr->mthr }}</td>
                              </tr>
                              <tr>
                                  <th>Mobile</th>
                                  <td>{{ $tcr->usrmbl }}</td>
                              </tr>
                              <tr>
                                  <th>Email</th>
                                  <td>{{ $tcr->usreml }}</td>
                              </tr>
                              <tr>
                                  <th>School Code</th>
                                  <td>{{ $tcr->sclcd }}</td>
                              </tr>
                              <tr>
                                  <th>Rank</th>
                                  <td>{{ $tcr->usrrnk }}</td>
                              </tr>
                              <tr>
                                  <th>Religion</th>
                                  <td>{{ $tcr->rlgn }}</td>
                              </tr>
                              <tr>
                                  <th>Date Of Birth</th>
                                  <td>{{ $tcr->dob }}</td>
                              </tr>
                              <tr>
                                  <th>About</th>
                                  <td>{{ $tcr->abt }}</td>
                              </tr>
                              <tr>
                                  <th>Adress</th>
                                  <td>{{ $tcr->thn.", ".$tcr->dst.", ".$tcr->dvn }}</td>
                              </tr>

                          </table>
                           @endforeach

                      </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->



    @endsection

