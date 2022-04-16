<x-app-layout>
    @include('layouts.manager_layout')
    <section class="home-section">
        @include('layouts.manager_navbar')
        <div class="home-content">
            <div class="overview-boxes">
                <div style="margin-bottom: 20px">
{{--                    <button class="btn add btn-primary">Add</button>--}}


                    <!-- Button trigger modal -->
                    <button type="button" class="btn add btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" enctype="multipart/form-data" action="{{route('tasks.store')}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Task Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Task Statue</label>
                                            <select class="form-select" aria-label="Default select example" id="status" name="status">
                                                @foreach($statuses as $key=>$status)
                                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="user" class="form-label">Assigned User</label>
                                            <select class="form-select" aria-label="Default select example" id="user" name="user">
                                                @foreach($users as $key=>$user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Task Description</label>
                                            <textarea class="form-control" id="description" name="description"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary btn-submit">Save changes</button>
                                    </form>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-sales box">
                    <table id="customers">
                        <tr>
                            <th>Task ID</th>
                            <th>Task Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($tasks as $key=>$task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->name}}</td>
                            <td><a href="/tasks/{{$task->id}}/edit">Edit</a></td>
                            <td><button class="delete_task" id="{{$task->id}}">Delete</button></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0A2558;
            color: white;
        }
        .btn.add::before {
            font-family: fontAwesome;
            content: "\f067\00a0";
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function(e){

            e.preventDefault();

            var name = $("#name").val();
            var description = $("#description").val();
            var status = $("#status").val();
            var user = $("#user").val();

            $.ajax({
                type:'POST',
                url:"{{ route('tasks.store') }}",
                data:{name:name, description:description, status:status, user:user},
                success:function(data){
                    location.reload();s
                }
            });

        });
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var id =
        });
    </script>
</x-app-layout>
