<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ساخت سوال</title>
</head>
<body>
<div class="container text-right">
    <br>
    <form action="{{route('questions.store')}}" method="POST" dir="rtl">
        @csrf
        <div class="form-group">
            <label for="questionText">متن سوال :  </label>
            <input type="text" name="questionText" class="form-control" id="questionText">
        </div>
        <div class="form-group">
            <label for="opt1">گزینه اول : </label>
            <input type="text" name="opt1" class="form-control" id="opt1">
        </div>
        <div class="form-group">
            <label for="opt2">گزینه دوم : </label>
            <input type="text" name="opt2" class="form-control" id="opt2">
        </div>
        <div class="form-group">
            <label for="opt3">گزینه سوم : </label>
            <input type="text" name="opt3" class="form-control" id="opt3">
        </div>
        <div class="form-group">
            <label for="opt4">گزینه چهارم : </label>
            <input type="text" name="opt4" class="form-control" id="opt4">
        </div><br>
        <div class="form-group">
            <label for="correctOpt">گزینه صحیح : </label>
            <input type="text" name="correctOpt" class="form-control" id="correctOpt">
        </div><br>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
    @if($errors->any())
        <div class="alert alert-danger text-left">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
