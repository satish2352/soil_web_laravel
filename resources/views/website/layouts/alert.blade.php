@if (Session::get('status') == 'success')

<div class="col-12 grid-margin">
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success!</strong> {{ Session::get('msg') }}
    </div>
</div>

@endif

@if (Session::get('status') == 'error')
<div class="col-12 grid-margin">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Danger!</strong> {!! session('msg') !!}
    </div>
</div>
@endif