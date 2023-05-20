@extends('layout.master')
@section('content')
    {{-- {{ $companies }} --}}
    <div class="companiesBG">
        <div class="companiesCon">
            <div class="searchCon">
                <h1>Find a greate place to work</h1>
                <h3>Company name or Job title</h3>
                <div class="searchIC">
                    <input type="text" >
                    <Button class="button button3">Find Companies</Button>
                </div>
            </div>
            <div class="concon">
                <h1>Companies</h1>
                <div class="companyCon">
                    @foreach ( $companies as $company )
                        <div class="companyContainer">
                            <div class="companyLogo">
                                <img src="{{ $company->logo }}" alt="Logo">
                            </div>
                            <div class="companyinfo">
                                <h2>{{ $company->name }}</h2>
                                <div class="salalryJobs">
                                    <p><a href="#">Ratings</a></p>
                                    <p><a href="#">Open Jobs</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection