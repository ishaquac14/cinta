@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5">
        <a href="{{ route('thanks') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
        </a>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mt-2">
            <label class="form-label">HOST</label>
            <input type="text" name="host" class="form-control" value="{{ $physical->host }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">NOTE</label>
            <textarea class="form-control" name="note" rows="{{ substr_count($book->tujuan, "\n") + 1 }}" readonly>{{ $physical->tujuan }}</textarea>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">CREATED AT</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $physical->created_at->format('Y-m-d H:i:s') }}" readonly>
        </div>
        {{-- <div class="col-md-3 mt-2">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $book->updated_at->format('Y-m-d H:i:s') }}" readonly>
        </div> --}}
    </div>
</div>
@endsection
