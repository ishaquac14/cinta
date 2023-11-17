@extends('layouts.app')

@section('body')

<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="{{ route('sanswitch.index') }}" class="btn btn-secondary">Kembali</a>
        </a>
    </div>
    <div class="mb-2">
        <h4>DETAIL C/S SANSWITCH SERVER ({{ \Carbon\Carbon::parse($sanswitch->created_at)->format('d-m-Y H:i:s') }})</h4>
    </div>    
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-primary text-center">
                <tr>
                    <th width="4%">No</th>
                    <th>Device</th>
                    <th>Task List</th>
                    <th width="15%">Judgment</th>
                    <th>Author</th>
                </tr>
            </thead>            
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    
                    <td rowspan="6" style="vertical-align: middle; text-align: center;">DELL SAN-SW-01</td>
                    <td>Power Status</td>
                    <td  class="text-center">{{ $sanswitch->powerstatus }}</td>
                    <td>Processed</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    
                    <td>Notification Status</td>
                    <td class="text-center">{{ $sanswitch->notif }}</td>
                    <td>Processed</td>
                </tr>
                @for ($i = 0; $i <= 3; $i++)
                    <tr>
                        <td class="text-center">{{$i + 3}}</td>
                        
                        <td>Port-{{ $i }}</td>
                        <td class="text-center">{{ $sanswitch["port{$i}"] }}</td>
                        <td>Processed</td>
                    </tr>
                @endfor
                <tr>
                    <td class="text-center">7</td>
                    
                    <td rowspan="7" style="vertical-align: middle; text-align: center;">DELL SAN-SW-02</td>
                    <td>Power Status</td>
                    <td class="text-center">{{ $sanswitch->powerstatus_ }}</td>
                    <td>Processed</td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    
                    <td>Notification Status</td>
                    <td class="text-center">{{ $sanswitch->notif_ }}</td>
                    <td>Processed</td>
                </tr>
                @for ($i = 0; $i <= 4; $i++)
                <tr>
                    <td class="text-center">{{ $i + 9}}</td>
                    <td>Port-{{ $i }}</td>
                    <td class="text-center">{{ $sanswitch["port_" . ($i)] }}</td>
                    <td>Processed</td>
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
