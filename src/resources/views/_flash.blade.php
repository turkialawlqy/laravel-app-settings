@if (isset($errors) && $errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ __($error) }} <br>
        @endforeach
    </div>
@endif

@if($status = session('status'))
    <div class="alert alert-success">
        {{ __($status) }}
    </div>
@endif
