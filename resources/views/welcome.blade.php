<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevexHub CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"><h4 style="color:#1A374D;">DevexHub CRM</h4></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach($pages as $page)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('page', ['slug' => $page->slug]) }}">{{ $page->title }}</a>
                    </li>
                    @endforeach
                </ul>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark rounded-md px-3 py-2 m-1">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-danger rounded-md px-3 py-2 m-1">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
    <div class="container-fluid p-0 m-0">
        @foreach($pagesections as $pagesection)
            @if($pagesection->type === "contentwithbg")
                <div class="row m-0 p-0 d-flex justify-content-center" 
                     style="background-color:{{ $pagesection->background_color }};
                            background: url('{{ $pagesection->background_image ? asset('storage/' . $pagesection->background_image) : asset('images/default-bg.jpg') }}');
                            background-size: cover; background-position: center center;">
                    <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
                        <div class="col-md-6 p-2">
                            <h6 class="p-5 text-center" style="color: white;">{{ $pagesection->heading }}</h6>
                            <p class="p-5 text-center" style="color: white;">{!! $pagesection->content !!}</p>
                        </div>
                    </div>
                </div>
            @elseif($pagesection->type === "rightcontent")
                <div class="row m-0 p-0 d-flex justify-content-center" 
                     style="background-color:{{ $pagesection->background_color }};">
                    <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
                        <div class="col-md-5 p-0">
                            <img src="{{ asset('storage/'. $pagesection->background_image) }}" class="img-fluid">
                        </div>
                        <div class="col-md-6 p-2 d-flex flex-column justify-content-center align-items-center">
                            <h6 class="p-5 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
                            <p class="p-5 text-center" style="color: #000;">{!! $pagesection->content !!}</p>
                        </div>
                    </div>
                </div>
            @elseif($pagesection->type === "leftcontent")
                <div class="row m-0 p-0 d-flex justify-content-center" 
                     style="background-color:{{ $pagesection->background_color }};">
                    <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
                        <div class="col-md-6 p-2 d-flex flex-column justify-content-center align-items-center">
                            <h6 class="p-5 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
                            <p class="p-5 text-center" style="color: #000;">{!! $pagesection->content !!}</p>
                        </div>
                        <div class="col-md-5 p-0">
                            <img src="{{ asset('storage/'. $pagesection->background_image) }}" class="img-fluid">
                        </div>
                    </div>
                </div>
                @elseif($pagesection->type === "form")
									<div class="row m-0 p-0 d-flex justify-content-center " 
								         style="background-color:{{ $pagesection->background_color }};">
								        <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
								            <div class="col-md-6 p-2 ">
								                <h6 class="p-4 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
								                <p class="p-4 text-center" style="color: #000;">{!! $pagesection->content !!}</p>
												<form method="post" action="{{ url('/your-form-submit-url') }}">
												@csrf <!-- CSRF Token for form submission security -->
												@if($pagesection->form_fields)
													@php
														$fields = json_decode($pagesection->form_fields, true);
													@endphp
													@foreach($fields as $field)
														<div class="mb-3">
															<label class="form-label">{{ $field['name'] }}</label>
															@if($field['type'] == 'textarea')
																<textarea name="" id="" placeholder="{{ $field['name'] }}" class="form-control"></textarea>
															@else
															<input type="{{ $field['type'] }}" placeholder="{{ $field['name'] }}" class="form-control" name="{{ strtolower(str_replace(' ', '_', $field['name'])) }}">
															@endif
														</div>
													@endforeach
												@endif
												<button type="submit" class="btn btn-dark">Submit</button>
											</form>
											<!-- End of Form -->
								            </div>
								        </div>
								    </div>
            @else
                <div class="row m-0 p-0 d-flex justify-content-center" 
                     style="background-color:{{ $pagesection->background_color }};">
                    <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
                        <div class="col-md-6 p-2">
                            <h6 class="p-5 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
                            <p class="p-5 text-center" style="color: #000;">{!! $pagesection->content !!}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
      <script>
$(document).ready(function() {
    $('#ajaxForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                alert(response.message);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    });
});
</script>
</body>
</html>

