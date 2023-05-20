@extends('layout.master')
@section('content')
    <div class="indexBG">
        <div class="jobboardCon">
            @include('includes.searchbar')
            <div class="indexLRcontainer">
                <div class="left">
                    @foreach ($jobs as $job)
                        <div class="jobCard">
                            <div class="status">
                                <p class="{{ $job->status ? 'new' : 'old' }}">{{ $job->status ? 'new' : 'old'  }}</p>
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
                            <div class="viewmore">
                                <button>View details</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="right">
    
                </div>
            </div>
        </div>
    </div>
@endsection