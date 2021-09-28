@extends('dashboard.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header" style="background-color: #5F7A61; font-weight: bold; font-size:18px; text-align:center; color:ivory;">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="{{ route('dashboard.create') }}" class="btn btn-outline-success">Create new post</a>
                        </div>
                        <div class="col-lg-8">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success" style="text-align: center;">
                                {{ $message }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col table-responsive">
                            <table class="table table-bordered shadow-sm my-3">
                                <thead>
                                    <tr style="background-color: #cfd9db;" align="center">
                                        <th scope="col">#</th>
                                        <th scope="col">Timestamp</th>
                                        <th scope="col">Device ID</th>
                                        <th scope="col">Humid</th>
                                        <th scope="col">Temp</th>
                                        <th scope="col">Port 1</th>
                                        <th scope="col">Port 2</th>
                                        <th scope="col">Port 3</th>
                                        <th scope="col">Port 4</th>
                                        <th scope="col">Port 5</th>
                                        <th scope="col">Port 6</th>
                                        <th scope="col">Port 7</th>
                                        <th scope="col">Port 8</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <th scope="row" style="vertical-align: middle;">
                                            <center>{{ ++$i }}</center>
                                        </th>
                                        <td class="align-middle">
                                            <center>{{ $value->updated_at }}</center>
                                        </td>
                                        <td class="align-middle">
                                            <center>{{ $value->device_id }}</center>
                                        </td>
                                        <td class="align-middle">
                                            <center>{{ $value->humid }}</center>
                                        </td>
                                        <td class="align-middle">
                                            <center>{{ $value->temp }}</center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_1 }} -->
                                                @if ($value->port_1 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction({{$value->id}}) value={{$value->port_1}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_1 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_1 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction({{$value->id}}) value={{$value->port_1}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_1 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_2 }} -->
                                                @if ($value->port_2 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_2{{$value->id}}" onchange="myFunction2({{$value->id}})" value="{{$value->port_2}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_2 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_2 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_2{{$value->id}}" onchange="myFunction2({{$value->id}})" value="{{$value->port_2}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_2 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_3 }} -->
                                                @if ($value->port_3 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_3{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction3({{$value->id}}) value={{$value->port_3}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_3 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_3 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_3{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction3({{$value->id}}) value={{$value->port_3}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_3 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_4 }} -->
                                                @if ($value->port_4 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_4{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction4({{$value->id}}) value={{$value->port_4}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_4 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_4 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_4{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction4({{$value->id}}) value={{$value->port_4}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_4 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_5 }} -->
                                                @if ($value->port_5 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_5{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction5({{$value->id}}) value={{$value->port_5}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_5 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_5 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_5{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction5({{$value->id}}) value={{$value->port_5}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_5 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_6 }} -->
                                                @if ($value->port_6 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_6{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction6({{$value->id}}) value={{$value->port_6}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_6 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_6 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_6{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction6({{$value->id}}) value={{$value->port_6}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_6 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_7 }} -->
                                                @if ($value->port_7 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_7{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction7({{$value->id}}) value={{$value->port_7}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_7 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_7 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_7{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction7({{$value->id}}) value={{$value->port_7}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_7 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                            </center>
                                        </td>
                                        <td class="align-middle">
                                            <center>
                                                <!-- {{ $value->port_8 }} -->
                                                @if ($value->port_8 == 0)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_8{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction8({{$value->id}}) value={{$value->port_8}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_8 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif @if ($value->port_8 == 1)
                                                <div>
                                                    <label class="switch">
                                                        <input id="port_8{{$value->id}}" data-id="{{$value->id}}" onchange=myFunction8({{$value->id}}) value={{$value->port_8}} class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->port_8 ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                @endif
                                            </center>
                                        </td class="align-middle">
                                        <!-- <td>
                                    <center>
                                        <label class="switch">
                                            <input type="checkbox" name="checkbox"><span class="slider round">{{ $value->port_8 }}</span>
                                        </label>
                                    </center>
                                </td> -->
                                        <td class="align-middle">
                                            <form method="post" action="{{ route('dashboard.destroy', $value->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <div class="row">
                                                    <!-- <a href="{{ route('dashboard.edit', $value->id) }}" class="btn btn-secondary col-lg-12">Edit</a> -->
                                                    <a href="{{ route('dashboard.edit', $value->id) }}" class="btn btn-outline-light mb-1" data-toggle="tooltip" data-placement="right" title="Edit"><img src="../imgs/settings.png" alt="icon"></a>
                                                </div>
                                                <div class="row">
                                                    <button type="submit" class="btn btn-outline-light col-lg-12 delete" data-toggle="tooltip" data-placement="right" title="Delete !"><img src="../imgs/delete.png" alt="icon"></button>
                                                </div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('[data-toggle="tooltip"]').tooltip();
                                                    });
                                                </script>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="my-2">
        <center>{!! $data->links() !!}</center>
    </div>


</div>


@endsection