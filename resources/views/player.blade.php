@extends('layouts.app')

@section('content')
    <h1 class="page-title">{{ meta()->pageTitle() }}</h1>
    <div class="block">
        <div id="hero">
            <div id="output">
                <div id="progressBar"></div>
                <video id="video-player" class="video-js vjs-default-skin" controls preload="auto" data-setup="{}" poster="{{ url('poster/'.$video->id.'-'.mt_rand(1,5).'.png') }}">
                    {{--<source src="{{ url($video->file_path.$video->file_name) }}" type="video/mp4"/>--}}
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            </div>

            <div id="status">
                <div>
                    <span class="show-leech">Playing </span>
                    <span class="show-seed">Seeding </span>
                    <code>
                        <span id="torrentName">Filename</span>
                    </code>
                    <span class="show-leech"> from </span>
                    <span class="show-seed"> to </span>
                    <code id="numPeers">0 peers</code>.
                </div>
                <div>
                    <code id="downloaded"></code>
                    of <code id="total"></code>
                    — <span id="remaining"></span><br/>
                    &#x2198;<code id="downloadSpeed">0 b/s</code>
                    / &#x2197;<code id="uploadSpeed">0 b/s</code>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('header_css')
    <link href="https://vjs.zencdn.net/5.19/video-js.css" rel="stylesheet">
    <style>
        .video-js {
            width: 100%;
            min-width: 100%;
            height: 640px;
        }

        #output video {
            width: 100%;
        }

        #progressBar {
            height: 5px;
            width: 0%;
            background-color: #35b44f;
            transition: width .4s ease-in-out;
        }

        body.is-seed .show-seed {
            display: inline;
        }

        body.is-seed .show-leech {
            display: none;
        }

        .show-seed {
            display: none;
        }

        #status code {
            font-size: 90%;
            font-weight: 700;
            margin-left: 3px;
            margin-right: 3px;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.3);
        }

        .is-seed #hero {
            background-color: #154820;
            transition: .5s .5s background-color ease-in-out;
        }

        #hero {
            background-color: #2a3749;
        }

        #status {
            color: #fff;
            font-size: 17px;
            padding: 5px;
        }
    </style>
@endsection

@section('footer_js')
    <script src="https://vjs.zencdn.net/5.19/video.js"></script>
    <script src="https://cdn.jsdelivr.net/webtorrent/latest/webtorrent.min.js"></script>
    <script src="{{ url(mix('js/webtorrent.js')) }}"></script>
    <script>
        var torrentId = '{{ url('torrent/'.$video->id.'.torrent') }}';
        WebTorrentInit(torrentId);
    </script>
@endsection