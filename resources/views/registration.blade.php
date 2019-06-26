<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration Form</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>

        <style>
            .note
            {
                text-align: center;
                height: 80px;
                background: -webkit-linear-gradient(left, #0072ff, #8811c5);
                color: #fff;
                font-weight: bold;
                line-height: 80px;
            }
            .form-content
            {
                padding: 5%;
                border: 1px solid #ced4da;
                margin-bottom: 2%;
            }
            .form-control{
                border-radius:1.5rem;
            }
            .btnSubmit
            {
                border:none;
                border-radius:1.5rem;
                padding: 1%;
                width: 20%;
                cursor: pointer;
                background: #0062cc;
                color: #fff;
            }
        </style>
        <div class="container register-form">
            <form action="{{route('registration-submit')}}" method="post">
                @csrf
                <div class="form">
                    <div class="note">
                        <p>This is a Register Form made using Boostrap developed in laravel.</p>
                    </div>
    
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="firstname" placeholder="First Name *" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name *" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="emailaddress" placeholder="Email Address *" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number *" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Your Password *" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password *" />
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-default btnSubmit" value="Register Now!" />
                    </div>
                </div>
            </form>
        </div>        

        
    </body>
</html>