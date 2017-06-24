@extends('layouts.app')

@section('content')
    <h1 class="page-title">{{ meta()->pageTitle() }}</h1>
    <div class="block">
        <p class="lead">We accept <strong>3gp, avi, flv, m4v, mov, mp4, mpeg, mpg, vob, webm and wmv</strong> files up
            to <strong>4 GB</strong> file size.</p>
        {!! Form::open(['files'=>true, 'url'=>url('upload'), 'id'=>'form_upload', 'class' => 'form-horizontal', 'role'=>'form']) !!}

        <div class="form-group">
            <div class="col-sm-12">
                <div id="fileuploader"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Video Title', 'required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>'3', 'placeholder'=>'Video Description', 'required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                {!! Form::submit('Upload', ['id'=>'btn_upload', 'class'=>'btn btn-info']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
    @include('blocks.fineuploader')
@endsection
