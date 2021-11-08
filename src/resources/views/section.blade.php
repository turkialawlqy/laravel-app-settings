<div class="card">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="card-header">
                <i class="{{ Arr::get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>
                {{ __($fields['title']) }}
            </div>
            <div class="card-body">

                {{ $slot }}
            </div>
        </div>
    </div>
</div>
