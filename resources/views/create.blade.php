@extends('layouts.app')

@section('content')
<div class="container border form-control">
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" type="text" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Roll No</label>
            <input class="form-control" name="rollno" type="text" placeholder="Enter Roll No">
        </div>
        <div class="form-group">
            <label>Class</label>
            <input class="form-control" name="class" type="text" placeholder="Enter Class">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input class="form-control" name="phone" type="text" placeholder="Enter Phone">
        </div>
        <div class="custom-file form-group">
            <label>Upload Image</label>
            <input type="file" name="img" class="custom-file-input" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        </div>
        <div class="form-group">
            <input class=" btn btn-primary" name="submit" type="submit" placeholder="Enter Phone">
        </div>
    </form>
</div>
@endsection
