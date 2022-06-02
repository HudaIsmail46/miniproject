<form action = "userlist" method = "post" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
    @csrf
    <input value = "{{ request() -> input('search') }}"
    name = "search" id = "search" type = "search" placeholder = "Search...">
    <input type = "submit" value = "Search">
</form>