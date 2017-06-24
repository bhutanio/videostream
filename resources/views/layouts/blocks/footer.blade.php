<footer>
    <div class="footer-top">
        <div class="container footer-top">
            <div class="row">
                <div class="col-md-6 footer-col text-center">
                    <p>Copyright &copy; {{ env('SITE_NAME') }}</p>
                    <ul class="list-inline">
                        <li><a href="{{ url('about') }}" title="About">About</a></li>
                        <li><a href="{{ url('about/terms') }}" title="Terms of Service">Terms</a></li>
                        <li><a href="{{ url('about/privacy-policy') }}" title="Privacy Policy">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 footer-col text-center">
                    <h4 class="text-info"><a href="{{ url('about') }}">About</a> {{ env('SITE_NAME') }}</h4>
                    <p>{{ env('SITE_NAME') }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>