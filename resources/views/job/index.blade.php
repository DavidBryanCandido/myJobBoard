@extends('layout.master')
@section('content')
    <div class="indexBG">
        @include('includes.searchbar')
        <div class="jobboardCon">
            @foreach ($jobs as $job)
                <div class="jobCard">
                    <div class="status">
                        <p>{{ $job->status }}</p>
                    </div>
                    <div class="jobTitle">
                        <h1>{{ $job->title }}</h1>
                    </div>
                    <div class="company_id">
                        <h2>{{ $job->companies->name }}</h2>
                    </div>
                    <div class="jobTitle">
                        <p>Location: {{ $job->location }}</p>
                        <p>Salary: {{ $job->salary }}</p>
                        <p>Job type: {{ $job->type }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection