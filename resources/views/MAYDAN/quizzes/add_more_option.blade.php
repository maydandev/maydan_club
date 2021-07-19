<div class="col-md-12 col-12">
    <h4 class="card-title">{{$quizze_question->quizze_question}}</h4>
    <form class="form form-vertical" action="/admin/quizzes/{{$quizze_question->id}}/add_more_option" method="post">
        @csrf
        <div class="form-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <fieldset>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <div class="vs-radio-con">
                                            <input type="radio" name="best_answer_question">
                                            <span class="vs-radio vs-radio-sm">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button"
                                    name="answer_question">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success mr-1 mb-1">إضافة</button>
                </div>
            </div>
        </div>
    </form>
</div>
