@extends('app')
@section('page title', 'Users Account')
@section('content')

    <div class="content">
        <div class="container-fluid">

            <form action="userlist" method="post" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                @csrf
                <input value="{{ request()->input('search') }}" name="search" id="search" type="search"
                    placeholder="Search...">
                <button class="btn btn-sm btn-secondary mb-1" type="submit" value="Search">Search</button>
            </form>

            @if (count($listofuser))
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Password</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Updated Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listofuser as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->created_at ? date('D, d F Y', strtotime($user->created_at)) : 'N/A' }}
                                </td>
                                <td>{{ $user->updated_at ? date('D, d F Y', strtotime($user->updated_at)) : 'N/A' }}
                                </td>
                                <td>
                                    <a href="/editmyuser?rid={{ $user->id }}" class="link-dark"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a data-bs-toggle="modal" href="#modalToggle" id="delete" data-id="{{ $user->id }}"
                                        role="button" class="link-dark"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <div class="modal fade" id="modalToggle" aria-hidden="true"
                                aria-labelledby="modalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content rounded-4 shadow">
                                        <div class="modal-body p-4 text-center">
                                            <h5 class="mb-0">Delete user account?</h5>
                                            <p class="mb-0">Are you sure you want to delete this record?</p>
                                        </div>

                                        <script>
                                            // 'Getting' data-attributes using getAttribute
                                            var userid = document.getElementById('delete').getAttribute('data-id');
                                        </script>

                                        <div class="modal-footer flex-nowrap p-0">
                                            <button type="button"
                                                class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"
                                                data-bs-target="#modalToggle2" data-bs-toggle="modal"
                                                data-bs-dismiss="modal"><strong>Delete</strong></button>
                                            <button type="button"
                                                class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modalToggle2" aria-hidden="true"
                                aria-labelledby="modalToggleLabel2" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            This record has been successfully deleted.
                                        </div>
                                        <div class="modal-footer flex-column">
                                            <button type="button"
                                                class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0"
                                                data-bs-dismiss="modal"
                                                onclick="location.href='/userdelete?rid='+userid;">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>

                </table>

                <div class="pagination">

                    {{ $listofuser->appends(['search' => Request::get('search')])->links() }}

                    <style>
                        .h-5 {
                            height: 1em;
                        }

                        .flex {
                            text-align: center;
                            width: 100%;
                        }

                        .leading-5 {
                            padding: 0.8em;
                        }

                    </style>
                @else
                    no record found
            @endif
        </div>

    </div>



    </div>

@endsection
