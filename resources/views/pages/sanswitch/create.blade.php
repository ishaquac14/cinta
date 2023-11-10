@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
        </a>
    </div>
    <div>
        <h3 class="mb-0">C/S SAN SWITCH</h3>
    </div>
    <hr>

    <form action="{{ route('sanswitch.store') }}" method="POST">
        @csrf
        <table class="table table-striped table-bordered">
            <thead class="table-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Device</th>
                <th scope="col">Task List</th>
                <th scope="col">OK (Green)</th>
                <th scope="col">Not Good (Orange)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td rowspan="4" style="vertical-align: middle; text-align: center;">DELL SAN-SW-01</td>
                <td>Power Status</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Notification Status</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Port-0</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Port-1</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td rowspan="4" style="vertical-align: middle; text-align: center;">DELL SAN-SW-02</td>
                <td>Power Status</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>            
              <tr>
                <th scope="row">6</th>
                <td>Notification Status</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Port-0</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Port-1</td>
                <td><input type="radio"></td>
                <td><input type="radio"></td>
              </tr>
            </tbody>
          </table>
        <div class="">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Note"></textarea>
        </div>
        <div class="mt-4"><p><b>IMPORTANT:</b> If any orange, please email to: callcenter.fid@fujitsu.com</p></div>
        <div class="mt-3 mb-5">
            <button class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
</div>
@endsection
