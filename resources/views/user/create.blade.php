@extends('layouts.main')

@section('content')
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Forms
                    </header>
                    <div class="panel-body">
                        <form class="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="exampleInputFile">File input</label>--}}
                                {{--<input type="file" id="exampleInputFile">--}}
                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                            {{--</div>--}}
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="button" class="submit btn btn-primary">Submit</button>
                        </form>

                    </div>
                </section>
            </div>

    </section>
@endsection

@section('javascript')
    <script>
        $(function () {
            $(".submit").click(function () {
                console.log($(this).parent().find("input"))
            })
        })
    </script>
@endsection