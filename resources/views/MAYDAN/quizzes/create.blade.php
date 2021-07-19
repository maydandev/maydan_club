@extends('layouts.app')
@section('content')
@section('title','إضافة إختبار')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">إضافة إختبار</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"
                                style="font-family: 'Droid Arabic Kufi', serif;">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/votes"
                                style="font-family: 'Droid Arabic Kufi', serif;">الإختبارات</a>
                        </li>
                        <li class="breadcrumb-item active">إضافة إختبار
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">إضافة إختبار</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="/admin/quizzes"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">إسم الإختبار</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('headline') is-invalid @enderror"
                                                    name="headline" placeholder="إسم الإختبار"
                                                    value="{{old('headline')}}" required>

                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label>الصورة</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                name="image" required>

                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label>المؤقت</label>
                                            <input type="number"
                                                class="form-control @error('timer') is-invalid @enderror" name="timer"
                                                required>

                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">السؤال</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('question') is-invalid @enderror"
                                                    name="question" placeholder="السؤال" value="{{old('question')}}"
                                                    required>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">الخيارات</label>
                                                <fieldset>

                                                    {{-- <div class="input-group mb-2">
                                                        <input type="text" class="form-control" name="question_option[]"
                                                            value="" placeholder="الإجابة">
                                                    </div> --}}
                                                    <div class="input-group  mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="best_answer_question"
                                                                        value="0">
                                                                    <span class="vs-radio vs-radio-sm">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="answer_question[]" class="form-control"
                                                            aria-label="Text input with checkbox">
                                                    </div>
                                                    <div id="quizee_fields">
                                                    </div>
                                                    <div class="input-group">
                                                        <button class="btn btn-success" type="button"
                                                            onclick="quizee_fields();"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>

                                                    <div class="clear"></div>

                                                </fieldset>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">حفظ</button>
                                            <button type="submit" name="more" value="more"
                                                class="btn btn-info mr-1 mb-1">إضافة سؤال
                                                أخر
                                            </button>
                                            {{-- <button type="reset"
                                                class="btn btn-outline-warning mr-1 mb-1">Reset</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
</div>
@endsection
