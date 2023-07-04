<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <x-head page="Pendaftaran"/>
    <body>
    <!-- Main navbar -->
    <div class="navbar navbar-expand-lg navbar-dark navbar-static">
        <x-navbar.brand />
        <div class="d-flex justify-content-end align-items-center ml-auto">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a href="{{route('member.register')}}" class="navbar-nav-link">
                        <i class="icon-user-plus"></i>
                        <span class="d-none d-lg-inline-block ml-2">Register</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('member.login')}}" class="navbar-nav-link">
                        <i class="icon-enter"></i>
                        <span class="d-none d-lg-inline-block ml-2">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Inner content -->
            <div class="content-inner">
                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">
                    <!-- Registration form -->
                    <form class="login-form" id="register">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                    <h5 class="mb-0">Create account</h5>
                                    <span class="d-block text-muted">All fields are required</span>
                                </div>
                                <div class="form-group text-center text-muted content-divider">
                                    <span class="px-2">Your credentials</span>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" name="repassword" placeholder="Repeat password">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group text-center text-muted content-divider">
                                    <span class="px-2">Your contacts</span>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" name="fullname" placeholder="Full name">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" name="email" placeholder="Your email">
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                                    <div class="form-control-feedback">
                                        <i class="icon-mobile text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input">
                                        <span class="custom-control-label">Accept <a href="#">&nbsp;terms of service</a></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-teal btn-block">Register</button>
                            </div>
                        </div>
                    </form>
                    <!-- /registration form -->
                </div>
                <!-- /content area -->
                <!-- Footer -->
                <x-footer />
                <!-- /footer -->
            </div>
            <!-- /inner content -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
    <script type="text/javascript">
        let registerjs = function() {
            const handleSubmit = () => {
                $('#register').submit(function (e){
                    e.preventDefault();
                    $.ajax({
                        url: '/api/member',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function (resp){
                            alert('Register success, Please login!!')
                            window.location.href = '/member/login'
                        },
                        error: function (error){
                            alert(error.responseJSON.message)
                        }
                    })
                })
            }
            return {
                init: function() {
                    handleSubmit();
                }
            }
        }();
        document.addEventListener('DOMContentLoaded', function() {
            registerjs.init();
        });
    </script>
</body>
</html>
