@extends('layouts.app')
@section('content')

<!-- ページ毎のコンテンツ -->

<h1>新しいタスクの追加ページ</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($task,['route' => 'tasks.store']) !!}
        
        <div class="form-group">
            {!! Form::label('content' , 'タスク：') !!}
            {!! Form::text('content',null,['class'=>'form-controll']) !!}
        </div>
        
        {!! Form::submit('追加',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection