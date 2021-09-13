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
        <div class="row" id="filters">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header bg-danger">
                        انتخاب موضوع
                    </div>
                    <div class="card-body">
                        @foreach($subjects as $subject)
                            <div class="form-check">
                                <input type="checkbox" id="check-{{$loop->iteration}}" class="form-check-input">
                                <label for="check-{{$loop->iteration}}" class="form-check-label">{{$subject}}</label>
                                {{--                        <li>{{$subject}}</li>--}}
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header bg-warning">
                        انتخاب فصل
                    </div>
                    <div class="card-body">
                        @foreach($chapters as $chapter)
                            <div class="form-check">
                                <input type="checkbox" id="chapter-{{$chapter}}" class="form-check-input" checked>
                                <label for="chapter-{{$chapter}}" class="form-check-label"> فصل{{$chapter}}</label>
                                {{--                        <li>{{$subject}}</li>--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header bg-success">
                        انتخاب بخش
                    </div>
                    <div class="card-body">
                        @foreach($sections as $section)
                            <div class="form-check">
                                <input type="checkbox" id="check-{{$loop->iteration}}" class="form-check-input">
                                <label for="check-{{$loop->iteration}}" class="form-check-label">بخش {{$section}}</label>
                                {{--                        <li>{{$subject}}</li>--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group" id="questions">
            <div class="row">
                @foreach($questions as $question)
                    <div class="col-md-12 d-flex align-items-stretch" id="question_card_{{$loop->iteration}}">
                        <div class="card w-100">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card-header bg-light">
                                        <span class="badge badge-dark" id="lesson-{{$loop->iteration}}">{{$question->lesson}}</span>
                                        <i class="bi bi-arrow-left-circle"></i>
                                        <span class="badge badge-dark" id="chapter-{{$question->chapter}}">فصل{{$question->chapter}}</span>
                                        <i class="bi bi-arrow-left-circle"></i>
                                        <span class="badge badge-dark" id="subject-{{$loop->iteration}}">{{$question->subject}}</span>
                                        <i class="bi bi-arrow-left-circle"></i>
                                        <span class="badge badge-dark" id="section-{{$question->section}}">بخش{{$question->section}}</span>
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
                                <div class="col-md-2 bg-light">
                                    <div class="">

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
