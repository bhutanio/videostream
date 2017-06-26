@extends('layouts.app')

@section('content')
    <h1 class="page-title">{{ meta()->pageTitle() }}</h1>
    <div class="block">
        <div class="row">
            @foreach($videos as $video)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail video-block">
                        <div class="poster-block">
                            <a href="{{ url('player/'.$video->id) }}" title="Watch {{ $video->title }}">
                                <img src="{{ url('poster/'.$video->id.'-'.mt_rand(1,5).'.png') }}" class="video-poster" data-gif="{{ url($video->file_path.$video->file_hash.'_0'.mt_rand(1,3).'.gif') }}" title="{{ $video->title }}"></a>
                        </div>
                        <div class="caption">
                            <p>
                                <a href="{{ url('player/'.$video->id) }}" title="Watch {{ $video->title }}">{{ $video->title }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-sm-12 text-center">{!! $videos->render() !!}</div>
        </div>
    </div>
@endsection

@section('header_css')
    <style>
        .video-block {
            min-height: 270px;
        }

        .poster-block {
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .poster-block img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
@endsection

@section('footer_js')
    <script>
        (function () {
            var sourceSwap = function () {
                var $this = $(this);
                var newSource = $this.data('gif');
                $this.data('gif', $this.attr('src'));
                $this.attr('src', newSource);
            };

            $(function () {
                $('img.video-poster').hover(sourceSwap, sourceSwap);
            });
        })();
    </script>
@endsection