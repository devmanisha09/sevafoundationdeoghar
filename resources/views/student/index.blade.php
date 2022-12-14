@extends('layouts.master')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading teacherPagehead">
        <div class="col-lg-10">
            <h2>All Student</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('parents.index') }}">Student</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
            <div class="ibox-tools m-t-xl">
                <a href="{{ route('students.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><i class="fa fa-plus"></i> <strong>Create</strong></a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight tableWrapperStu">

        @include('partials.flash_messages.flashMessages')

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Student</h5>
                    </div>

                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example table-responsive" >
                                <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Session</th>
                                    <th>Division</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>User Roll</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @php($i=1)
                                @foreach ($students as $item)

                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->session }}</td>
                                        <td>{{ $item->division }}</td>
                                        <td>{{ ucfirst($item->user->name) }}</td>
                                        <td>{{ $item->roll_number }}</td>
                                        <td>{{ ucfirst($item->class->name) }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->phone }}</td>

                                        <td>
                                            @if(!empty($item->user->getRoleNames()))
                                                @foreach($item->user->getRoleNames() as $roleName)
                                                    <label class="badge badge-primary">{{ $roleName }}</label>
                                                @endforeach
                                            @endif
                                        </td>

                                        <td>
                                            <a title="Assign role" href="{{ route('assign-role.edit', $item->user->id) }}" class="cus_mini_icon color-success"> <i class="fa fa-user-plus" aria-hidden="true"></i></a>
                                            <a title="View" href="{{ route('students.show', $item->id) }}" class="cus_mini_icon color-success"> <i class="fa fa-eye"></i></a>
                                            <a title="Edit" href="{{ route('students.edit', $item->id) }}" class="cus_mini_icon color-success"> <i class="fa fa-pencil-square-o"></i></a>
                                            <a title="Delete" data-toggle="modal" data-target="#myModal{{$item->id}}" type="button" class="cus_mini_icon color-danger"><i class="fa fa-trash"></i></a>
                                        </td>

                                        <!-- The Modal -->
                                        <div class="modal fade in" id="myModal{{$item->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Delete brand</h4>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <h3>You are going to delete ' {{ $item->name }} ' ?</h3>

                                                        <a data-dismiss="modal" class="btn btn-sm btn-warning"><strong>No</strong></a>
                                                        <button class="btn btn-sm btn-primary" type="submit" onclick="event.preventDefault();
                                                                document.getElementById('class-delete-form{{ $item->id }}').submit();">
                                                            <strong>Yes</strong>
                                                        </button>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <form id="class-delete-form{{ $item->id }}" method="POST" action="{{ route('students.destroy', $item->id) }}" style="display: none" >
                                            {{method_field('DELETE')}}
                                            @csrf()
                                        </form>

                                    </tr>

                                    @php($i++)
                                @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
