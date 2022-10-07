@extends('siswa.admin')
@section('content')

    <div class="col-lg-12 text-dark">
        <div class="card shadow">
            <div class="card-header">
                <div class="container">
                    <label for="cars">Tanggal:</label>

                    <select name="cars" id="cars">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>

                    <label for="cars">Bulan:</label>

                    <select name="cars" id="cars">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                    </select>

                    <a href="" class="btn btn-warning">Tampilkan</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">NISN</th>
                            <th scope="col">KETERANGAN</th>
                            {{-- <th scope="col">JENIS KELAMIN</th> --}}
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $i => $item) --}}
                        <tr style="background-color: red">
                            <th scope="row">1</th>
                            <td>Ibrahim</td>
                            <td>696969</td>
                            <td>Tidak Hadir</td>
                            {{-- <td>{{$item->jk}}</td> --}}
                            <td>
                                <a href="" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info"></i></a>
                                <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>

                        <tr style="background-color: green">
                            <th scope="row">1</th>
                            <td>Ibrahim Rizky</td>
                            <td>420420</td>
                            <td>Hadir</td>
                            {{-- <td>{{$item->jk}}</td> --}}
                            <td>
                                <a href="" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info"></i></a>
                                <a href="" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
