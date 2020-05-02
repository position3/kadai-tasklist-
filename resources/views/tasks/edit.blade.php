@extends('layouts.app')
@section('content')

<!-- ページ毎のコンテンツ -->
<h1>id: {{$task->id}}のタスク編集ページ</h1>

<div class="row">
 <div class="col-6">
    {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put']) !!}
    
    <div class="form-group">
        {!! Form::label('content','タスク：') !!}
        {!! Form::text('content',null,['class'=>'form-control']) !!}
    </div>
    
    {!! Form::submit('更新',['class' => 'btn btn-primary']) !!}
    
    {!!form::close() !!}
 </div>
</div>
@endsection