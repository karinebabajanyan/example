<x-app-layout>
    @include('layouts.manager_layout')
    <section class="home-section">
        @include('layouts.manager_navbar')
        <div class="home-content">
            <div class="overview-boxes">
        <form method="post" enctype="multipart/form-data" action="{{ route('tasks.update',[$task->id]) }}">
            @csrf
            {{ method_field('PUT') }}
            <div class="mb-3">
                <label for="name" class="form-label">Task Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Task Statue</label>
                <select class="form-select" aria-label="Default select example" id="status" name="status">
                    @foreach($statuses as $key=>$status)
                        @if($status->id===$task->status)
                            <option value="{{$status->id}}" selected>{{$status->name}}</option>
                        @else
                            <option value="{{$status->id}}">{{$status->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label">Assigned User</label>
                <select class="form-select" aria-label="Default select example" id="user" name="user">
                    @foreach($users as $key=>$user)
                        @if($user->id===$task->assigned_to)
                            <option value="{{$user->id}}" selected>{{$user->name}}</option>
                        @else
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Task Description</label>
                <textarea class="form-control" id="description" name="description">{{$task->description}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Save changes</button>
        </form>
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
</x-app-layout>
