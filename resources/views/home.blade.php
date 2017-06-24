@extends('layouts.app')

@section('content')
    <div class="block">
        <h1 class="page-title">{{ meta()->pageTitle() }}</h1>
        <p class="lead">Source code of this website is open source: <a href="https://github.com/bhutanio/videostream" title="GitHub Repo">GitHub Repo</a></p>
        <p class="lead">Please help us improve this site by contributing on GitHub.</p>
    </div>
@endsection
