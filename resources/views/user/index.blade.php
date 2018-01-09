@extends('layouts.main')

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        用户列表
                        <span class="tools pull-right">
                                <a href={{url('/user/create')}} class="btn btn-success btn-link">新增</a>
                            </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>no</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>create_time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key=>$user)
                                    <tr class="gradeX">
                                        <td>{{$key+1}}</td>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td>{{$user['created_at']}}</td>
                                    </tr>
                                @endforeach
                                {{--<tr class="gradeC">--}}
                                {{--<td>Trident</td>--}}
                                {{--<td>Internet--}}
                                {{--Explorer 5.0</td>--}}
                                {{--<td>Win 95+</td>--}}
                                {{--<td class="center hidden-phone">5</td>--}}
                                {{--<td class="center hidden-phone">C</td>--}}
                                {{--</tr>--}}
                                {{--<tr class="gradeA">--}}
                                {{--<td>Trident</td>--}}
                                {{--<td>Internet--}}
                                {{--Explorer 5.5</td>--}}
                                {{--<td>Win 95+</td>--}}
                                {{--<td class="center hidden-phone">5.5</td>--}}
                                {{--<td class="center hidden-phone">A</td>--}}
                                {{--</tr>--}}
                                </tbody>
                                {{--<tfoot>--}}
                                {{--<tr>--}}
                                {{--<th>Rendering engine</th>--}}
                                {{--<th>Browser</th>--}}
                                {{--<th>Platform(s)</th>--}}
                                {{--<th class="hidden-phone">Engine version</th>--}}
                                {{--<th class="hidden-phone">CSS grade</th>--}}
                                {{--</tr>--}}
                                {{--</tfoot>--}}
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
