@extends('dashboard.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header" style="background-color: #5F7A61; font-weight: bold; font-size:18px; text-align:center; color:ivory;">{{ __('Edit Post') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>
                        There were some problems with your input. <br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="card col-lg-5 no-gutters bg-light shadow-sm">
                                <div class="card-body">
                                    <form action="{{ route('dashboard.update', $dashboard->id) }}" method="post" class="mt-3">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Device ID : </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <input type="text" name="device_id" class="form-control" value="{{ $dashboard->device_id }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Humid: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <input type="text" name="humid" class="form-control" value="{{ $dashboard->humid }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Temp: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-8">
                                                    <input type="text" name="temp" class="form-control" value="{{ $dashboard->temp }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;"> 
                                                    <strong>Port 1: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <!-- <input type="text" name="port_1" class="form-control" value="{{ $dashboard->port_1 }}"> -->
                                                    
                                                    Status = @if ($dashboard->port_1 == 0) 
                                                                <strong style="color: black;">Off</strong>
                                                            @endif @if ($dashboard->port_1 == 1)
                                                                <strong style="color: #00AF91;">On</strong>
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_1"class="form-control"> 
                                                        <option value="{{ $dashboard->port_1 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 2: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                Status = @if ($dashboard->port_2 == 0) 
                                                            <strong style="color: black;">Off</strong>
                                                        @endif @if ($dashboard->port_2 == 1)
                                                            <strong style="color: #00AF91;">On</strong>
                                                        @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_2"class="form-control"> 
                                                        <option value="{{ $dashboard->port_2 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 3: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                Status = @if ($dashboard->port_3 == 0) 
                                                                <strong style="color: black;">Off</strong>
                                                            @endif @if ($dashboard->port_3 == 1)
                                                                <strong style="color: #00AF91;">On</strong>
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_3"class="form-control"> 
                                                        <option value="{{ $dashboard->port_3 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 4: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                Status = @if ($dashboard->port_4 == 0) 
                                                                <strong style="color: black;">Off</strong>
                                                            @endif @if ($dashboard->port_4 == 1)
                                                                <strong style="color: #00AF91;">On</strong> 
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_4"class="form-control"> 
                                                        <option value="{{ $dashboard->port_4 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 5: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                Status = @if ($dashboard->port_5 == 0) 
                                                                <strong style="color: black;">Off</strong>
                                                            @endif @if ($dashboard->port_5 == 1)
                                                                <strong style="color: #00AF91;">On</strong> 
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_5"class="form-control"> 
                                                        <option value="{{ $dashboard->port_5 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 6: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                Status = @if ($dashboard->port_6 == 0) 
                                                                <strong style="color: black;">Off</strong>
                                                            @endif @if ($dashboard->port_6 == 1)
                                                                <strong style="color: #00AF91;">On</strong> 
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_6"class="form-control"> 
                                                        <option value="{{ $dashboard->port_6 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 7: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                Status = @if ($dashboard->port_7 == 0) 
                                                            <strong style="color: black;">Off</strong> 
                                                            @endif @if ($dashboard->port_7 == 1)
                                                                <strong style="color: #00AF91;">On</strong> 
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_7"class="form-control"> 
                                                        <option value="{{ $dashboard->port_7 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-3" style="text-align: right;">
                                                    <strong>Port 8: </strong>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <!-- <input type="text" name="port_8" class="form-control" value="{{ $dashboard->port_8 }}"> -->
                                                    Status = @if ($dashboard->port_8 == 0) 
                                                                <strong style="color: black;">Off</strong> 
                                                            @endif @if ($dashboard->port_8 == 1)
                                                                <strong style="color: #00AF91;">On</strong> 
                                                            @endif
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <select name="port_8"class="form-control"> 
                                                        <option value="{{ $dashboard->port_8 }}">Select</option>
                                                        <option value="0">Off</option>
                                                        <option value="1">On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12" align="center">
                                                <button type="submit" class="btn btn-success my-3 col-lg-6">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection