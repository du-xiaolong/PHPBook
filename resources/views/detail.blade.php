<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>挪威的森林</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<style>
    .well {
        padding: 12px;
        margin-bottom: 15px;
    }

    .well p {
        margin: 0;
        line-height: 1.5;
    }
</style>
<div class="container" style="margin:20px auto;">
    <div style="text-align: center">
        <p>
        <h3>{{ $book->name }}</h3></p>
        <p>{{ $book->author }}</p>
        <p><i>阅读量：{{ $book->clicks }}&nbsp;&nbsp;&nbsp;&nbsp;创建时间：{{ $book->created_at }}</i></p>
    </div>
    @foreach($digests as $digest)
        <div class="well">
            <p>{{$loop->index + 1}}. &nbsp;{{$digest->content}}</p>
            <p style="text-align: right">{{$digest->created_at}} &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="digest_edit.html"><span
                            class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                <a href="javascript:void(0)" onclick="delClick({{$digest->id}})"><span
                            class="glyphicon glyphicon-trash"></span></a>
            </p>
        </div>
    @endforeach
    <div class="col-sm-12 text-right">
        <a href="list.blade.php" class="btn btn-success">返回</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/add/{{$book->id}}" class="btn btn-success">添加</a>
    </div>
</div>
<script src="https://fastly.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>

<script>
    function delClick(id) {
        $.ajax({
            url: "{{url('api/delete')}}",
            method: 'post',
            dataType: 'json',
            data: {id: id},
            success: function (res) {
                console.log(res)
                if (res.status) {
                    location.reload()
                } else {
                    alert(111)
                }
            }
        })
    }
</script>
</body>
</html>