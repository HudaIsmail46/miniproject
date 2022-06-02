@extends('welcome')
@section('content')
    <div class="container p-5">
        <div class="row justify-content-between align-items-center">

            <div class="col-6">
                <h3>Create an Account</h3>

                <form action="register" method="post" class="my-5">
                    @csrf
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="InputName">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" id="InputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email</div>
                    </div>

                    <div class="form-field">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" autocomplete="off">
                        <small></small>
                    </div>


                    <div class="form-field">
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" name="confirm-password" id="confirm-password" autocomplete="off">
                        <small></small>
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputPassword"
                            onchange="return verifyPassword()">
                        <div class="invalid-feedback">Password length must be atleast 8 characters</div>

                    </div>
                    <div class="mb-3">
                        <label for="InputPasswordConfirmation" class="form-label">Password Confirmation</label>
                        <input type="password" name="passwordConfirmation" class="form-control"
                            id="InputPasswordConfirmation" onchange="return matchPassword()">
                        <div class="invalid-feedback">Passwords did not match</div>

                    </div>
                    <p class="text-center"><small class="text-primary text-center">By creating an account you agree to
                            our Terms of Service and Privacy Policy.</small></p>



                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                </form>
            </div>
            <div class="col-1 align-self-center">
                <img class="bi me-2" height="80" src="{{ url('/images/Huawei-Logo-2.png') }}">
            </div>
            <div class="col-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="461.079" height="438.001" viewBox="0 0 461.079 438.001">
                    <g id="Illustration" transform="translate(0 0)">
                        <path id="Path"
                            d="M115.207,95.682c9.76.722,14.2,9.821,46.406-7.764S217.025-6.377,272.606.426s80.92,38.073,90.3,94.465-13.658,85.9-19.694,119.625-60.138,79-143.322,42.546S87.678,226.439,47.239,235.343-19.278,197.087,17.923,140.5,105.447,94.96,115.207,95.682Z"
                            transform="matrix(0.788, -0.616, 0.616, 0.788, 0, 224.796)" fill="#ffdede" />
                        <path id="Path-2" data-name="Path"
                            d="M234.176,182.771H371.5a29.235,29.235,0,0,1,28.478,22.922l69.387,309.8a23.872,23.872,0,0,1-4.232,19.594,23.548,23.548,0,0,1-17.623,9.349l-141.17,7a31.215,31.215,0,0,1-32.206-25.753L234.773,306.654l-2.928.842-7.531-41.515,3.014-.759-10.987-61.14a18.178,18.178,0,0,1,3.94-14.876A17.925,17.925,0,0,1,234.176,182.771Z"
                            transform="translate(-129.321 -125.995)" fill="#fc3465" />
                        <path id="Path-3" data-name="Path"
                            d="M363.616,194.4h16.03a20.2,20.2,0,0,1,19.71,15.978l66.6,307.274a12.648,12.648,0,0,1-2.226,10.25,12.479,12.479,0,0,1-9.17,4.988l-140.714,9.283A16.211,16.211,0,0,1,296.857,528.8L240.025,211.2a14.342,14.342,0,0,1,3.076-11.685A14.143,14.143,0,0,1,253.98,194.4h15.207a6.7,6.7,0,0,1,6.462,4.985h0a5.914,5.914,0,0,0,5.7,4.4h72.192a10.126,10.126,0,0,0,10.069-9.386Z"
                            transform="translate(-139.515 -130.942)" fill="#ffdede" />
                        <ellipse id="Path-4" data-name="Path" cx="21.002" cy="21.141" rx="21.002" ry="21.141"
                            transform="translate(389.798 107.754)" fill="#fc3465" />
                        <path id="Path-5" data-name="Path" d="M725.356,694.362l4,17.235h-9.7l-4-19.532Z"
                            transform="translate(-291.898 -300.544)" />
                        <path id="Path-6" data-name="Path" d="M643.356,696.064V712.15l-9.7,1.149V696.064Z"
                            transform="translate(-256.697 -302.246)" />
                        <path id="Path-7" data-name="Path"
                            d="M814.411,451.032s-1.141,24.7-2.283,26.426-11.414,26.426-11.414,26.426L795.577,487.8s7.99-13.213,6.849-20.682A86.4,86.4,0,0,1,802,450.459Z"
                            transform="translate(-378.099 -239.901)" />
                        <ellipse id="Path-8" data-name="Path" cx="15.98" cy="16.086" rx="15.98" ry="16.086"
                            transform="translate(387.8 119.214)" />
                        <path id="Path-9" data-name="Path"
                            d="M779.981,322.456s-.571,22.979,3.424,26.426-22.829.574-22.829.574,5.707-16.086,1.142-19.533S779.981,322.456,779.981,322.456Z"
                            transform="translate(-363.074 -185.433)" />
                        <path id="Path-10" data-name="Path"
                            d="M731.879,363.174s3.424-6.319,7.99-5.745,19.4,1.723,19.975,2.872,2.283,5.17,3.424,6.319,9.7,2.872,10.273,9.766S753,425.218,753,425.218s2.854,9.766,2.283,12.064,2.853,9.192,2.283,12.064,8.561,20.107,4,42.512v36.193s15.409,62.619,10.844,67.215-19.975,1.724-22.829,0-14.839-88.471-14.839-88.471l-5.707-29.3-.571,64.342s1.141,54-2.854,55.725-19.4,2.3-20.546-1.149c-.89-2.688-5.252-74.217-7.129-105.571a117.886,117.886,0,0,1,2.513-32.272c2.375-10.845,5.824-23.587,9.752-28.758,7.419-9.766,11.985-40.788,11.985-40.788l-9.7-17.809s5.707-5.745,9.131-5.745S731.879,363.174,731.879,363.174Z"
                            transform="translate(-336.089 -200.299)" fill="#3d3d3d" />
                        <path id="Path-11" data-name="Path"
                            d="M816.2,383.456l3.01,2.062s2.127,37,.415,39.3-13.616,1.176-14.513-.848S816.2,383.456,816.2,383.456Z"
                            transform="translate(-382.172 -211.39)" fill="#3d3d3d" />
                        <path id="Path-12" data-name="Path"
                            d="M696.637,439.64c1.671,11.666,3.135,22.051-5.407,31.446a160.592,160.592,0,0,1-28.841,25.146c-1.048,2.794-16.428,23.308-17.211,15.125s4.532-14.6,12.083-21.518,18.116-21.934,24.077-30.172,3.507-13.376,3.3-20.257S694.293,439.724,696.637,439.64Z"
                            transform="translate(-313.503 -233.93)" />
                        <path id="Path-13" data-name="Path"
                            d="M718.53,781.255s-.571,6.435-2.283,8.158-6.278,4.021-5.707,10.341,4.28,6.607,4.28,6.607l-.285-1.436,1.712.575.285.862h15.98a52.137,52.137,0,0,0-.285-8.9c-.571-2.872-.571-16.66-2.283-16.086s-6.278,1.149-7.419,3.447S717.959,786.31,718.53,781.255Z"
                            transform="translate(-341.573 -380.659)" fill="#3d3d3d" />
                        <path id="Path-14" data-name="Path"
                            d="M816.006,781.255s.571,6.435,2.283,8.158,6.278,4.021,5.707,10.341-4.28,6.607-4.28,6.607l.285-1.436-1.712.575-.285.862h-15.98a52.126,52.126,0,0,1,.285-8.9c.571-2.872.571-16.66,2.283-16.086s6.278,1.149,7.419,3.447S816.576,786.31,816.006,781.255Z"
                            transform="translate(-380.835 -380.659)" fill="#3d3d3d" />
                        <path id="Path-15" data-name="Path"
                            d="M726.1,378.456l-7.99,1.723s0,12.639-2.283,17.809-6.278,17.235-4.566,17.809,17.692,8.617,18.834,4.022S734.094,378.456,726.1,378.456Z"
                            transform="translate(-341.727 -209.262)" fill="#3d3d3d" />
                        <ellipse id="Path-16" data-name="Path" cx="21.002" cy="21.141" rx="21.002" ry="21.141"
                            transform="translate(412.551 79.919)" fill="#fc3465" />
                        <path id="Path-17" data-name="Path"
                            d="M831.089,275.685a20.955,20.955,0,0,1-32.433-11.1,21.113,21.113,0,0,0,13.76,17.268,20.9,20.9,0,0,0,21.521-4.554,21.235,21.235,0,0,0,5.689-21.383,21.194,21.194,0,0,1-8.537,19.771Z"
                            transform="translate(-379.421 -157.119)" fill="#fc3465" />
                        <ellipse id="Path-18" data-name="Path" cx="15.402" cy="15.503" rx="15.402" ry="15.503"
                            transform="translate(400.999 116.915)" fill="#fc3465" />
                        <ellipse id="Path-19" data-name="Path" cx="13.652" cy="10.747" rx="13.652" ry="10.747"
                            transform="translate(389.798 115.858)" fill="#fc3465" />
                        <ellipse id="Path-20" data-name="Path" cx="2.591" cy="4.614" rx="2.591" ry="4.614"
                            transform="translate(397.217 133.003)" />
                    </g>
                </svg>

            </div>
        </div>

        <script>
            const passwordEl = document.querySelector('#password');
            const confirmPasswordEl = document.querySelector('#confirm-password');

            form.addEventListener('submit', function(e) {
                // prevent the form from submitting
                e.preventDefault();

            });

            function verifyPassword() {
                var pw = document.getElementById("InputPassword").value;
                //check empty password field  
                if (pw.length < 8) {
                    document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
                    return false;
                }

                //maximum length of password validation  
                if (pw.length > 15) {
                    document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
                    return false;
                } else {
                    // alert("Password is correct");
                }
            }

            function matchPassword() {
                var pw1 = document.getElementById("InputPassword");
                var pw2 = document.getElementById("InputPasswordConfirmation");
                if (pw1 != pw2) {
                    alert("Passwords did not match");
                } else {
                    alert("Password created successfully");
                }
            }
        </script>
    </div>
@endsection
