<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCourt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    <link href="{{asset ('assets/img/nationalemblem.png')}}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}"/>
</head>
<body>
<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h6 class="m-0 display-4 text-primary ">eCourt</h6>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-white border-bottom d-none d-lg-flex">
                <div class="col-lg-7 text-left">
                    <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>ecourtservices@yahoo.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+91 2586789</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center p-2">
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registration Form</div>
                <div class="card-body">
                    <form action="{{route('register.lawyerdata')}}" method="POST" enctype='multipart/form-data'>
                     @csrf
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Name<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" >
                                <div>@error('name')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="gender" class="col-sm-4 col-form-label ">Gender</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="gender" name="gender">
                                    <option value="" name="">-- Select  --</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="form-group-dob-field">
                            <label for="date_of_birth" class="col-sm-4 col-form-label">Date of Birth</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control datepicker" id="date_of_birth" name="date_of_birth">
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group lawyer-qualification-fields">
                            <label for="qualification" class="col-sm-4 col-form-label">Qualification<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="qualification">
                                    <option value="" name="">-- Select  --</option>
                                    <option value="BALLB" name="BALLB">BA LLB</option>
                                    <option value="LLM" name="LLM" >LLM</option>
                                    <option value="LLD" name="LLD">LLD</option>
                                </select>
                                <div>@error('qualification')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group-bar-num" >
                            <label for="experience" class="col-sm-4 col-form-label">BAR Registration Number<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="barNumber" name="bar_number">
                                <div>@error('bar_number')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group lawyer-practice-area-fields"  >
                            <label for="practice_area" class="col-sm-4 col-form-label">Practice Area<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="practice_area" >
                                    <option value="" name="">-- Select  --</option>
                                    <option value="civillaw" name="civillaw">Civil Law</option>
                                    <option value="criminallaw" name="criminallaw">Criminal Law</option>
                                    <option value="familylaw" name="familylaw">Family Law</option>
                                </select>
                                <div>@error('practice_area')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group lawyer-experience-fields" >
                            <label for="experience" class="col-sm-4 col-form-label">Experience<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="experience" name="experience">
                                <div>@error('experience')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="form-group-email-field">
                            <label for="email" class="col-sm-4 col-form-label">Email<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div>@error('email')<span class="text-danger error">{{$message}}</span>@enderror</div>

                        <div class="form-group row mb-3" id="phone-number-field">
                            <label for="phone_number" class="col-sm-4 col-form-label">Phone Number<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="phone_number" name="phone_number">
                                <div>@error('phone_number')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="address-field">
                            <label for="address" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-sm-4 col-form-label">Password<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password">
                                <div>@error('password')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password_confirmation" class="col-sm-4 col-form-label">Password Confirmation<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                <div>@error('password_confirmation')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="upload-profile-photo-field">
                            <label class="form-label col-sm-4 col-form-label" for="customFile">Upload Profile Photo<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="profilephoto" id="profilephoto">
                                <div>@error('profilephoto')<span class="text-danger error">{{$message}}</span>@enderror</div>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="upload-id-proof-field">
                            <label class="form-label col-sm-4 col-form-label" for="customFile">Upload id proof</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="idproof" >
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
