@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            用户管理
            <small>列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="${basePath}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">系统管理</a></li>
            <li class="active">banner管理</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="dataTables_filter" id="searchDiv">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" data-btn-type="add">新增</button>
                            <button type="button" class="btn btn-default" data-btn-type="edit">编辑</button>
                            <button type="button" class="btn btn-default" data-btn-type="delete">删除</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="banner_table" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('javascript')
    <script>
        $(function () {
            $('#banner_table').DataTable({
                "ajax": "/banner/list",
                "columns": [
                    {"data": "id"},
                    {"data": "link"},
                ]
            });
            $('button[data-btn-type]').click(function () {
                var action = $(this).attr('data-btn-type');
                switch(action)
                {
                    case 'add':
                        modals.openWin({
                            winId:'bannerWin',
                            title:'新增banner',
                            width:'600px',
                            url:"/banner/create"
                        });
                        break;

                }

            })


        });
    </script>
@endsection