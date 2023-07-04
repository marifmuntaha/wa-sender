<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <x-head page="Login" />
    <body class="bg-secondary">
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Inner content -->
                <div class="content-inner">
                    <!-- Content area -->
                    <div class="content d-flex justify-content-center align-items-center">
                        <!-- Login card -->
                        <form class="login-form" id="login-form">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <i class="icon-people icon-2x text-warning border-warning border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                        <h5 class="mb-0">Login to your account</h5>
                                        <span class="d-block text-muted">Your credentials</span>
                                    </div>
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                        <div class="form-control-feedback">
                                            <i class="icon-user text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" checked>
                                            <span class="custom-control-label">Remember</span>
                                        </label>
                                        <a href="{{route('member.recovery')}}" class="ml-auto">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                    <div class="form-group text-center text-muted content-divider">
                                        <span class="px-2">Don't have an account?</span>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{route('member.register')}}" class="btn btn-light btn-block">Sign up</a>
                                    </div>
                                    <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                                </div>
                            </div>
                        </form>
                        <!-- /login card -->
                    </div>
                    <!-- /content area -->
                </div>
                <!-- /inner content -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
    <script type="text/javascript">
        let loginjs = function() {
            const handleSubmit = () => {
                $('#login-form').submit(function (e){
                    e.preventDefault();
                    $.ajax({
                        url: '/api/member/auth',
                        type: 'post',
                        data: $(this).serialize(),
                        success: function (resp){
                            alert('Register success, Please login!!')
                            // window.location.href = '/member/login'
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
            loginjs.init();
        });
    </script>
    </body>
</html>
