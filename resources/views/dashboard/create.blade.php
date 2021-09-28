@extends('dashboard.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header" style="background-color: #5F7A61; font-weight: bold; font-size:18px; text-align:center; color:ivory;">{{ __('Add new post') }}</div>
                    
                        

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="card col-lg-4 bg-light shadow-sm">
                                <div class="card-body">
                                    <form action="{{ route('dashboard.store') }}" method="post" class="mt-3">
                                        @csrf
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Device ID : </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <input type="text" name="device_id" class="form-control" placeholder="Enter your device id" value="{{ old('device_id') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Humid: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <input type="text" name="humid" class="form-control" placeholder="Enter your humid" value="{{ old('humid') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Temp: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <input type="text" name="temp" class="form-control" placeholder="Enter your temp" value="{{ old('temp') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;"> 
                                                    <strong>Port 1: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <!-- <input type="text" name="port_1" class="form-control" placeholder="Enter your port"> -->
                                                    <select name="port_1"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 2: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_2"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 3: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_3"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 4: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_4"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 5: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_5"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 6: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_6"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 7: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_7"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-4" style="text-align: right;">
                                                    <strong>Port 8: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <select name="port_8"class="form-control"> 
                                                        <option value="">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12" align="center">
                                                <button type="submit" class="btn btn-success my-3 col-lg-6">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @if ($errors->any())
                            <div class="row justify-content-center">
                                <div class="alert alert-danger col-lg-10">
                                    <strong>Whoops!</strong>
                                    There were some problems with your input. <br><br>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection