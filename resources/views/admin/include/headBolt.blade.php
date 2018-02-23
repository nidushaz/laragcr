    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="shazz">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon_1.ico' )}}">
    <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <link href="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />

    <link href="{{asset('plugins/bootstrapvalidator/src/css/bootstrapValidator.css')}}" rel="stylesheet" type="text/css" />
    <!--Form Wizard-->
    <link href="{{asset('plugins/summernote/dist/summernote.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery.steps/demo/css/jquery.steps.css') }}" />
    <link href="{{asset('plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link type="text/css" href="{{ asset('plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/custombox/dist/custombox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/sweetalert/dist/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}"/>
    <link href="{{ asset('plugins/custombox/dist/custombox.min.css') }}" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">

    <link href="{{ asset('css/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('js/js/modernizr.min.js') }}"></script>
    <style type="text/css">
        .delItemIcon
        {
            border: 1px solid #b70d0d;
            padding: 2px;
            position: absolute;
            z-index: 9999;
            margin-left: -30px;
            background: #E32C0D;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            margin-top:6px;
        }
        .mrg{
            margin-bottom: 5px;
        }
        .alertifyshaz{
            position: fixed;
            z-index: 99999;
            right: 22px;
            top: 62px;
            min-width: 200px;
            text-align: center;
            color:#fee;
        }
        .r{
            background-color: #f05050 !important;
            border: 1px solid #f05050 !important;
        }
        .s{
            background-color: #5fbeaa !important;
            border: 1px solid #5fbeaa !important;
        }

    </style>
