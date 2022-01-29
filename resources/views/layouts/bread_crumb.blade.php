<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ Str::ucfirst(__($title)) }}</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb">
                    @if (Route::has('home'))
                    <li class="breadcrumb-item active">{{ Str::ucfirst(__(Request::segment(1))) }}</li>
                    @else
                    <li class="breadcrumb-item"><a href="#">{{ Str::ucfirst(__($param1)) }}</a></li>
                    <li class="breadcrumb-item active">{{ Str::ucfirst(__($param2)) }}</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
