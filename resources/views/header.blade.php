@if (session()->has('user'))
    <div class="bg-white p-3">
        <header class="bg-white d-flex flex-wrap justify-content-between align-items-center pb-3 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2" height="60" src="{{ url('/images/Huawei-Emblem.png') }}">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">About Huawei</a></li>
                    <li><a href="/myaccount?rid={{ session()->get('user')->id }}"
                            class="nav-link px-2 text-dark">Account</a></li>
                    <li><a href="/userlist" class="nav-link px-2 text-dark">Users</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">Settings</a></li>
                </ul>
            </ul>

            <div class="col-md-3 text-end">
                <a href="/logout" class="link-dark"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </header>
    </div>
@else
    <div class="bg-white p-3">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2" height="60" src="{{ url('/images/Huawei-Emblem.png') }}">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-dark">About Huawei</a></li>
                    <li><a href="/login" class="nav-link px-2 text-dark">Sign In</a></li>
                </ul>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Search</button>
            </div>
        </header>
    </div>
@endif
