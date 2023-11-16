@extends('layouts.app')

@section('body')

<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="{{ route('sanswitch.index') }}" class="btn btn-secondary">Kembali</a>
        </a>
    </div>
    <div>
        <h3 class="mb-0">DETAIL C/S SANSWITCH SERVER</h3>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-primary text-center">
                <tr>
                    <th width="4%">No</th>
                    <th>Author</th>
                    <th>Task List</th>
                    <th width="25%">Created</th>
                    <th width="15%">Judgment</th>
                </tr>
            </thead>            
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Processed</td>
                    <td>Host 3</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td  class="text-center">{{ $sanswitch->host3 }}</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Processed</td>
                    <td>Storage 3</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td class="text-center">{{ $sanswitch->storage3 }}</td>
                </tr>
                @for ($i = 1; $i <= 19; $i++)
                    <tr>
                        <td class="text-center">{{ $i + 2 }}</td>
                        <td>Processed</td>
                        <td>port{{ $i }}-Str3</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }}</td>
                        <td class="text-center">{{ $sanswitch["port{$i}"] }}</td>
                    </tr>
                @endfor
                <tr>
                    <td class="text-center">{{ $i + 2 }}</td>
                    <td>Processed</td>
                    <td>Host 4</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td class="text-center">{{ $sanswitch->host4 }}</td>
                </tr>
                <tr>
                    <td class="text-center">{{ $i + 3 }}</td>
                    <td>Processed</td>
                    <td>Storage 4</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td class="text-center">{{ $sanswitch->storage4 }}</td>
                </tr>
                @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td class="text-center">{{ $i + 23 }}</td>
                    <td>Processed</td>
                    <td>port{{ $i }}-Str4</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td class="text-center">{{ $sanswitch["port_" . ($i)] }}</td>
                </tr>
                @endfor
            </tbody>
        </table>
        <div class="row mt-4">
            <div class="col-md-12 mb-5">
                <textarea class="form-control" name="note" rows="{{ substr_count($sanswitch->note, "\n") + 5 }}" readonly>{{ $sanswitch->note }}</textarea>
            </div>
        </div>
    </div>
</div>

@endsection
