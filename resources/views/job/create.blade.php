@extends('layout.master')

@section('content')
    <div class="createBG">
        <div class="card">
            <div class="card-header">
                Post a Job
            </div>
            <div class="card-body">
                <form class="formmore" action="/jobs" method="post">
                    @csrf
                    <div class="inputCon job-name">
                        <label class="inputCon-label">Name</label>
                        <input type="text" name="title" class="form-input">
                    </div>
                    <div class="inputCon job-decs ">
                        <p><label class="inputCon-label">Description</label></p>
                        <textarea name="description" class="textArea" id="text-area" cols="30" rows="10"></textarea>
                    </div>
                    <div class="inputCon job-location ">
                        <label class="inputCon-label">Location</label>
                        <input type="text" name="location" class="form-input">
                    </div>
                    <div class="inputCon job-type">
                        <p><label >Type</label></p>
                        <select id="jobs" name="type" class="inputCon-field">
                            <div >
                                <option value="" disabled selected>Select job type</option>
                                <option value="full_time">Full-Time</option>
                                <option value="part_time">Part-Time</option>
                            </div>
                        </select>
                    </div>
                    <div class="inputCon job-salary ">
                        <label>Salary</label>
                        <input type="text" name="salary" class="form-input">
                    </div>
                    <button type="submit" class="" >Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection