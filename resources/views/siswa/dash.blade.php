@extends('siswa.admin')
@section('content-title')
@section('content')

<div class="row">
{{-- style="margin-top: 170px" --}}
    <!-- umlah siswa -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2" style="border-radius:10px">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Siswa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2" style="border-radius:10px">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Guru Pengajar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-book fa-2x text-gray-300"></i>--}}
                        <i class="fas fa-person-chalkboard fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2" style="border-radius:10px">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Surat Perizinan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2" style="border-radius:10px">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Saran</div>
                        <div class="h5 mb-0 font-weight-bold text-dark-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-dark-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
 {{-- presentase kehadiran --}}
 <div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-7">
        <!-- Project Card Example -->
        <div class="card shadow mb-4 bg-color" style="border-radius:10px text-dark" >
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary ">Presentase Kehadiran Siswa</h6>
            </div>
            
            <div class="card-body text-dark">
                <h4 class="small font-weight-bold">Hadir 
                    <span class="float-right">70%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%"aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h4 class="small font-weight-bold">Sakit<span class="float-right">2%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 2%"aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <h4 class="small font-weight-bold">Izin <span class="float-right">18%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection