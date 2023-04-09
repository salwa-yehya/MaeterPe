@extends('dashboard')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">
                    <div class="col-md-3">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('dashboard') }}"><i
                                            class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.order.page') }}"><i
                                            class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.account.page') }}"><i
                                            class="fi-rs-user mr-10"></i>Account details</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.change.password') }}"><i
                                            class="fi-rs-user mr-10"></i>Change Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.logout') }}"><i
                                            class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content account dashboard-content pl-50">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">

                                        <img id="showImage"
                                            src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo): url("
                                            upload/no_image.png") }}" alt="Admin" class="rounded-circle p-1 bg-primary"
                                            width="110">

                                        <br>
                                        <br>
                                        <h3 class="mb-0">Hello {{ Auth::user()->name }}</h3>

                                    </div>
                                    <div class="card-body">
                                        <p>
                                            From your account dashboard. you can easily check &amp; view your <a
                                                href="#">recent orders</a>,<br />
                                            manage your <a href="#">shipping and billing addresses</a> and <a
                                                href="#">edit your password and account details.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>








                            {{-- Change Password --}}
                            <div class="tab-pane fade" id="change-password" role="tabpanel"
                                aria-labelledby="change-password-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Change Password</h5>
                                    </div>
                                    <div class="card-body">

                                        <form action="{{route('user.update.password')}}" method="post">
                                            @csrf
                                            @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{session('status')}}
                                            </div>
                                            @elseif(session('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{session('error')}}
                                            </div>
                                            @endif
                                            <div class="row">

                                                <div class="form-group col-md-12">
                                                    <label>Old Password<span class="required">*</span></label>
                                                    <input class="form-control 
                                                    @error('old_password')
                                                is-invalid
                                                    @enderror " name="old_password" id="current_password" placeholder="Enter Your Current Password"
                                                        type="password" />
                                                    @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <div class="form-group col-md-12">
                                                    <label>New Password<span class="required">*</span></label>
                                                    <input class="form-control 
                                                    @error('new_password')
                                                    is-invalid
                                                    @enderror " name="new_password" id="new_password" placeholder="Enter Your New Password"
                                                        type="password" />
                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <div class="form-group col-md-12">
                                                    <label>Confirm New Password<span class="required">*</span></label>
                                                    <input class="form-control " name="new_password_confirmation"
                                                        id="new_password_confirmation"
                                                        placeholder="Confirm Your New Password" type="password" />
                                                </div>




                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-fill-out submit font-weight-bold" name="submit"
                                                        value="Submit">Save Change</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
<script>
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });



</script> --}}
@endsection