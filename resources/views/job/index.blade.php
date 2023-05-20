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
                            <div class="viewmore" >
                            <button class="view-details-btn" data-job-id="{{ $job->id }}">View details</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="right" id="job-details">
                    
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.view-details-btn').click(function() {
                    var jobId = $(this).data('job-id');
                    var url = '/jobs/' + jobId;

                    $.ajax({
                        url: url,
                        type: 'GET',
                        success: function(response) {
                            // Update the content of the 'right' div with the job details
                            $('#job-details').html(response);
                        },
                        error: function() {
                            console.log('An error occurred while fetching job details.');
                        }
                    });
                });
            });
        </script>
    </div>
@endsection