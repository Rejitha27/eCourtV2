@extends('layouts.lawyer_profile_theme')
@section('content')

<!--Lawyer Section Starts-->
@foreach ($cases as $case)
<div class="row"  style="padding-top: 2%; padding-bottom: 2%; border-style: solid; margin-top: 5%; margin-left: 1%; margin-right: 1%;">
        <div class="col-lg-2" style="display: inline-block;">
            <label>CaseFilingDate</label>
            <h5 class="mb-4 px-4">{{\Carbon\Carbon::parse($case->filing_date)->format('d/m/Y')}}
        </div>
        <div class="col-lg-2" style="display: inline-block;">
            <label>CaseNumber</label>
            <h5 class="mb-2 px-4">{{$case->case_number}}</h5>
        </div>
        <div class="col-lg-2" style="display: inline-block; ">
            <label>CaseType</label>
            <h5 class="mb-4 px-4">{{$case->case_type}}</h5>
        </div>
        <div class="col-lg-2" style="display: inline-block; ">
            <label>ClientName</label>
            <h5 class="mb-4 px-4">{{$case->client_name}}</h5>
            <h5 class="mb-4 px-4">{{$case->client->address}}</h5>
            <h5 class="mb-4 px-4">{{$case->lawyer->bar_number}}</h5>
        </div>
        <div class="col-lg-2" style="display: inline-block; padding-left: 2%;padding-top: 2%;">
            <form action="{{route('upload.case.report')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{encrypt($case->id)}}"/>
                <input type="hidden" name="case_status" value="{{$case->case_status}}"/>
                <input type="file" name="case_report">
                <button type="submit" class="btn btn-success ">Upload Report</button>
            </form>
        </div>
        <div class="col-lg-2" style="display: inline-block; padding-left: 2%;padding-top: 2%;">
            <a href="{{route('view.uploaded.reports',encrypt($case->id))}}" method="get"  class="btn btn-info mt-2">View Report</a>
        </div>
    </div>
@endforeach
<!--Lawyer Section Ends-->
@endsection
