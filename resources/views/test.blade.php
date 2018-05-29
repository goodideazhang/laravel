<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>bootstrap</title>
    <link rel="stylesheet" href="{{URL::asset('/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('/plugins/bootstrapvalidator-0.4.5/dist/css/bootstrapValidator.css')}}"/>

    <style>
        body {
            margin: 10px;
        }

        .demo-carousel {
            height: 200px;
            line-height: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username"/>
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


<script type="text/javascript" src="{{URL::asset('/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{URL::asset('/plugins/bootstrapvalidator-0.4.5/dist/js/bootstrapValidator.js')}}"></script>

<script>
    $(function () {


    });
</script>
</body>

</html>