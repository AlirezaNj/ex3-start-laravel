@extends('admin.layouts.master')
@section('title')
    جدول امتحانات
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">جدول امتحانات</h1>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-left">
                <a href="{{route('exams.create')}}" class="btn btn-info">ساخت امتحان</a>
                <a href="/" class="btn btn-info ">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </div>
@endsection
@section('main-content')
    <table class="table text-center">
        <thead>
        <tr>
            <th>نام امتحان</th>
            <th>درس</th>
            <th>پایه</th>
            <th>مباحث</th>
            <th>تاریخ</th>
            <th>ساعت شروع</th>
            <th>ساعت پایان</th>
            <th>تعداد سوالات</th>
            <th>سوالات</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($exams as $exam)
            <tr>
                <td>{{$exam->name}}</td>
                <td>{{$exam->lesson}}</td>
                <td>{{$exam->grade}}</td>
                <td>{{$exam->subject}}</td>
                <td>{{$exam->date}}</td>
                <td>{{$exam->start_time}}</td>
                <td>{{$exam->end_time}}</td>
                <td>{{$exam->count_questions}}</td>
                <td>
                    <div id="accordion">
                        <div class="card card-primary">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn text-light" data-toggle="collapse" data-target="#collapse{{$exam->id}}" aria-expanded="false" aria-controls="collapseOne">
                                        <span>سوالات</span>
                                        <i class="bi bi-caret-down-fill"></i>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$exam->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body text-right" dir="rtl">
                                    <ul>
                                        @foreach($exam->questions as $q)
                                            <li>{{$q->questionText}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td><a href="{{route('exams.edit' , ['exam'=>$exam])}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
                <td>
                    <form action="{{route('exams.destroy' , ['exam'=>$exam])}}" method="POST">
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
