@extends('layout')
@section('main-content')
<div >
<div class="float-start">
<h4 class="pb-3">Create Task</h4>
</div>

<div class="float-end">
<a href="{{ route('index') }}" class="btn btn-info">
<i class="fa fa-arrow-left"></i> All Task
</a>
</div>
<div class="clearfix"></div>
</div>

<div class="card card-body bg-light p-4">
<form action="{{ route('task.store') }}" method="POST">
@csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
    
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" class="form-control" id="description" row="5" name="description"></textarea>
    </div>

    <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <select name="status" class="form-control" >
    @foreach($statuses as $status)
        <option value="{{ $status['value'] }}"> {{ $status['label'] }} </option>
    @endforeach
    </select>
    </div> 

  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
</form>
 </div>
@endsection