<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>جدول سوالات</title>
</head>
<body>
<div class="container text-center">
    <h1>جدول سوالات</h1><br>
    <table class="table">
        <th>
            <tr>
                <td>متن سوال</td>
                <td>گزینه اول</td>
                <td>گزینه دوم</td>
                <td>گزینه سوم</td>
                <td>گزینه چهارم</td>
                <td>گزینه صحیح</td>
                <td>ویرایش</td>
                <td>حذف</td>
            </tr>
        </th>
        @foreach($questions as $question)
            <tr>
                <td>{{$question->questionText}}</td>
                <td>{{$question->opt1}}</td>
                <td>{{$question->opt2}}</td>
                <td>{{$question->opt3}}</td>
                <td>{{$question->opt4}}</td>
                <td>{{$question->correctOpt}}</td>
                <td><a href="{{route('questions.edit' , ['question'=>$question])}}" class="btn btn-warning">ویرایش</a></td>
                <td>
                    <form action="{{route('questions.destroy' , ['question'=>$question])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table><br>
    <a href="{{route('questions.create')}}" class="btn btn-info">ساخت سوال</a><br>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
