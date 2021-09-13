@extends('admin.layouts.master')
@section('title')
    ساخت امتحان
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ساخت امتحان</h1>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-left">
                <a href="/" class="btn btn-info ">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </div>
@endsection
@section('main-content')
    @if($errors->any())
        <div class="alert alert-danger text-left">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="show_number_of_questions">تعداد سوال انتخاب شده</div>
    <form action="{{route('exams.store')}}" method="POST" dir="rtl">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">نام امتحان :  </label>
                    <input type="text" name="name" class="form-control" id="name"  placeholder="لطفا نام امتحان را وارد کنید">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lesson">درس :  </label>
                    <input type="text" name="lesson" class="form-control" id="lesson"  placeholder="لطفا نام درس موردنظر را وارد کنید">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="grade">پایه : </label>
                    <select name="grade" id="grade" class="form-select">
                        @foreach(Config::get('constants.grade') as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject">مباحث :  </label>
                    <input type="text" name="subject" class="form-control" id="subject"  placeholder="لطفا مباحث وارد کنید">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="teacher_id">استاد : </label>
                    <select class="form-select" name="teacher_id" aria-label="">
                        @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}">{{$teacher->name}} {{$teacher->family}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">تاریخ : </label>
                    <input type="date" name="date" class="form-control" id="date">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="start_time">ساعت شروع : </label>
                    <input type="time" name="start_time" class="form-control" id="start_time">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="end_time">ساعت پایان : </label>
                    <input type="time" name="end_time" class="form-control" id="end_time">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="student_ids[]">دانش آموزان : </label>
            <select class="form-select" name="student_ids[]" aria-label="" multiple>
                @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}} {{$student->family}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="row">
                @foreach($questions as $question)
                    <div class="col-md-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-header bg-light">
                                        <span class="badge badge-dark">{{$question->lesson}}</span>
                                        <i class="bi bi-arrow-left-circle"></i>
                                        <span class="badge badge-dark">فصل{{$question->chapter}}</span>
                                        <i class="bi bi-arrow-left-circle"></i>
                                        <span class="badge badge-dark">{{$question->subject}}</span>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                    <span>سوال شماره {{$loop->iteration}}
                                    <i class="bi bi-arrow-bar-left"></i>
                                    </span>
                                            {{$question->questionText}}
                                        </div>
                                        <div>
                                            <span class="badge badge-warning"><i class="bi bi-brightness-high-fill"></i></span>
                                            {{$question->answer}}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-sm btn-outline-primary" id="addQuestion{{$loop->iteration}}"><i class="bi bi-plus-lg"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-2 bg-success">
                                    <div class="">
                                        جای سختی
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
@endsection
