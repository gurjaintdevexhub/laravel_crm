@extends('layouts.adminlayout')
@section('title', 'Edit ' . $page->title . ' Section')

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<div class="d-flex flex-wrap flex-stack mb-6">
									<!--begin::Heading-->
									<h3 class="fw-bolder my-2">Edit {{ $page->title }} 
									<span class="fs-6 text-gray-400 fw-bold ms-1"></span></h3>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-wrap my-2">
										<a class="btn btn-dark btn-sm" href="{{ route('previewpage', ['page_id' => $page->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i> Preview</a>
									</div>
									<!--end::Actions-->
								</div>

								<!--begin::Card-->
								<div class="card">
									<!--begin::Card body-->
								@foreach($pagesections as $pagesection)
									@if($pagesection->type === "contentwithbg")
									<div class="row g-6 g-xl-9">
									<!--begin::Col-->
									<div class="col-md-12 ">
										<!--begin::Card-->
										<a href="javascript:void(0)" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												    <h4>{{ $pagesection->heading }}</h4>
													<div class="form-check form-switch mx-2">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div>
												    <!-- The input field and button will be appended here -->
												</div>

												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													    <div class="d-flex btn btn-dark p-0  mx-2">
														  <input type="color" class="form-control form-control-color bg-dark m-0 exampleColorInput" name="exampleColorInput" value="{{ $pagesection->background_color }}" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" title="Choose your color">
													    </div>
													    <div class=" p-0  mx-2">
														  <input type="file" class="form-control m-0" name="" value="{{ $pagesection->background_image }}" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" title="Choose Image">
													    </div>
													
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												<div class="row p-0 d-flex justify-content-center " 
								         style="background-color:{{ $pagesection->background_color }};
								                background: url('{{ $pagesection->background_image ? asset('storage/' . $pagesection->background_image) : asset('images/default-bg.jpg') }}');
								                background-size: cover; background-position: center center;" class="sectionBackground">
								        <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
								            <div class="col-md-6 p-2 ">
								                <h6 class="headingText text-center" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" class="p-5 text-center" style="color: white;">{{ $pagesection->heading }}</h6>
								                <div class="editContainer d-flex" class="d-flex"></div>
								                <p class="contentText text-center p-5" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}"  style="color: white;">{!! $pagesection->content !!}</p>
								                <div class="editContentContainer d-flex"></div>
								                <!-- <div class="d-flex justify-content-center align-items-center bg-white p-2 ">
								                	
								                
								                </div> -->

								            </div>
								        </div>
								    </div>
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									</div>	
								    @elseif($pagesection->type === "rightcontent")
								    <div class="row g-6 g-xl-9">
									<!--begin::Col-->
									<div class="col-md-12 ">
										<!--begin::Card-->
										<a href="javascript:void(0)" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<h4>{{ $pagesection->heading }}</h4>
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<div class="form-check form-switch">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												
											    <div class="row p-0 d-flex justify-content-center " 
											         style="background-color:{{ $pagesection->background_color }};">
											        <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
											            <div class="col-md-5 p-0 ">
											               <img src="{{ asset('storage/'. $pagesection->background_image) }}" class="img-fluid">
											            </div>
											            <div class="col-md-6 p-2 d-flex flex-column justify-content-center align-items-center">
											                <h6 class="headingText text-center" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" class="p-5 text-center" style="color: white;">{{ $pagesection->heading }}</h6>
											                <div class="editContainer d-flex" class="d-flex"></div>
											                <p class="contentText text-center p-5" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" style="color: white;">{!! $pagesection->content !!}</p>
											                <div class="editContentContainer d-flex"></div>
											            </div>
											        </div>
											    </div>
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									</div>	

								    @elseif($pagesection->type === "leftcontent")
								     <div class="row g-6 g-xl-9">
									<!--begin::Col-->
									<div class="col-md-12 ">
										<!--begin::Card-->
										<a href="javascript:void(0)" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<h4>{{ $pagesection->heading }}</h4>
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<div class="form-check form-switch">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												
											     <div class="row p-0 d-flex justify-content-center " 
												         style="background-color:{{ $pagesection->background_color }};">
												        <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
												            <div class="col-md-6 p-2 d-flex flex-column justify-content-center align-items-center">
												                <h6 class="headingText text-center" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" class="p-5 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
												                <div class="editContainer d-flex" class="d-flex"></div>
												                <p class="contentText text-center p-5" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" style="color: #000;">{!! $pagesection->content !!}</p>
												                <div class="editContentContainer d-flex"></div>
												            </div>
												            <div class="col-md-5 p-0 ">
												               <img src="{{ asset('storage/'. $pagesection->background_image) }}" class="img-fluid">
												            </div>
												        </div>
												    </div>

											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									</div>	

									@elseif($pagesection->type === "form")
									<div class="row g-6 g-xl-9">
									<!--begin::Col-->
									<div class="col-md-12 ">
										<!--begin::Card-->
										<a href="javascript:void(0)" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<h4>{{ $pagesection->heading }}</h4>
													<div class="form-check form-switch mx-2">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div>
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<div class="d-flex btn btn-dark p-0  mx-2">
														  <input type="color" class="form-control form-control-color bg-dark m-0 exampleColorInput" name="exampleColorInput" value="{{ $pagesection->background_color }}" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" title="Choose your color">
													    </div>
													<!-- <div class="form-check form-switch">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div> -->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												
											<div class="row p-0 d-flex justify-content-center " 
												style="background-color:{{ $pagesection->background_color }};">
												<div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
													<div class="col-md-6 p-2 ">
														<h6 class="p-5 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
														<p class="p-5 text-center" style="color: #000;">{!! $pagesection->content !!}</p>
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

											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									</div>	

									@else
									<div class="row g-6 g-xl-9">
									<!--begin::Col-->
									<div class="col-md-12 ">
										<!--begin::Card-->
										<a href="javascript:void(0)" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
													<h4>{{ $pagesection->heading }}</h4>
													<div class="form-check form-switch mx-2">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div>
												</div>
												<!--end::Car Title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<div class="d-flex btn btn-dark p-0  mx-2">
														  <input type="color" class="form-control form-control-color bg-dark m-0 exampleColorInput" name="exampleColorInput" value="{{ $pagesection->background_color }}" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" title="Choose your color">
													    </div>
													<!-- <div class="form-check form-switch">
													        <input class="form-check-input checkpagesection bg-dark border-dark" type="checkbox" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" id="flexSwitchCheck{{ $loop->iteration }}" {{ $pagesection->status ? 'checked' : '' }}>
													    </div> -->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body p-9">
												
											     <div class="row p-0 d-flex justify-content-center " 
											         style="background-color:{{ $pagesection->background_color }};">
											        <div class="d-flex justify-content-center p-5" style="width: 100%; height: 100%;">
											            <div class="col-md-6 p-2">
											                <h6 class="headingText text-center" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" class="p-5 text-center" style="color: #000;">{{ $pagesection->heading }}</h6>
											                <div class="editContainer d-flex" class="d-flex"></div>
											                <p class="contentText text-center p-5" data-id="{{ $page->id }}" data-sid="{{ $pagesection->id }}" style="color: #000;">{!! $pagesection->content !!}</p>
											                <div class="editContentContainer d-flex"></div>

											            </div>
											        </div>
											    </div>


											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									</div>	
								    @endif
								@endforeach

									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>

					<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header bg-success text-center">
					        <h5 class="modal-title text-light" id="successModalLabel">Success</h5>
					      </div>
					      <div class="modal-body">
					        <div class="text-center" id="successMessage">oooooooooooooo!</div>
					      </div>
					    </div>
					  </div>
					</div>



@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

// Update Heading
$(document).ready(function() {
    $('.headingText').click(function() {
        var $this = $(this);
        var pageId = $this.data('id'); 
        var pagesection_id = $this.data('sid');
        var currentText = $this.text();
        var $editContainer = $this.closest('.card-body').find('.editContainer');
        $this.hide();

        if ($editContainer.find('.editInput').length === 0 && $editContainer.find('.updateButton').length === 0) {
            var inputHtml = `<input type="text" class="editInput form-control bg-transparent border-bottom m-2" value="${currentText}" />`;
            var buttonHtml = `<button class="updateButton btn btn-dark m-2"><i class="fa fa-check" aria-hidden="true"></i></button>`;

            $editContainer.append(inputHtml + buttonHtml);

            $editContainer.find('.updateButton').click(function() {
                var updatedText = $editContainer.find('.editInput').val();
                var url = '{{ route("pagesection.updateheading", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', pageId);

                $.ajax({
                    url: url,
                    method: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}',
                        heading: updatedText,
                        pagesection_id: pagesection_id
                    },
                    success: function(response) {
                        $this.text(updatedText).show(); 
                        $editContainer.empty(); 
                    },
                    error: function(xhr, status, error) {
                        console.error("Error: " + status + " " + error);
                    }
                });
            });
        }
    });
});


$(document).ready(function() {
    $('.contentText').click(function() {
        var $this = $(this); 
        var pageId = $this.data('id');  
        var pagesection_id = $this.data('sid');
        var currentText = $this.text();
        var $editContainer = $this.closest('.card-body').find('.editcontentContainer');
        $this.hide();
        if ($editContainer.find('.editInputcontent').length === 0 && $editContainer.find('.updatecontentButton').length === 0) {
            var inputHtml = `<textarea type="text" class="editInputcontent form-control bg-transparent border-bottom m-2">${currentText}</textarea>`;
            var buttonHtml = `<button class="updatecontentButton btn btn-dark m-2"><i class="fa fa-check" aria-hidden="true"></i></button>`;

            $editContainer.append(inputHtml + buttonHtml);

            $editContainer.find('.updatecontentButton').click(function() {
                var updatedText = $editContainer.find('.editInputcontent').val();
                 var url = '{{ route("pagesection.updateContent", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', pageId);
                $.ajax({
                    url: url,
		            type: 'PUT',
		            data: {
		            	 _token : '{{ csrf_token() }}',
		                content: updatedText,
		                pagesection_id: pagesection_id
		            },
                    success: function(response) {
                        $this.text(updatedText).show(); 
                        $editContainer.empty();
                    }
                });
            });
        }
    });
});

// Update Status
$(document).ready(function(){
    $('.checkpagesection').change(function(){
        var status = $(this).prop('checked') ? 'active' : 'inactive';
        var pageId = $(this).data('id');
        var pagesection_id = $(this).data('sid');
         var url = '{{ route("pagesection.updateStatus", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', pageId);
        $.ajax({
            url: url,
            type: 'PUT',
            data: {
            	 _token : '{{ csrf_token() }}',
                status: status,
                pagesection_id: pagesection_id
            },
            success: function(response) {
                $('#successMessage').text(response.message);
                $('#successModal').modal('show'); 
                setTimeout(function() {
                    $('#successModal').modal('hide');
                    location.reload();
                }, 2000); 
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});


// Update Color
$(document).ready(function(){
    $('.exampleColorInput').change(function() {
    	var color = $(this).val();
        var pageId = $(this).data('id');
        var pagesection_id = $(this).data('sid');
         var url = '{{ route("pagesection.updateColor", ["page_id" => "__page_id__"]) }}'.replace('__page_id__', pageId);
        $.ajax({
            url: url,
            type: 'PUT',
            data: {
            	 _token : '{{ csrf_token() }}',
                color: color,
                pagesection_id: pagesection_id
            },
            success: function(response) {
                $('#successMessage').text(response.message);
                $('#successModal').modal('show'); 
                setTimeout(function() {
                    $('#successModal').modal('hide');
                    location.reload();
                }, 2000); 
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseText);
            }
        });
    });
});


</script>