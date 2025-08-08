@extends('front.layouts.app')

@section('main')
<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Register</h1>
                    <form action="{{ route('account.processRegistration') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                            <p></p>
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Email*</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                            <p></p>
                        </div> 
                        <div class="mb-3">
    <label for="role" class="mb-2">Role*</label>
    <select name="role" id="role" class="form-control">
        <option value="admin">Admin</option>
        <option value="user" selected>User</option>
        <option value="company">Company</option>
    </select>
    <p></p>
</div>
<div class="mb-4">
    <label for="password" class="mb-2">New Password*</label>
    <input type="password" name="password" placeholder="New Password" class="form-control">
</div>
<div class="mb-4">
    <label for="confirm_password" class="mb-2">Confirm Password*</label>
    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Register</button>
                    </form>                    
                </div>
                <div class="mt-4 text-center">
                    <p>Have an account? <a  href="{{ route('account.login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('customJs')
<script type="text/javascript">
$("#userForm").submit(function(e){
    e.preventDefault();

    $.ajax({
        url: '{{ route("account.updateProfile") }}',
        type: 'put',
        dataType: 'json',
        data: $("#userForm").serializeArray(),
        success: function(response) {
            if (response.status == true) {
                $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');

                // Redirect to the profile page upon successful submission
                window.location.href = response.redirect_url;
            } else {
                var errors = response.errors;

                if (errors.name) {
                    $("#name").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.name);
                } else {
                    $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                }

                if (errors.email) {
                    $("#email").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.email);
                } else {
                    $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                }
            }
        }
    });
});


$("#changePasswordForm").submit(function(e){
    e.preventDefault();

    $.ajax({
        url: '{{ route("account.updatePassword") }}',
        type: 'post',
        dataType: 'json',
        data: $("#changePasswordForm").serializeArray(),
        success: function(response) {
            if (response.status == true) {
                $("#name").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('');

                $("#email").removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('');

                // Redirect to the profile page upon successful password update
                window.location.href = "{{ route('account.profile') }}";
            } else {
                var errors = response.errors;

                if (errors.old_password) {
                    $("#old_password").addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.old_password);
                } else {
                    $("#old_password").removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                }

                if (errors.new_password) {
                    $("#new_password").addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.new_password);
                } else {
                    $("#new_password").removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                }

                if (errors.confirm_password) {
                    $("#confirm_password").addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.confirm_password);
                } else {
                    $("#confirm_password").removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                }
            }
        }
    });
});
</script>
@endsection