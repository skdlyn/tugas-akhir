@extends('siswa.admin')
@section('title', 'jadwal pelajaran')
@section('content-title','jadwal pelajaran')
@section('content')
 
<table class="table table-striped text-danger" style="border: black">
    <tr>
        <th style="width: 15%">Jam Ke-</th>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
    </tr>

    <tr>
        <th> 06.45 ~ 07.30</th>
        <td>Bahasa Inggris</td>
        <td>PGWB</td>
        <td>PAI</td>
        <td>Bahasa Indonesia</td>
        <td>PGWB</td>
    </tr>

        {{-- jam ke - 2 --}}
    <tr>
        <th> 07.30 ~ 08.10</th>
        <td>Bahasa Inggris</td>
        <td>PGWB</td>
        <td>PAI</td>
        <td>Bahasa Indonesia</td>
        <td>PGWB</td>
    </tr>
    
        {{-- jam ke - 3 --}}
    <tr>
        <th> 08.10 ~ 08.50</th>
        <td>PPKN</td>
        <td>PGWB</td>
        <td>PAI</td>
        <td>PBO</td>
        <td>PKK</td>
    </tr>

        {{-- jam ke - 4 --}}
    <tr>
        <th> 08.50 ~ 09.30</th>
        <td>PPKN</td>
        <td>PGWB</td>
        <td>PBO</td>
        <td>PBO</td>
        <td>PKK</td>
    </tr>

    <tr id="istirahat-1">
        <th>09.30 ~ 10.00</th>
        <td colspan="5" class="i">istirahat</td>
    </tr>

        {{-- jam ke - 5 --}}
    <tr>
        <th> 10.00 ~ 10.45</th>
        <td>PKK</td>
        <td>PGWB</td>
        <td>PBO</td>
        <td>Bahasa Inggris</td>
        <td>PKK</td>
    </tr>

        {{-- jam ke - 6 --}}
    <tr>
        <th> 10.45 ~ 11.30</th>
        <td>PKK</td>
        <td>matematika</td>
        <td>PBO</td>
        <td>Bahasa Inggris</td>
        <td>PKK</td>
    </tr>

    <tr id="istirahat-1">
        <th>11.30 ~ 12.20</th>
        <td colspan="5" class="i">istirahat</td>
    </tr>

        {{-- jam ke - 7 --}}
    <tr>
        <th> 11.20 ~ 13.00</th>
        <td>PGWB</td>
        <td>matematika</td>
        <td>Basis Data</td>
        <td>matematika</td>
        <td>PKK</td>
    </tr>

        {{-- jam ke - 8 --}}
    <tr>
        <th> 13.00 ~ 13.40</th>
        <td>PGWB</td>
        <td>PBO</td>
        <td>Basis Data</td>
        <td>matematika</td>
        <td>PKK</td>
    </tr>

        {{-- jam ke - 9 --}}
    <tr>
        <th> 13.40 ~ 14.20</th>
        <td>PGWB</td>
        <td>PBO</td>
        <td>Basis Data</td>
        <td>PGWB</td>
        <td>PKK</td>
    </tr>

        {{-- jam ke - 10 --}}
    <tr>
        <th> 14.20 ~ 15.00</th>
        <td>PGWB</td>
        <td>PBO</td>
        <td>Basis Data</td>
        <td>PGWB</td>
        <td>PKK</td>
    </tr>

</table>

<style>
    .table{
        border-color: black;
    }

    #istirahat-1{
        background-color: blue;
        color: white;
    }

    #istirahat-1 .i{
        text-align: center
    }
</style>
@endsection