@extends('layouts.app')
@section('content')
@section('title','إضافة إختبار')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">الإختبارات </h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"
                                style="font-family: 'Droid Arabic Kufi', serif;">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active" style="font-family: 'Droid Arabic Kufi', serif;">الإختبارات
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">


    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-2">الإختبارات</h4>
                        <a href="/admin/quizzes/create" class="btn btn-success mr-1 mb-1">إضافة
                            إختبار</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>إسم الإختبار</th>
                                            <th>متوسط الدرجات</th>
                                            <th>المشتركين</th>
                                            <th>أعلى درجة</th>
                                            <th>تاريخ الإنشاء</th>
                                            <th>خياراتي</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x=1;?>
                                        @foreach ($quizzes as $quiz)
                                        <tr data-href='/'>
                                            <td scope="row"><?php echo $x++;?></td>
                                            <td>{{ ($quiz->post) ? $quiz->post->title : ''  }}</td>
                                            <td>{{ $quiz->average_score  }}</td>
                                            <td><a href="/quizzes/{{$quiz->id}}/participants"
                                                    title="show voters">{{ $quiz->total_participants  }}</a> </td>
                                            <td>{{ $quiz->top_result  }}</td>
                                            <td>{{$quiz->created_at->format('Y-m-d')}}</td>
                                            <td>
                                                <a href="/admin/quizzes/{{$quiz->id}}/edit"
                                                    class="btn btn-success mr-1 mb-1 btn-sm"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger mr-1 mb-1 btn-sm" onclick="confirm('هل أنت متأكد ؟ ');event.preventDefault(); 
                                                document.getElementById('destroy-quize_{{$quiz->id}}').submit();"><i
                                                        class="fa fa-trash"></i></a>
                                                <form id="destroy-quize_{{$quiz->id}}" action="/admin/quizzes/{{$quiz->id}}/destroy" method="POST" style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>


                                                        <!-- <a href="/admin/quizzes/vote_delete/{{$quiz->id}}"
                                                    class="btn btn-danger mr-1 mb-1 btn-sm confirm"><i
                                                        class="fa fa-trash"></i></a> -->
                                            </td>
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->

</div>
@endsection
