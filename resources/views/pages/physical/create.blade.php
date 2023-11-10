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
        <h3 class="mb-0">C/S PHYSICAL SERVER</h3>
    </div>
    <hr>
    <form action="{{ route('physical.store') }}" method="POST">
        @csrf
        <table class="table table-striped table-bordered">
            <thead class="table-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Task List</th>
                <th scope="col">OK (Green)</th>
                <th scope="col">Not Good (Orange)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Host 3</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="host" id="host3ok" value="H">
                        <label class="form-check-label" for="host3ok"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="host" id="host3ng" value="HNG">
                        <label class="form-check-label" for="host3ng"></label>
                    </div>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Storage 3</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="storage" id="storage3ok" value="S">
                        <label class="form-check-label" for="storage3ok"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="storage" id="storage3ng" value="SNG">
                        <label class="form-check-label" for="storage3ng"></label>
                    </div>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>HDD1-Str3</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hdd1" id="hdd1ok" value="HDD1">
                        <label class="form-check-label" for="hdd1ok"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hdd1" id="hdd1ng" value="HDD1NG">
                        <label class="form-check-label" for="hdd1ng"></label>
                    </div>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>HDD2-Str3</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hdd2" id="hdd2ok" value="HDD2OK">
                        <label class="form-check-label" for="hdd2ok"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="hdd2" id="hdd2ng" value="HDD2ng">
                        <label class="form-check-label" for="hdd2ng"></label>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
        <div class="">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="4" placeholder="Note"></textarea>
        </div>
        <div class="mt-4"><p><b>IMPORTANT:</b> If any orange, please email to: callcenter.fid@fujitsu.com</p></div>
        <div class="col">
            <div class="mt-3">
                <button class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </form>
    </div>
@endsection
