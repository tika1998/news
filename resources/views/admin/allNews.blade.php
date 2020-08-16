@extends('admin.layoutsAd.app')

@section('content')

    <div class="row">
        <div class="col-12 mt-4">
            <h4 class="mb-0">Card columns</h4>
            <p class="text-muted mt-0 font-12">Cards can be organized into Masonry-like columns with just
                CSS by wrapping them in <code>card-columns</code></p>
            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('admin/assets/images/big/img6.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title that wraps to a new line</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card p-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>
                    <footer>
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('admin/assets/images/big/img5.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to
                            additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-primary p-3 text-center text-white">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                    <footer>
                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to
                            additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img img-fluid" src="{{asset('admin/assets/images/big/img4.jpg')}}" alt="Card image">
                </div>
                <div class="card p-3 text-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>
                    <footer>
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This card has even longer content than the first
                            to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
