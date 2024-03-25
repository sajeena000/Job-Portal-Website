@extends('front.layouts.app')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route("admin.dashboard") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("admin.jobs") }}">Jobs</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
             @include('admin.sidebar')   
            </div>
            <div class="col-lg-9">
                @include('front.message')
                
                <form action="{{ route('admin.jobs.update', $job->id) }}" method="post" id="editJobForm" name="editJobForm">
                    @csrf
                    @method('PUT')
                    <div class="card border-0 shadow mb-4">
                        <div class="card-body card-form p-4">
                            <h3 class="fs-4 mb-1">Edit Job Details</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="" class="mb-2">Title<span class="req">*</span></label>
                                    <input value="{{ $job->title }}" type="text" placeholder="Job Title" id="title" name="title" class="form-control">
                                    <p></p>  
                                </div>
                                <div class="col-md-6  mb-4">
                                    <label for="" class="mb-2">Category<span class="req">*</span></label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="">Select a Category</option>
                                        @foreach ($categories as $category)
                                            <option {{ ($job->category_id == $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="" class="mb-2">Job Type<span class="req">*</span></label>
                                    <select name="jobType" id="jobType" class="form-select">
                                        <option value="">Select Job Type</option>
                                        @foreach ($jobTypes as $jobType)
                                            <option {{ ($job->job_type_id == $jobType->id) ? 'selected' : '' }} value="{{ $jobType->id }}">{{ $jobType->name }}</option>
                                        @endforeach
                                    </select>
                                    <p></p>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="vacancy" class="mb-2">Vacancy<span class="req">*</span></label>
                                    <input type="number" min="1" value="{{ $job->vacancy }}" placeholder="Vacancy" id="vacancy" name="vacancy" class="form-control">
                                    <p id="vacancy-error" class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Salary</label>
                                    <input value="{{ $job->salary }}" type="text" placeholder="Salary" id="salary" name="salary" class="form-control">
                                </div>
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Location<span class="req">*</span></label>
                                    <input value="{{ $job->location }}" type="text" placeholder="Location" id="location" name="location" class="form-control">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4 col-md-6">
                                    <div class="form-check">
                                        <input {{ ($job->isFeatured == 1) ? 'checked' : '' }} class="form-check-input" type="checkbox" value="1" id="isFeatured" name="isFeatured">
                                        <label class="form-check-label" for="isFeatured">Featured</label>
                                    </div>
                                </div>
                                <div class="mb-4 col-md-6">
                                    <div class="form-check-inline">
                                        <input {{ ($job->status == 1) ? 'checked' : '' }} class="form-check-input" type="radio" value="1" id="status-active" name="status">
                                        <label class="form-check-label" for="status-active">Active</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input {{ ($job->status == 0) ? 'checked' : '' }} class="form-check-input" type="radio" value="0" id="status-block" name="status">
                                        <label class="form-check-label" for="status-block">Block</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Description<span class="req">*</span></label>
                                <textarea class="textarea" name="description" id="description" cols="5" rows="5" placeholder="Description">{{ $job->description }}</textarea>
                                <p></p>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Benefits</label>
                                <textarea class="textarea" name="benefits" id="benefits" cols="5" rows="5" placeholder="Benefits">{{ $job->benefits }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Responsibility</label>
                                <textarea class="textarea" name="responsibility" id="responsibility" cols="5" rows="5" placeholder="Responsibility">{{ $job->responsibility }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Qualifications</label>
                                <textarea class="textarea" name="qualifications" id="qualifications" cols="5" rows="5" placeholder="Qualifications">{{ $job->qualifications }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Experience <span class="req">*</span></label>
                                <select name="experience" id="experience" class="form-control">
                                    <option value="1" {{ ($job->experience == 1) ? 'selected' : '' }}>1 Year</option>
                                    <!-- Other options omitted for brevity -->
                                </select>
                                <p></p>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Keywords</label>
                                <input value="{{ $job->keywords }}" type="text" placeholder="keywords" id="keywords" name="keywords" class="form-control">
                            </div>
                            <h3 class="fs-4 mb-1 mt-5 border-top pt-5">Company Details</h3>
                            <div class="row">
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Name<span class="req">*</span></label>
                                    <input value="{{ $job->company_name }}" type="text" placeholder="Company Name" id="company_name" name="company_name" class="form-control">
                                    <p></p>
                                </div>
                                <div class="mb-4 col-md-6">
                                    <label for="" class="mb-2">Location</label>
                                    <input value="{{ $job->company_location }}" type="text" placeholder="Location" id="company_location" name="company_location" class="form-control">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="" class="mb-2">Website</label>
                                <input value="{{ $job->company_website }}" type="text" placeholder="Website" id="website" name="website" class="form-control">
                            </div>
                        </div> 
                        <div class="card-footer p-4">
                            <button type="submit" class="btn btn-primary">Update Job</button>
                        </div>               
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


@section('customJs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('.textarea').trumbowyg();
    $("#editJobForm").submit(function(e) {
        e.preventDefault();
        $("button[type='submit']").prop('disabled',true);
        $.ajax({
            url: '{{ route("admin.jobs.update",$job->id) }}',
            type: 'PUT',
            dataType: 'json',
            data: $("#editJobForm").serializeArray(),
            success: function(response) {
                $("button[type='submit']").prop('disabled',false);

                if (response.status == true) {

                $("#title").removeClass('is-invalid')
                                .siblings('p#title-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            $("#category").removeClass('is-invalid')
                                .siblings('p#category-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            $("#jobType").removeClass('is-invalid')
                                .siblings('p#jobType-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            $("#vacancy").removeClass('is-invalid')
                                .siblings('p#vacancy-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            $("#location").removeClass('is-invalid')
                                .siblings('p#location-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            $("#description").removeClass('is-invalid')
                                .siblings('p#description-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            $("#company_name").removeClass('is-invalid')
                                .siblings('p#company_name-error')
                                .removeClass('invalid-feedback')
                                .html('');

                            window.location.href="{{ route('admin.jobs') }}";

            }else{
                var errors = response.errors;

                //if(response.status == false){
                        //var errors = response.errors;
                        if(errors.title) {
                            $("#title").addClass('is-invalid')
                                .siblings('p#title-error')
                                .addClass('invalid-feedback')
                                .html(errors.title);
                        } else {
                            $("#title").removeClass('is-invalid')
                                .siblings('p#title-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

                        if(errors.category) {
                            $("#category").addClass('is-invalid')
                                .siblings('p#category-error')
                                .addClass('invalid-feedback')
                                .html(errors.email);
                        } else {
                            $("#category").removeClass('is-invalid')
                                .siblings('p#category-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

                        if(errors.jobType) {
                            $("#jobType").addClass('is-invalid')
                                .siblings('p#jobType-error')
                                .addClass('invalid-feedback')
                                .html(errors.email);
                        } else {
                            $("#jobType").removeClass('is-invalid')
                                .siblings('p#jobType-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }


                        if(errors.vacancy) {
                            $("#vacancy").addClass('is-invalid')
                                .siblings('p#vacancy-error')
                                .addClass('invalid-feedback')
                                .html(errors.vacancy);
                        } else {
                            $("#vacancy").removeClass('is-invalid')
                                .siblings('p#vacancy-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

                        if(errors.jobType) {
                            $("#location").addClass('is-invalid')
                                .siblings('p#location-error')
                                .addClass('invalid-feedback')
                                .html(errors.location);
                        } else {
                            $("#location").removeClass('is-invalid')
                                .siblings('p#location-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

                        if(errors.description) {
                            $("#description").addClass('is-invalid')
                                .siblings('p#description-error')
                                .addClass('invalid-feedback')
                                .html(errors.location);
                        } else {
                            $("#description").removeClass('is-invalid')
                                .siblings('p#description-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }


                        if(errors.company_name) {
                            $("#company_name").addClass('is-invalid')
                                .siblings('p#company_name-error')
                                .addClass('invalid-feedback')
                                .html(errors.location);
                        } else {
                            $("#company_name").removeClass('is-invalid')
                                .siblings('p#company_name-error')
                                .removeClass('invalid-feedback')
                                .html('');
                        }

            }

        }

    });
});
    function deleteUser(id){
        if(confirm("Are you sure you want to delete?")){
            // Get CSRF token from the meta tag
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
            $.ajax({
                url: '{{ route("admin.users.destroy") }}',
                type: 'DELETE',
                data: {
                    id: id,
                    // Include CSRF token in the data
                    '_token': csrfToken
                },
                dataType: 'json',
                success: function(response){
                    window.location.href = "{{ route('admin.users') }}";
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        }
    }
    </script>
    
@endsection
