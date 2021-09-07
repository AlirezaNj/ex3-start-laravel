@extends('admin.layouts.master')
@section('title')
    ویرایش امتحان
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ویرایش امتحان</h1>
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
    <form action="{{route('exams.update' , ['exam'=>$exam])}}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">نام امتحان :  </label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$exam->name}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lesson">درس :  </label>
                    <input type="text" name="lesson" class="form-control" id="lesson" value="{{$exam->lesson}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="grade">پایه : </label>
                    <select name="grade" id="grade" class="form-select">
                        @foreach(Config::get('constants.grade') as $key=>$value)
                            <option value="{{$key}}" {{ ($key==$exam->grade) ? 'selected' : '' }}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject">مباحث :  </label>
                    <input type="text" name="subject" class="form-control" id="subject" value="{{$exam->subject}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="teacher_id">استاد : </label>
                    <select class="form-select" name="teacher_id" aria-label="">
                        @foreach($teachers as $teacher)
                            <option value="{{$teacher->id}}" {{ (in_array($teacher->id,$exam->users()->pluck('id')->toArray())) ? 'selected' : '' }}>{{$teacher->name}} {{$teacher->family}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date">تاریخ : </label>
                    <input type="date" name="date" class="form-control" id="date" value="{{$exam->date}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="start_time">ساعت شروع : </label>
                    <input type="time" name="start_time" class="form-control" id="start_time" value="{{$exam->start_time}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="end_time">ساعت پایان : </label>
                    <input type="time" name="end_time" class="form-control" id="end_time" value="{{$exam->end_time}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="student_ids[]">دانش آموزان : </label>
            <select class="form-select" name="student_ids[]" aria-label="" multiple>
                @foreach($students as $student)
                    <option value="{{$student->id}}" {{ (in_array($student->id,$exam->users()->pluck('id')->toArray())) ? 'selected' : '' }}>{{$student->name}} {{$student->family}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="row">
                @foreach($questions as $question)
                    <div class="col-md-4 d-flex align-items-stretch my-1">
                        <div class="card  shadow w-100">
                            <div class="card-header">
                                <input type="checkbox" name="question_ids[]" class="form-check-input" id="question" value="{{$question->id}}"
                                {{in_array($question->id , $questionsSelected) ? 'checked' : ''}}>
                                <lable for="question" class="form-check-label"> سوال شماره {{$loop->iteration}}</lable>
                            </div>
                            <div class="card-body">
                                {{$question->questionText}}
                            </div>
                            <div class="card-footer">
                                <div class="form-check">
                                </div>
                                <span>
                            فصل  {{$question->chapter}}
                        </span>
                                <span>
                            / {{$question->subject}}
                        </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
@endsection
