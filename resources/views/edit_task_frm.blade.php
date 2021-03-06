@extends('layouts.main_layout');

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>To do List - Emanuel Alec</h3>
            <hr>
            <h3 class="text-center mb-5">EDIT TASK</h3>
            <form action="{{route('edit_task_submit')}}" method="POST">
                @csrf
                <input type="hidden" name="id_task" value="{{$task->id}}">

                <div class="row">
                    <div class="col-sm-4 offset-sm-4">

                        <div class="form-group">
                            <label for="text_edit_task">EDIT TASK:</label>
                            <input type="text" name="text_edit_task" id="text_edit_task" class="form-control" value="{{ $task->Task}}">
                        </div>

                        <div class="form-group">
                            <a href="{{route('home')}}" class=" btn btn-secondary">Cancel</a>
                            <input type="submit" value="Salvar" class="btn btn-primary">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>





@endsection
