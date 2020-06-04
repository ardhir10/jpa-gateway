@extends('layouts.app')



@section('content')
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if(session()->has('create'))
                        <div class="alert alert-success wd-100p">
                            {{ session()->get('create') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(session()->has('err'))
                        <div class="alert alert-danger wd-100p">
                            {{ session()->get('err') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(session()->has('delete'))
                        <div class="alert alert-danger wd-100p">
                            {{ session()->get('delete') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <a href="{{route('users.create')}}">
                            <button class="btn btn-success mb-3">
                                <i class="link-icon" data-feather="plus"></i>

                            </button>
                        </a>



                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('users.edit',$user->id)}}">
                                                <button type="button" class="btn btn-warning btn-sm"> Edit</button>
                                            </a>

                                            @if (Auth::user()->id != $user->id)
                                            <button class="btn btn-danger btn-sm" onclick="deleteData({{$user->id}})">
                                                Delete</button>
                                                
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
<script>
   let url = "{{url('users')}}/";
</script>
@endpush
