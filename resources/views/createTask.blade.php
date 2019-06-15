@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="text-center">Create Task</h1>
    
    
    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <label>Date</label>
            <input class="form-control" type="date" id="inputDate">
            <br>
            @if($errors->any())
                @error('date')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
            @endif
        </div>
        
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" id="inputTitle">
            <br>
            @if($errors->any())
                @error('title')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
            @endif
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="inputDescription"> </textarea>
            <br>
            @if($errors->any())
                @error('description')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
            @endif
        </div>
        <button class="btn btn-secondary" id="clear">Clear</button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#addTask" id="passValue">Next</button>
    </div>
    
    <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create this task?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form action="/task" method="POST">
        @csrf

          <div class="modal-body">
            <h3>Date:</h3> <h4 id="textDate"></h4>
            <br>
            <h3>Title:</h3> <h4 id="textTitle"></h4>
            <br>
            <h3>Description:</h3> <h4 id="textDescription"></h4>

        <!-- Hidden Inputs -->
                <input class="form-control" type="date" id="date" name="date" value="" hidden>
                <input class="form-control" type="text" id="title" name="title" value="" hidden>
                <textarea class="form-control" id="description" name="description" hidden>
                </textarea>
            </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Back</button>
            <button class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
</div>
</div>



</div>
@endsection