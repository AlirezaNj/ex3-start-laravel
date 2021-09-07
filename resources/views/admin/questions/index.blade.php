@extends('admin.layouts.master')
@section('title')
    جدول سوالات
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">جدول سوالات</h1>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-left">
                <a href="{{route('questions.create')}}" class="btn btn-info">ساخت سوال</a>
                <a href="/" class="btn btn-info ">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </div>
@endsection
@section('main-content')
    <table class="table text-center">
        <thead>
            <tr>
                <th>درس</th>
                <th>پایه</th>
                <th>متن سوال</th>
                <th>گزینه اول</th>
                <th>گزینه دوم</th>
                <th>گزینه سوم</th>
                <th>گزینه چهارم</th>
                <th>گزینه صحیح</th>
                <th>جواب تشریحی</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{$question->lesson}}</td>
                    <td>{{$question->grade}}</td>
                    <td>{{$question->questionText}}</td>
                    <td>{{$question->opt1}}</td>
                    <td>{{$question->opt2}}</td>
                    <td>{{$question->opt3}}</td>
                    <td>{{$question->opt4}}</td>
                    <td>{{$question->correctOpt}}</td>
                    <td>{{$question->answer}}</td>
                    <td><a href="{{route('questions.edit' , ['question'=>$question])}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
                    <td>
                        <form action="{{route('questions.destroy' , ['question'=>$question])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
