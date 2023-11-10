@extends('layouts.app')

@section('body')
<div class="container">
        <div class="d-flex align-items-center justify-content-between mt-5">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
                <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
            </a>              
        </div>
        <div class="col-md-3 offset-md-9 mb-4">
            <form action="/physical" class="d-flex ml-auto mt-2" method="GET">
                <input class="form-control me-2" type="search" name="search" placeholder="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="table-responsive">
        <table id="example" class="table table-striped" style="width:100%">
            <thead class="table-primary">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ASAL PERUSAHAAN</th>
                    <th>DEPARTEMEN</th>
                    <th>TUJUAN LOKASI</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @if($physicals->count() > 0)
                @foreach ($physicals as $physical)
                <tr class="table-light"> 
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $physical->nama }}</td>
                    <td class="align-middle">{{ $physical->asal_perusahaan }}</td>
                    <td class="align-middle">{{ $physical->departemen }}</td>
                    <td class="align-middle">{{ $physical->tujuan_lokasi }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('physical.show', $physical->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="6">Data tidak ditemukan</td>
                </tr>
                @endif
            </tbody>
        </table>
        {{-- @include('layouts.pagination-physical', ['physicals' => $physicals]) --}}
    </div>
</div>
@endsection
