@extends('welcome')
@section('content')
    <div class="container p-5">
        <div class="row justify-content-between align-items-center">

            <div class="col-6">
                <h3>Log In</h3>

                <form action="login" method="post" class="my-5">
                    @csrf

                    <ul class="list-inline d-flex justify-content-between">
                        <li class="list-inline-item">
                            <p class="mt-1"><small>New user?</small></p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-primary mt-1"><a class="text-decoration-none" href="/register"><small>Create an
                                        account</small></a></p>
                        </li>
                    </ul>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="InputEmail" required>
                        <div class="invalid-feedback">
                            Email is required.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputPassword" required>
                        <div class="invalid-feedback">
                            Password is required.
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Keep me logged in
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>

                    <ul class="list-inline d-flex justify-content-between">
                        <li class="list-inline-item">
                            <p class="text-primary mt-3"><small>Log in via sms</small></p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-primary mt-3"><small>Forgot password?</small></p>
                        </li>
                    </ul>


                    {{-- <button type="button" class="btn btn-primary" onclick="window.location = '/register'">Sign Up</button> --}}
                </form>
            </div>
            <div class="col-1 align-self-center">
                <img class="bi me-2" height="80" src="{{ url('/images/Huawei-Logo-2.png') }}">
            </div>
            <div class="col-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="461.079" height="438.001" viewBox="0 0 461.079 438.001">
                    <g id="Illustration" transform="translate(0 0)">
                        {{-- <svg id="Illustration" xmlns="http://www.w3.org/2000/svg" width="277.763" height="412" --}}
                        viewBox="0 0 277.763 412">
                        <path id="Path"
                            d="M672.619,252.119a17.87,17.87,0,0,1-12.285-3.259,33.7,33.7,0,0,1-8.81-9.45,61.233,61.233,0,0,1-8.622-20.034,11.744,11.744,0,0,1-11.443,3.981c-6.816-1.53-10.9-9.483-9.575-16.342s6.956-12.3,13.377-15.048,13.577-3.207,20.563-3.192c4.607.01,9.3.225,13.628,1.805s8.291,4.729,9.829,9.071c.964,2.723.932,5.736,2.028,8.408,1.989,4.851,7.149,7.5,11.992,9.51s10.107,4.051,12.963,8.448c3.225,4.965,2.294,11.9-1.26,16.631s-9.261,7.482-15.07,8.63-11.792.864-17.706.576"
                            transform="translate(-491.454 -188.775)" fill="#fc3465" />
                        <path id="Path-2" data-name="Path" d="M420.438,428.775l19.085-8.276-10.356-21.314-15.413,9.02Z"
                            transform="translate(-186.405 -53.502)" />
                        <path id="Path-3" data-name="Path"
                            d="M419.742,300.409,438.175,337.9,470.7,404.073l33.538-16.116L467.219,301.28l-.1-10.911-.331-33.952Z"
                            transform="translate(-256.31 -34.423)" fill="#3d3d3d" />
                        <path id="Path-4" data-name="Path" d="M546.937,410.754l19.6,6.969,6.969-22.649-17.422-3.919Z"
                            transform="translate(-435.772 -52.429)" />
                        <path id="Path-5" data-name="Path"
                            d="M702.583,370.373l59.236-16.987L744.4,341.626,698.663,356l-20.68,4.963a10.219,10.219,0,0,0-6.938,14.123h0a10.22,10.22,0,0,0,14.237,4.775Z"
                            transform="translate(-587.063 -209.257)" />
                        <path id="Path-6" data-name="Path"
                            d="M674.974,331.58l23.956,13.938c2.114-17.431-8.308-48.459-21.342-82.321h0a26.048,26.048,0,0,0-10.534,24.6Z"
                            transform="translate(-521.56 -198.751)" fill="#fff" />
                        <path id="Path-7" data-name="Path"
                            d="M573.031,374.487l.5,17.879a10.311,10.311,0,0,0,12.974,9.669h0a10.311,10.311,0,0,0,6.708-14.25l-6.683-14.6-20.907-49.654-14.374,5.227Z"
                            transform="translate(-316.389 -206.837)" />
                        <ellipse id="Path-8" data-name="Path" cx="18.729" cy="18.729" rx="18.729" ry="18.729"
                            transform="translate(140.565 9.378)" />
                        <path id="Path-9" data-name="Path" d="M503.565,72.567l21.778-10.454L514.454,37.722,496.16,41.207Z"
                            transform="translate(-343.617 -5.041)" />
                        <path id="Path-10" data-name="Path"
                            d="M642.087,352.5l44.427-10.889-8.921-81.778a14.386,14.386,0,0,0-15.6-12.766L647.314,248.4l-20.036,9.147-7.4,7.84,2.259,9.662c-2.106,19.9-.483,37.169,11.088,47.417Z"
                            transform="translate(-468.202 -196.557)" fill="#fff" />
                        <path id="Path-11" data-name="Path"
                            d="M618.787,321.764l23.085-6.1-30.949-51.26a33.107,33.107,0,0,0-31.772-15.817h0l11.76,38.765C601.785,295.56,610.92,307.353,618.787,321.764Z"
                            transform="translate(-388.279 -196.744)" fill="#fff" />
                        <path id="Path-12" data-name="Path"
                            d="M604.657,550.8l35.28,10.453c42.96-69.744,104.477-144.906,80.579-195.131L711.8,345.648l-45.3,13.938-2.613,54.01-27.876,43.556Z"
                            transform="translate(-494.363 -209.895)" fill="#3d3d3d" />
                        <path id="Path-13" data-name="Path"
                            d="M724.389,631.848l31.354-.308a11.294,11.294,0,0,0,11.22-11.294v-15.63a3.6,3.6,0,0,0-4.67-3.456c-5.663,1.816-10.3,1.211-13.8-2.08-2.1-1.973-2.341-2.369-4.836-.934L729.5,613.608l-5.741.37a8.944,8.944,0,0,0-8.343,8.256h0a8.944,8.944,0,0,0,8.969,9.613Z"
                            transform="translate(-631.407 -243.523)" fill="#fc3465" />
                        <path id="Path-14" data-name="Path"
                            d="M579.384,653.664l21.953-22.388a11.294,11.294,0,0,0-.052-15.919L590.232,604.3a3.6,3.6,0,0,0-5.746.858c-2.721,5.289-6.427,8.14-11.227,8.285-2.877.087-3.331-.02-4.08,2.759l.924,20.943-3.8,4.321a8.944,8.944,0,0,0-.061,11.738h0a8.944,8.944,0,0,0,13.139.455Z"
                            transform="translate(-337.943 -244.319)" fill="#fc3465" />
                        <path id="Path-15" data-name="Path"
                            d="M661.865,213.4A22.423,22.423,0,0,1,651,222.373c-3.182,1.225-7.219,1.53-9.607-.9-1.73-1.763-2.075-4.476-1.829-6.933.766-7.671,6.532-14.351,13.685-17.225s15.412-2.246,22.551.664c6.736,2.746,13.133,8.37,13.495,15.635.186,3.723-1.162,7.822.836,10.969,1.505,2.37,4.412,3.333,7.016,4.382s5.4,2.705,5.933,5.462a6.111,6.111,0,0,1-1.793,5.21,14.146,14.146,0,0,1-4.816,3.02c-4.247,1.808-8.921,2.935-13.483,2.236s-8.974-3.477-10.759-7.733c-1.375-3.278-1.093-6.976-.935-10.527s.111-7.332-1.785-10.339-6.3-4.69-9.131-2.543"
                            transform="translate(-501.815 -189.666)" fill="#fc3465" />
                        <path id="Path-16" data-name="Path"
                            d="M5.375,18.43h44.4a23.805,23.805,0,1,1,0,10.751H38.4v3.84a5.375,5.375,0,0,1-10.751,0V29.18H19.966v9.983a5.375,5.375,0,0,1-10.751,0V29.18H5.375a5.375,5.375,0,1,1,0-10.751Zm67.576,18.43A13.054,13.054,0,1,0,59.9,23.8,13.069,13.069,0,0,0,72.951,36.859Z"
                            transform="translate(23.805 88.064) rotate(30)" fill="#3d3d3d" />
                    </g>
                </svg>
            </div>
        </div>
    </div>
@endsection
