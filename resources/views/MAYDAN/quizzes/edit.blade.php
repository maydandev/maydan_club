@extends('new_dashboard.layouts.app')
@section('content')
@section('title','تعديل إختبار')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">تعديل إختبار</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"
                                style="font-family: 'Droid Arabic Kufi', serif;">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/votes"
                                style="font-family: 'Droid Arabic Kufi', serif;">الإختبارات</a>
                        </li>
                        <li class="breadcrumb-item active">تعديل إختبار
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
                        <h4 class="card-title">تعديل إختبار</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="/admin/quizzes/{{$quiz->id}}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">إسم الإختبار</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('headline') is-invalid @enderror"
                                                    name="headline" placeholder="إسم الإختبار"
                                                    value="{{$quiz->headline}}" required>

                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label>الصورة</label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                name="image">

                                        </div>
                                        <div class="form-group col-md-6 col-sm-12 mb-3">
                                            <label>المؤقت</label>
                                            <input type="number"
                                                class="form-control @error('timer') is-invalid @enderror" name="timer"
                                                required value="{{$quiz->timer}}">

                                        </div>
                                        @foreach($quizze_questions as $quizze_question)

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">السؤال</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('question') is-invalid @enderror"
                                                    name="question_{{$quizze_question->id}}" placeholder="السؤال"
                                                    value="{{ $quizze_question->quizze_question }}" required>
                                                <input name="question_ids[]" type="hidden"
                                                    value="{{$quizze_question->id}}" />

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
                                                    @foreach ($quizze_question->options as $key=>$option)
                                                    <div class="input-group  mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <div class="vs-radio-con">
                                                                    <input type="radio"
                                                                        name="best_answer_question_{{$quizze_question->id}}"
                                                                        @if($option->is_best_answer == 1) checked @endif
                                                                    value="{{$option->id}}">
                                                                    <span class="vs-radio vs-radio-sm">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="answer_question_{{$option->id}}"
                                                            class="form-control" value="{{ $option->quizze_option }}">
                                                        <input name="answers_ids[]" type="hidden"
                                                            value="{{$option->id}}" />
                                                        <div class="input-group-append" id="button-addon2">
                                                            <a href="/admin/quizzes/{{$option->id}}/delete_option"
                                                                class="btn btn-danger confirm" type="button">
                                                                <span class="fa fa-minus" aria-hidden="true"></span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    @endforeach

                                                    <div id="quizee_fields">
                                                    </div>
                                                    <div class="input-group">
                                                        <button class="btn btn-success" type="button"
                                                            data-toggle="modal" data-target="#default"
                                                            name="add_more_option" value="{{$quizze_question->id}}"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>

                                                    <div class="clear"></div>

                                                </fieldset>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success mr-1 mb-1">تعديل</button>
                                            <a href="/admin/quizzes/{{$quiz->id}}/more"
                                                class="btn btn-info mr-1 mb-1">إضافة
                                                سؤال</a>
                                            <a href="/admin/quizzes"
                                                class="btn btn-danger mr-1 mb-1">الغاء</a>
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

<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d2aa5c;">
                <h4 class="modal-title" id="myModalLabel1" style="color: white">إضافة جواب</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #d2aa5c">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="option">جاري التحميل ...</span>
            </div>
        </div>
    </div>
</div>
@endsection
