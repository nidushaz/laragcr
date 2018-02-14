@if (session()->has('success-msg'))
    <div class="alert alert-success alertifyshaz s">
        {{ session('success-msg') }}
    </div>
@endif

@if (session()->has('error-msg'))
    <div class="alert alert-danger alertifyshaz r">
        {{ session('error-msg') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alertifyshaz r">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


