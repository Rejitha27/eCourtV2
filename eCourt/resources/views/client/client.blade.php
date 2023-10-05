@extends('layouts.client_profile_theme')
@section('content')

    <!--Lawyer Section Starts-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                <h5 class="mb-2 px-4">{{auth('client')->user()->name}}</h5>
                <p class="mb-3 px-4">{{auth('client')->user()->email}}</p>
                <div class="team-img position-relative">
                    <img class="img-fluid" src="{{asset('storage/eCourt/'.auth('client')->user()->profile_photo)}}" id="lawyerPhoto">
                </div>
                <a href="{{route('view.client.profile')}}" class="btn btn-primary mt-2">View Details</a>
                <a href="{{route('edit.client.profile')}}" method="post" class="btn btn-primary mt-2">Edit Details</a>
            </div>
            </div>

            <div  class="col-sm-6">
            <div class="row" style="padding-top: 25%;">
                <div class="col-sm-4">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-landmark"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{route ('filecase')}}" style="color: #37373F;">File a case</a> </h5>

                </div>
                <div class="col-sm-4">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-users"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{route ('casestatus')}}" style="color: #37373F; text-align: center; ">View Case Status</a></h5>
                </div>
                <div class="col-sm-4">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-hand-holding-usd"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="{{route ('scheduling')}}" style="color: #37373F;">View Case Schedule</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('lawyerPhoto')
                .attr(src,e.target.result)
                .width(100)
                .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
