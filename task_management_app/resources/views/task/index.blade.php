@extends('layouts.app')

@section('content')


<div class="card-box mb-30 mt-5">
    <div class="pd-20">
        @if (session('yes'))
                    <div class="alert alert-success" role="alert">
                        {{ session('yes') }}
                    </div>
                @endif
                @if (session('no'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('no') }}
                    </div>
                @endif
                <a href="{{ route('home') }}" class="btn btn-success" rel="noopener noreferrer">Dashboard</a>
        <a href="{{ route('task.create') }}" class="btn btn-primary" rel="noopener noreferrer">Add new task</a>

    </div>
    <div class="pb-20">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Task No</th>
                    <th>Task</th>
                    <th>State</th>
                    <th>status</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i = 1;
                 @endphp
                 @foreach ($tasks as $task)

                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $task->name }}</td>
                        @if ($task->state == 0)
                          <td>Not Urgent</td>
                        @else
                            <td><span class="bg-danger p-2 text-white">Urgent</span></td>
                        @endif
                        <td>{{ $task->status }}</td>

                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                    <a class="dropdown-item" href="{{ route('task.edit', $task->id) }}"><i class="dw dw-edit2"></i> Edit</a>

                                    <button type="submit" class="dropdown-item" href="{{ route('task.destroy',$task->id ) }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('task-form.{{ $task->id }}').submit(); ">
                                        <i class="dw dw-delete-3"></i> Delete
                                    </button>
                                    <a class="dropdown-item" href="{{ route('task.state',$task->id ) }}"><i class="dw dw-alarm"></i> Urgent/Not urgent</a>
                                    <a class="dropdown-item" href="{{ route('task.email' ) }}"><i class="dw dw-mail"></i>Send Email</a>

                                    <form id="task-form.{{ $task->id }}" action="{{ route('task.destroy',$task->id ) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('delete')
                                    </form>

                                </div>
                            </div>
                        </td>
                    </tr>
                @php
                    $i ++;
                @endphp
                @endforeach
            </tbody>

        </table>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
    </div>
</div>


@endsection
