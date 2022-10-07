<link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" >

<!-- Custom styles for this template-->
<link href="{{ asset ('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="">

<section class="vh-100">

    <div class="body d-md-flex align-items-center justify-content-between shadow-6">

        <div class="container py-5 h-100">
        
            <div class="row d-flex align-items-center justify-content-center h-100">
            
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{asset('asset/img/login.jpeg')}}" style=" " class="img-fluid" alt="Phone image">
                </div>
                
                <div class="box-2 d-flex flex-column h-100" >
                    <div class="mt-5">
                        <h2 class="fw-bold mb-2 text-uppercase" style="font-family: 'Tahoma'">Welcome to Our Journal!</h2>
                        <p class="text-dark-50 mb-5" style="text-align: center">Our part of XII RPL 2</p>
                    </div>

                    <div class="d-flex flex-column ">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="mb-3"> 
                                    <a href="/dashboard_siswa" class="btn btn-dark">Masuk Sebagai Siswa</a>
                                </div>
                            </div>
                        <div class="d-flex justify-content-center">
                            <p>atau</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="mb-3">  <a href="/login" class="btn btn-dark">Masuk Sebagai Sekertaris</a> </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
</style>
