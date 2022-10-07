@extends('siswa.admin')
@section('content')


    <div class="col-lg-12 text-primary" >
        <div class="card shadow mb-">
            <div class="card-header">
                <a href="" class="btn btn-success ">Tambah Data</a> 

                <label  for="cars">Bulan:</label>

                <select name="cars" id="cars">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                </select>

                <a href="" class="btn btn-warning">Tampilkan</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NISN</th>
                            <th scope="col">SAKIT</th>
                            <th scope="col">IZIN</th>
                            <th scope="col">ABSEN</th>
                            <th scope="col">HADIR</th>
                            
                            {{-- <th scope="col">JENIS KELAMIN</th> --}}
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $i => $item) --}}
                        <tr>
                            <th scope="row">1</th>
                            <td>Ibrahim</td>
                            <td>696969</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>25/25</td>
                            {{-- <td>{{$item->jk}}</td> --}}
                            <td>
                                <a href="" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info"></i></a>
                                <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
