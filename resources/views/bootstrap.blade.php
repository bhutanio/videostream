@extends('layouts.app')

@section('content')
    <div class="block">
        <h1>h1. Bootstrap heading</h1>
        <h2>h2. Bootstrap heading</h2>
        <h3>h3. Bootstrap heading</h3>
        <h4>h4. Bootstrap heading</h4>
        <h5>h5. Bootstrap heading</h5>
        <h6>h6. Bootstrap heading</h6>
    </div>
    <div class="block">
        <h1>h1. Bootstrap heading
            <small>Secondary text</small>
        </h1>
        <h2>h2. Bootstrap heading
            <small>Secondary text</small>
        </h2>
        <h3>h3. Bootstrap heading
            <small>Secondary text</small>
        </h3>
        <h4>h4. Bootstrap heading
            <small>Secondary text</small>
        </h4>
        <h5>h5. Bootstrap heading
            <small>Secondary text</small>
        </h5>
        <h6>h6. Bootstrap heading
            <small>Secondary text</small>
        </h6>
    </div>
    <div class="block">
        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient
            montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>

        <p class="lead">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
            ullamcorper nulla non
            metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
            sem
            nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>

        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget
            metus.
            Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        <p>You can use the mark tag to
            <mark>highlight</mark>
            text.
        </p>
        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
        <p>
            <ins>This line of text is meant to be treated as an addition to the document.</ins>
        </p>
        <p><u>This line of text will render as underlined</u></p>
        <p>
            <small>This line of text is meant to be treated as fine print.</small>
        </p>
        <p><strong>rendered as bold text</strong></p>
        <p><em>rendered as italicized text</em></p>
        <p class="text-left">Left aligned text.</p>
        <p class="text-center">Center aligned text.</p>
        <p class="text-right">Right aligned text.</p>
        <p class="text-justify">Justified text.</p>
        <p class="text-nowrap">No wrap text.</p>
        <p class="text-lowercase">Lowercased text.</p>
        <p class="text-uppercase">Uppercased text.</p>
        <p class="text-capitalize">Capitalized text.</p>
        <p><abbr title="attribute">attr</abbr></p>
        <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>

        <address>
            <strong>Twitter, Inc.</strong><br>
            1355 Market Street, Suite 900<br>
            San Francisco, CA 94103<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
        </address>

        <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">first.last@example.com</a>
        </address>
    </div>
    <div class="block">
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        </blockquote>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
        <blockquote class="blockquote-reverse">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda cum eligendi eveniet id
                illo,
                iste nam officia repellendus soluta! Adipisci at aut delectus dolor eos. Accusamus eos necessitatibus
                non.</p>
        </blockquote>
    </div>
    <div class="block">
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
        <ol>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit</li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ol>
        <dl>
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        </dl>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

    <div class="block">
        <code>
            &lt;?php<br>
            namespace App\Http;<br>
            use Illuminate\Foundation\Http\Kernel as HttpKernel;<br>
            class Kernel extends HttpKernel<br>
            {<br>
            }<br>
            ?&gt;<br>
        </code>
        <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
        <p>To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
            To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd></p>
        <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
        <var>y</var> = <var>m</var><var>x</var> + <var>b</var>
    </div>
    <div class="block">
        <table class="table">
            <caption>Optional table caption.</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <h3>table-striped</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <h3>table-bordered</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <h3>table-condensed</h3>
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Column heading</th>
                    <th>Column heading</th>
                    <th>Column heading</th>
                </tr>
                </thead>
                <tbody>
                <tr class="active">
                    <th scope="row">1</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr class="success">
                    <th scope="row">3</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr class="info">
                    <th scope="row">5</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr class="warning">
                    <th scope="row">7</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                <tr class="danger">
                    <th scope="row">9</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="block">
        <form class="form-horizontal" role="form" method="POST" action="http://animemangadb.local/register">
            <input type="hidden" name="_token" value="GhWl0fS8EFvVqRixVeplnTmSE3XmtDM8d5QTTIhp">
            <div class="form-group">
                <label for="username" class="col-md-4 control-label">Username</label>
                <div class="col-md-6">
                    <input id="username" type="text" class="form-control" name="username" value="username" required="">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="email@example.com" required="">
                </div>
            </div>

            <div class="form-group has-error">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required="">
                    <span class="help-block">
                    <strong>The password confirmation does not match.</strong>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>

    <div class="block">
        <form class="form-horizontal">
            <fieldset>
                <legend>Legend</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Checkbox
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Radios</label>
                    <div class="col-lg-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Option one is this
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Option two can be something else
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Selects</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <br>
                        <select multiple="" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="block">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label" for="focusedInput">Focused input</label>
                <input class="form-control" id="focusedInput" type="text" value="This is focused...">
            </div>

            <div class="form-group">
                <label class="control-label" for="disabledInput">Disabled input</label>
                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
            </div>

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning">Input warning</label>
                <input type="text" class="form-control" id="inputWarning">
            </div>

            <div class="form-group has-error">
                <label class="control-label" for="inputError">Input error</label>
                <input type="text" class="form-control" id="inputError">
            </div>

            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess">Input success</label>
                <input type="text" class="form-control" id="inputSuccess">
            </div>

            <div class="form-group">
                <label class="control-label" for="inputLarge">Large input</label>
                <input class="form-control input-lg" type="text" id="inputLarge">
            </div>

            <div class="form-group">
                <label class="control-label" for="inputDefault">Default input</label>
                <input type="text" class="form-control" id="inputDefault">
            </div>

            <div class="form-group">
                <label class="control-label" for="inputSmall">Small input</label>
                <input class="form-control input-sm" type="text" id="inputSmall">
            </div>

            <div class="form-group">
                <label class="control-label">Input addons</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Button</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <div class="block">
        <p class="">
            <a href="#" class="btn btn-default">Default</a>
            <a href="#" class="btn btn-primary">Primary</a>
            <a href="#" class="btn btn-success">Success</a>
            <a href="#" class="btn btn-info">Info</a>
            <a href="#" class="btn btn-warning">Warning</a>
            <a href="#" class="btn btn-danger">Danger</a>
            <a href="#" class="btn btn-link">Link</a>
        </p>

        <p class="">
            <a href="#" class="btn btn-default disabled">Default</a>
            <a href="#" class="btn btn-primary disabled">Primary</a>
            <a href="#" class="btn btn-success disabled">Success</a>
            <a href="#" class="btn btn-info disabled">Info</a>
            <a href="#" class="btn btn-warning disabled">Warning</a>
            <a href="#" class="btn btn-danger disabled">Danger</a>
            <a href="#" class="btn btn-link disabled">Link</a>
        </p>


        <div style="margin-bottom: 15px;">
            <div class="btn-toolbar " style="margin: 0;">
                <div class="btn-group">
                    <a href="#" class="btn btn-default">Default</a>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Primary</a>
                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn btn-success">Success</a>
                    <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn btn-info">Info</a>
                    <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn btn-warning">Warning</a>
                    <a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <p class="">
            <a href="#" class="btn btn-primary btn-lg">Large button</a>
            <a href="#" class="btn btn-primary">Default button</a>
            <a href="#" class="btn btn-primary btn-sm">Small button</a>
            <a href="#" class="btn btn-primary btn-xs">Mini button</a>
        </p>

        <p class="">
            <a href="#" class="btn btn-default btn-lg btn-block">Block level button</a>
        </p>


        <div class="" style="margin-bottom: 15px;">
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-default">Left</a>
                <a href="#" class="btn btn-default">Middle</a>
                <a href="#" class="btn btn-default">Right</a>
            </div>
        </div>

        <div class="" style="margin-bottom: 15px;">
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a href="#" class="btn btn-default">1</a>
                    <a href="#" class="btn btn-default">2</a>
                    <a href="#" class="btn btn-default">3</a>
                    <a href="#" class="btn btn-default">4</a>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn btn-default">5</a>
                    <a href="#" class="btn btn-default">6</a>
                    <a href="#" class="btn btn-default">7</a>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn btn-default">8</a>
                    <div class="btn-group">
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="btn-group-vertical">
                <a href="#" class="btn btn-default">Button</a>
                <a href="#" class="btn btn-default">Button</a>
                <a href="#" class="btn btn-default">Button</a>
                <a href="#" class="btn btn-default">Button</a>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="bs-example bs-example-images" data-example-id="image-shapes">
            <img alt="256x256" class="img-rounded" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWJlY2Y5NjExOCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YmVjZjk2MTE4Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 256px; height: 256px;">
            <img alt="256x256" class="img-circle" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWJlY2Y5YjZmMCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YmVjZjliNmYwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 256px; height: 256px;">
            <img alt="256x256" class="img-thumbnail" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWJlY2Y5OTIyYyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YmVjZjk5MjJjIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true" style="width: 256px; height: 256px;">
        </div>
    </div>

    <div class="block">
        <style>
            .bs-glyphicons li {
                float: left;
                width: 12.5%;
                font-size: 12px;
                height: 115px;
                padding: 10px;
                line-height: 1.4;
                text-align: center;
            }

            .bs-glyphicons .glyphicon {
                margin-top: 5px;
                margin-bottom: 10px;
                font-size: 24px;
            }

            .bs-glyphicons .glyphicon-class {
                display: block;
                text-align: center;
                word-wrap: break-word;
            }
        </style>
        <div style="margin: 0 -10px 20px; overflow: hidden;">
            <ul class="bs-glyphicons" style="padding-left: 0; list-style: none;">
                <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
                </li>
                <li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plus</span>
                </li>
                <li><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-euro</span>
                </li>
                <li><span class="glyphicon glyphicon-eur" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eur</span>
                </li>
                <li><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-minus</span>
                </li>
                <li><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
                </li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
                </li>
                <li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
                </li>
                <li><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-glass</span>
                </li>
                <li><span class="glyphicon glyphicon-music" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-music</span>
                </li>
                <li><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-search</span>
                </li>
                <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-heart</span>
                </li>
                <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-star</span>
                </li>
                <li><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-star-empty</span></li>
                <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-user</span>
                </li>
                <li><span class="glyphicon glyphicon-film" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-film</span>
                </li>
                <li><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
                </li>
                <li><span class="glyphicon glyphicon-th" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th</span>
                </li>
                <li><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
                </li>
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok</span>
                </li>
                <li><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-remove</span>
                </li>
                <li><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
                </li>
                <li><span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
                </li>
                <li><span class="glyphicon glyphicon-off" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-off</span>
                </li>
                <li><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-signal</span>
                </li>
                <li><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cog</span>
                </li>
                <li><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-trash</span>
                </li>
                <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-home</span>
                </li>
                <li><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-file</span>
                </li>
                <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-time</span>
                </li>
                <li><span class="glyphicon glyphicon-road" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-road</span>
                </li>
                <li><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-download-alt</span></li>
                <li><span class="glyphicon glyphicon-download" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-download</span>
                </li>
                <li><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-upload</span>
                </li>
                <li><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
                </li>
                <li><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-play-circle</span></li>
                <li><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
                </li>
                <li><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
                </li>
                <li><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
                </li>
                <li><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-lock</span>
                </li>
                <li><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-flag</span>
                </li>
                <li><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-headphones</span></li>
                <li><span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-volume-off</span></li>
                <li><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-volume-down</span></li>
                <li><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-volume-up</span></li>
                <li><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
                </li>
                <li><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
                </li>
                <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tag</span>
                </li>
                <li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tags</span>
                </li>
                <li><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-book</span>
                </li>
                <li><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
                </li>
                <li><span class="glyphicon glyphicon-print" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-print</span>
                </li>
                <li><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-camera</span>
                </li>
                <li><span class="glyphicon glyphicon-font" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-font</span>
                </li>
                <li><span class="glyphicon glyphicon-bold" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bold</span>
                </li>
                <li><span class="glyphicon glyphicon-italic" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-italic</span>
                </li>
                <li><span class="glyphicon glyphicon-text-height" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-text-height</span></li>
                <li><span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-text-width</span></li>
                <li><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-align-left</span></li>
                <li><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-align-center</span></li>
                <li><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-align-right</span></li>
                <li><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-align-justify</span></li>
                <li><span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-list</span>
                </li>
                <li><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-indent-left</span></li>
                <li><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-indent-right</span></li>
                <li><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span></li>
                <li><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-picture</span>
                </li>
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-map-marker</span></li>
                <li><span class="glyphicon glyphicon-adjust" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
                </li>
                <li><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tint</span>
                </li>
                <li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-edit</span>
                </li>
                <li><span class="glyphicon glyphicon-share" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-share</span>
                </li>
                <li><span class="glyphicon glyphicon-check" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-check</span>
                </li>
                <li><span class="glyphicon glyphicon-move" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-move</span>
                </li>
                <li><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-step-backward</span></li>
                <li><span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span></li>
                <li><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-backward</span>
                </li>
                <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-play</span>
                </li>
                <li><span class="glyphicon glyphicon-pause" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pause</span>
                </li>
                <li><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-stop</span>
                </li>
                <li><span class="glyphicon glyphicon-forward" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-forward</span>
                </li>
                <li><span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span></li>
                <li><span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-step-forward</span></li>
                <li><span class="glyphicon glyphicon-eject" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eject</span>
                </li>
                <li><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span></li>
                <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span></li>
                <li><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span></li>
                <li><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span></li>
                <li><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span></li>
                <li><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
                </li>
                <li><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-question-sign</span></li>
                <li><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-info-sign</span></li>
                <li><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-screenshot</span></li>
                <li><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span></li>
                <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span></li>
                <li><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span></li>
                <li><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span></li>
                <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span></li>
                <li><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
                </li>
                <li><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span></li>
                <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-share-alt</span></li>
                <li><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-resize-full</span></li>
                <li><span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-resize-small</span></li>
                <li><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span></li>
                <li><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-gift</span>
                </li>
                <li><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
                </li>
                <li><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-fire</span>
                </li>
                <li><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
                </li>
                <li><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-eye-close</span></li>
                <li><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span></li>
                <li><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-plane</span>
                </li>
                <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
                </li>
                <li><span class="glyphicon glyphicon-random" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-random</span>
                </li>
                <li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-comment</span>
                </li>
                <li><span class="glyphicon glyphicon-magnet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
                </li>
                <li><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span></li>
                <li><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span></li>
                <li><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
                </li>
                <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span></li>
                <li><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-folder-close</span></li>
                <li><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-folder-open</span></li>
                <li><span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span></li>
                <li><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span></li>
                <li><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
                </li>
                <li><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
                </li>
                <li><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bell</span>
                </li>
                <li><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-certificate</span></li>
                <li><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span></li>
                <li><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span></li>
                <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-hand-right</span></li>
                <li><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-hand-left</span></li>
                <li><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
                </li>
                <li><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-hand-down</span></li>
                <li><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span></li>
                <li><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span></li>
                <li><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span></li>
                <li><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span></li>
                <li><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-globe</span>
                </li>
                <li><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
                </li>
                <li><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
                </li>
                <li><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-filter</span>
                </li>
                <li><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-briefcase</span></li>
                <li><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span></li>
                <li><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-dashboard</span></li>
                <li><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-paperclip</span></li>
                <li><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span></li>
                <li><span class="glyphicon glyphicon-link" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-link</span>
                </li>
                <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-phone</span>
                </li>
                <li><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
                </li>
                <li><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-usd</span>
                </li>
                <li><span class="glyphicon glyphicon-gbp" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
                </li>
                <li><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sort</span>
                </li>
                <li><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span></li>
                <li><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span></li>
                <li><span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span></li>
                <li><span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span></li>
                <li><span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span></li>
                <li><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span></li>
                <li><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-unchecked</span></li>
                <li><span class="glyphicon glyphicon-expand" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-expand</span>
                </li>
                <li><span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span></li>
                <li><span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span></li>
                <li><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
                </li>
                <li><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-flash</span>
                </li>
                <li><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
                </li>
                <li><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-new-window</span></li>
                <li><span class="glyphicon glyphicon-record" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-record</span>
                </li>
                <li><span class="glyphicon glyphicon-save" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-save</span>
                </li>
                <li><span class="glyphicon glyphicon-open" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-open</span>
                </li>
                <li><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-saved</span>
                </li>
                <li><span class="glyphicon glyphicon-import" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-import</span>
                </li>
                <li><span class="glyphicon glyphicon-export" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-export</span>
                </li>
                <li><span class="glyphicon glyphicon-send" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-send</span>
                </li>
                <li><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span></li>
                <li><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span></li>
                <li><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span></li>
                <li><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span></li>
                <li><span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span></li>
                <li><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-credit-card</span></li>
                <li><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
                </li>
                <li><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
                </li>
                <li><span class="glyphicon glyphicon-header" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-header</span>
                </li>
                <li><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-compressed</span></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
                </li>
                <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span></li>
                <li><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tower</span>
                </li>
                <li><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-stats</span>
                </li>
                <li><span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
                </li>
                <li><span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
                </li>
                <li><span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-subtitles</span></li>
                <li><span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span></li>
                <li><span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span></li>
                <li><span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span></li>
                <li><span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span></li>
                <li><span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span></li>
                <li><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span></li>
                <li><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span></li>
                <li><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span></li>
                <li><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span></li>
                <li><span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span></li>
                <li><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span></li>
                <li><span class="glyphicon glyphicon-cd" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-cd</span>
                </li>
                <li><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-save-file</span></li>
                <li><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-open-file</span></li>
                <li><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-level-up</span>
                </li>
                <li><span class="glyphicon glyphicon-copy" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-copy</span>
                </li>
                <li><span class="glyphicon glyphicon-paste" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-paste</span>
                </li>
                <li><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-alert</span>
                </li>
                <li><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-equalizer</span></li>
                <li><span class="glyphicon glyphicon-king" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-king</span>
                </li>
                <li><span class="glyphicon glyphicon-queen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-queen</span>
                </li>
                <li><span class="glyphicon glyphicon-pawn" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-pawn</span>
                </li>
                <li><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bishop</span>
                </li>
                <li><span class="glyphicon glyphicon-knight" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-knight</span>
                </li>
                <li><span class="glyphicon glyphicon-baby-formula" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-baby-formula</span></li>
                <li><span class="glyphicon glyphicon-tent" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-tent</span>
                </li>
                <li><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-blackboard</span></li>
                <li><span class="glyphicon glyphicon-bed" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bed</span>
                </li>
                <li><span class="glyphicon glyphicon-apple" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-apple</span>
                </li>
                <li><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-erase</span>
                </li>
                <li><span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-hourglass</span></li>
                <li><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-lamp</span>
                </li>
                <li><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-duplicate</span></li>
                <li><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span></li>
                <li><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-scissors</span>
                </li>
                <li><span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-bitcoin</span>
                </li>
                <li><span class="glyphicon glyphicon-btc" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-btc</span>
                </li>
                <li><span class="glyphicon glyphicon-xbt" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-xbt</span>
                </li>
                <li><span class="glyphicon glyphicon-yen" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-yen</span>
                </li>
                <li><span class="glyphicon glyphicon-jpy" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-jpy</span>
                </li>
                <li><span class="glyphicon glyphicon-ruble" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-ruble</span>
                </li>
                <li><span class="glyphicon glyphicon-rub" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-rub</span>
                </li>
                <li><span class="glyphicon glyphicon-scale" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-scale</span>
                </li>
                <li><span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span></li>
                <li><span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span></li>
                <li><span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-education</span></li>
                <li><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span></li>
                <li><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-option-vertical</span></li>
                <li><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span></li>
                <li><span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-modal-window</span></li>
                <li><span class="glyphicon glyphicon-oil" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-oil</span>
                </li>
                <li><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-grain</span>
                </li>
                <li><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-sunglasses</span></li>
                <li><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-text-size</span></li>
                <li><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-text-color</span></li>
                <li><span class="glyphicon glyphicon-text-background" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-text-background</span></li>
                <li><span class="glyphicon glyphicon-object-align-top" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-object-align-top</span></li>
                <li><span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span></li>
                <li><span class="glyphicon glyphicon-object-align-horizontal" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span></li>
                <li><span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-object-align-left</span></li>
                <li><span class="glyphicon glyphicon-object-align-vertical" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span></li>
                <li><span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-object-align-right</span></li>
                <li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-triangle-right</span></li>
                <li><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-triangle-left</span></li>
                <li><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span></li>
                <li><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-triangle-top</span></li>
                <li><span class="glyphicon glyphicon-console" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-console</span>
                </li>
                <li><span class="glyphicon glyphicon-superscript" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-superscript</span></li>
                <li><span class="glyphicon glyphicon-subscript" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-subscript</span></li>
                <li><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-menu-left</span></li>
                <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-menu-right</span></li>
                <li><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    <span class="glyphicon-class">glyphicon glyphicon-menu-down</span></li>
                <li><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span> <span class="glyphicon-class">glyphicon glyphicon-menu-up</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="block">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="block">
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <h4>Danger!</h4>
            <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent
                commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
        </div>
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <h4>Warning!</h4>
            <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent
                commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
        </div>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert
                message</a>.
        </div>
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not
            super important.
        </div>
        <div class="bs-component" style="margin-bottom: 40px;">
            <span class="label label-default">Default</span>
            <span class="label label-primary">Primary</span>
            <span class="label label-success">Success</span>
            <span class="label label-warning">Warning</span>
            <span class="label label-danger">Danger</span>
            <span class="label label-info">Info</span>
        </div>
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
            <li><a href="#">Profile <span class="badge"></span></a></li>
            <li><a href="#">Messages <span class="badge">3</span></a></li>
        </ul>
    </div>
    <div class="block">
        <div class="row">
            <div class="col-lg-12">
                <h3 id="progress-basic">Basic</h3>
                <div class="bs-component">
                    <div class="progress">
                        <div class="progress-bar" style="width: 60%;"></div>
                    </div>
                </div>

                <h3 id="progress-alternatives">Contextual alternatives</h3>
                <div class="bs-component">
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                    </div>
                </div>

                <h3 id="progress-striped">Striped</h3>
                <div class="bs-component">
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                    </div>

                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                    </div>

                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                    </div>

                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                    </div>
                </div>

                <h3 id="progress-animated">Animated</h3>
                <div class="bs-component">
                    <div class="progress progress-striped active">
                        <div class="progress-bar" style="width: 45%"></div>
                    </div>
                </div>

                <h3 id="progress-stacked">Stacked</h3>
                <div class="bs-component">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                        <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                        <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="row">
            <div class="col-lg-4">
                <h2 id="nav-tabs">Tabs</h2>
                <div class="bs-component">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                        <li><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li class="disabled"><a>Disabled</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                                <li class="divider"></li>
                                <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                                helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu
                                banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                                Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson
                                artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo
                                enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                organic, assumenda labore aesthetic magna delectus mollit.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown1">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                pitchfork.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown2">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold
                                out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack
                                portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred
                                vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral
                                locavore cosby sweater.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 id="nav-pills">Pills</h2>
                <div class="bs-component">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="disabled"><a href="#">Disabled</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="bs-component">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="disabled"><a href="#">Disabled</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 id="nav-breadcrumbs">Breadcrumbs</h2>
                <div class="bs-component">
                    <ul class="breadcrumb">
                        <li class="active">Home</li>
                    </ul>

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Library</li>
                    </ul>

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Library</a></li>
                        <li class="active">Data</li>
                    </ul>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <h2 id="pagination">Pagination</h2>
                <div class="bs-component">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>

                    <ul class="pagination pagination-lg">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>

                    <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 id="pager">Pager</h2>
                <div class="bs-component">
                    <ul class="pager">
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>

                    <ul class="pager">
                        <li class="previous disabled"><a href="#">← Older</a></li>
                        <li class="next"><a href="#">Newer →</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    <div class="block">
        <div class="row">
            <div class="col-lg-12">
                <div class="bs-component">
                    <div class="jumbotron">
                        <h1>Jumbotron</h1>
                        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                            featured content or information.</p>
                        <p><a class="btn btn-primary btn-lg">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>List groups</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="bs-component">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            Cras justo odio
                        </li>
                        <li class="list-group-item">
                            <span class="badge">2</span>
                            Dapibus ac facilisis in
                        </li>
                        <li class="list-group-item">
                            <span class="badge">1</span>
                            Morbi leo risus
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in
                        </a>
                        <a href="#" class="list-group-item">Morbi leo risus
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas
                                sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas
                                sed diam eget risus varius blandit.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <h2>Panels</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Basic panel
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Panel heading</div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            Panel content
                        </div>
                        <div class="panel-footer">Panel footer</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel primary</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel success</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>

                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel warning</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel danger</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel info</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2>Wells</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="well">
                        Look, I'm in a well!
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="well well-sm">
                        Look, I'm in a small well!
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bs-component">
                    <div class="well well-lg">
                        Look, I'm in a large well!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <style>
            .bs-component .modal {
                position: relative;
                top: auto;
                right: auto;
                left: auto;
                bottom: auto;
                z-index: 1;
                display: block;
            }
        </style>
        <div class="bs-component">
            <div class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque fuga, voluptatibus.
                                Alias commodi culpa dolore enim facilis illo iste iure labore minus mollitia, nesciunt
                                nostrum numquam obcaecati similique totam voluptates.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="bs-component">
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
                Left
            </button>

            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" aria-describedby="popover996377">
                Top
            </button>

            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
              sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" aria-describedby="popover895326">
                Bottom
            </button>

            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" aria-describedby="popover126865">
                Right
            </button>
        </div>
        <hr>
        <div class="bs-component">
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">
                Left
            </button>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                Top
            </button>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">
                Bottom
            </button>

            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">
                Right
            </button>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
        </div>
    </div>
    <div class="block">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTViZWQxZjRlYzIgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWJlZDFmNGVjMiI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption"><h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a>
                            <a href="#" class="btn btn-default" role="button">Button</a></p></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTViZWQxZjRkZGUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWJlZDFmNGRkZSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption"><h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a>
                            <a href="#" class="btn btn-default" role="button">Button</a></p></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img alt="100%x200" data-src="holder.js/100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTViZWQxZjQ3MWEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWJlZDFmNDcxYSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption"><h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a>
                            <a href="#" class="btn btn-default" role="button">Button</a></p></div>
                </div>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="bs-example" data-example-id="simple-carousel">
            <div class="carousel slide" id="carousel-example-generic" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img alt="First slide [900x500]" data-src="holder.js/900x500/auto/#777:#555/text:First slide" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNzc3OiM1NTUvdGV4dDpGaXJzdCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1YmVkMjM1NWI5IHRleHQgeyBmaWxsOiM1NTU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTViZWQyMzU1YjkiPjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNzc3Ii8+PGc+PHRleHQgeD0iMzA4LjI5Njg3NSIgeT0iMjcwLjEiPkZpcnN0IHNsaWRlPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true">
                    </div>
                    <div class="item">
                        <img alt="Second slide [900x500]" data-src="holder.js/900x500/auto/#666:#444/text:Second slide" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNjY2OiM0NDQvdGV4dDpTZWNvbmQgc2xpZGUKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWJlZDIzMDllYyB0ZXh0IHsgZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1YmVkMjMwOWVjIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjI2NC45NTMxMjUiIHk9IjI3MC4xIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                    </div>
                    <div class="item">
                        <img alt="Third slide [900x500]" data-src="holder.js/900x500/auto/#555:#333/text:Third slide" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNTU1OiMzMzMvdGV4dDpUaGlyZCBzbGlkZQpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE1YmVkMjMyN2Q1IHRleHQgeyBmaWxsOiMzMzM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTViZWQyMzI3ZDUiPjxyZWN0IHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjNTU1Ii8+PGc+PHRleHQgeD0iMjk4LjMyMDMxMjUiIHk9IjI3MC4xIj5UaGlyZCBzbGlkZTwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
                    </div>
                </div>
                <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>
                </a> <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>
                </a></div>
        </div>
    </div>
@endsection