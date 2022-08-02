<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>مستخدم جديد</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body dir="rtl">

    <div class="container mt-5">


        <div class="row">


            <div class="col-lg-12 col-md-12">

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>خطا</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-12 margin-tb">
                        </div><br>
                        <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2" action="{{ url('users/store')}}" method="post">
                            {{csrf_field()}}

                            <div class="">

                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label>اسم المستخدم: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper" name="name" required="" type="text">
                                    </div>

                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                        <label>البريد الالكتروني: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper" name="email" required="" type="email">
                                    </div>
                                </div>

                            </div>

                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label>كلمة المرور: <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper" name="password" required="" type="password">
                                </div>

                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label> تاكيد كلمة المرور: <span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper" name="confirm-password" required="" type="password">
                                </div>
                            </div>

                            <!-- <div class="row row-sm mg-b-20">
                                <div class="col-lg-6">
                                    <label class="form-label">حالة المستخدم</label>
                                    <select name="status" id="select-beast" class="form-control  nice-select  custom-select">
                                        <option value="active">مفعل</option>
                                        <option value="not active">غير مفعل</option>
                                    </select>
                                </div>
                            </div> -->
                            <input type="hidden" name="status" value="active">
                            <input type="hidden" name="roles_name" value="بلا صلاحية">

                            <!-- <div class="row mg-b-20">
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label"> صلاحية المستخدم</label>
                                        {!! Form::select('roles_name[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button class="btn btn-primary w-100" type="submit">تاكيد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    <!-- Container closed -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>