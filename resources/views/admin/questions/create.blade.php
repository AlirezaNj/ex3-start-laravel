@extends('admin.layouts.master')
@section('title')
    ساخت سوال
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ساخت سوال</h1>
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
    <form action="{{route('questions.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="questionText">متن سوال :  </label>
                    <input type="text" name="questionText" class="form-control" id="questionText" placeholder="لطفا متن سوال را وارد کنید">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="type">نوع سوال : </label>
                    <select class="form-select" id="type" name="type">
                        @foreach(Config::get('constants.type') as $value)
                            <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <div class="col-md-6 opt">
                <div class="form-group">
                    <label for="opt1">گزینه اول : </label>
                    <input type="text" name="opt1" class="form-control" id="opt1" placeholder="لطفا گزینه اول را وارد کنید">
                </div>
            </div>
            <div class="col-md-6 opt">
                <div class="form-group">
                    <label for="opt2">گزینه دوم : </label>
                    <input type="text" name="opt2" class="form-control" id="opt2"  placeholder="لطفا گزینه دوم را وارد کنید">
                </div>
            </div>
            <div class="col-md-6 opt">
                <div class="form-group">
                    <label for="opt3">گزینه سوم : </label>
                    <input type="text" name="opt3" class="form-control" id="opt3"  placeholder="لطفا گزینه سوم را وارد کنید">
                </div>
            </div>
            <div class="col-md-6 opt">
                <div class="form-group">
                    <label for="opt4">گزینه چهارم : </label>
                    <input type="text" name="opt4" class="form-control" id="opt4"  placeholder="لطفا گزینه چهارم را وارد کنید">
                </div>
            </div>
            <div class="col-md-6 opt">
                <div class="form-group">
                    <label for="correctOpt">گزینه صحیح : </label>
                    <input type="number" name="correctOpt" class="form-control" id="correctOpt"  placeholder="لطفا عدد گزینه صحیح را وارد کنید">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="answer">جواب تشریحی : </label>
                    <input type="text" name="answer" class="form-control" id="answer"  placeholder="لطفا جواب تشریحی سوال را وارد کنید">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lesson">درس :  </label>
                    <input type="text" name="lesson" class="form-control" id="lesson"  placeholder="زیست شناسی، ریاضی،...">
                </div>
            </div>
            <div class="col-md-6">
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
                    <label for="chapter">فصل :  </label>
                    <input type="number" name="chapter" class="form-control" id="chapter"  placeholder="لطفا عدد فصل مورد نظر را وارد کنید">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="section">بخش :  </label>
                    <input type="number" name="section" class="form-control" id="section"  placeholder="لطفا عدد بخش مورد نظر را وارد کنید">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="page">صفحه :  </label>
                    <input type="number" name="page" class="form-control" id="page"  placeholder="لطفا شماره صفحه موردنظر را وارد کنید">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="level">سطح سوال : </label>
                    <select name="level" id="level" class="form-select">
                        @foreach(Config::get('constants.level') as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject">مبحث :  </label>
                    <input type="text" name="subject" class="form-control" id="subject"  placeholder="گوارش، مشتق، ...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="source">منبع :  </label>
                    <input type="text" name="source" class="form-control" id="source" placeholder="تالیفی، قلم چی، ...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="author">طراح سوال :  </label>
                    <input type="text" name="author" class="form-control" id="author"  placeholder="لطفا نام و نام خانوادگی طراح سوال را وارد کنید">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>

@endsection
@section('script')
    <script>
        let options = document.querySelectorAll('.opt');
        function appear(){
            for (let option of options) {
                option.lastElementChild.lastElementChild.value = ''
                option.style.display = 'inline'
            }
        }
        function disappear(){
            for (let option of options) {
                option.style.display = 'none'
            }
        }
        disappear()
        document.getElementById('type').addEventListener('change', function (e) {
            if (e.target.value === 'تشریحی') {
                tashrihi();
            } else if (e.target.value === 'چهار گزینه ای') {
                fourOptions()
            } else if (e.target.value === 'صحیح / غلط') {
                trueFalse()
            } else if (e.target.value === 'دو گزینه ای') {
                twoOptions()
            } else {
                threeOptions()
            }
        });
        function tashrihi(){
            disappear()
        }
        function fourOptions(){
            appear()
        }
        function trueFalse(){
            disappear()
            options[0].style.display = 'inline'
            options[0].lastElementChild.lastElementChild.value = 'صحیح'
            options[1].style.display = 'inline'
            options[1].lastElementChild.lastElementChild.value = 'غلط'
            options[4].style.display = 'inline'
        }
        function twoOptions(){
            disappear()
            options[0].style.display = 'inline'
            options[0].lastElementChild.lastElementChild.value = ''
            options[1].style.display = 'inline'
            options[1].lastElementChild.lastElementChild.value = ''
            options[4].style.display = 'inline'
        }
        function threeOptions(){
            disappear()
            options[0].style.display = 'inline'
            options[0].lastElementChild.lastElementChild.value = ''
            options[1].style.display = 'inline'
            options[1].lastElementChild.lastElementChild.value = ''
            options[2].style.display = 'inline'
            options[2].lastElementChild.lastElementChild.value = ''
            options[4].style.display = 'inline'
        }
    </script>
@endsection
