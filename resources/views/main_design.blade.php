<!DOCTYPE html>
<html>

<head>
    <title>Employee Management System||Home Page</title>
    <!--/tags -->

    <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <!--//tags -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
    <link
        href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>

    {{-- for Contact Page --}}
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <style>
        .our-members {
            background: linear-gradient(135deg, #f0f4ff, #ffffff);
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            color: #2c3e50;
            position: relative;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background: #007bff;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .member-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-top: 20px;
        }

        .member-card:hover {
            transform: translateY(-10px);
        }

        .profile-image-wrapper {
            width: 120px;
            height: 120px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #007bff;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .member-name {
            font-size: 20px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .member-designation {
            font-size: 16px;
            font-weight: 500;
            color: #6c757d;
            margin-top: -5px;
            font-style: italic;
            letter-spacing: 0.5px;
        }


        @media (max-width: 767px) {
            .section-title {
                font-size: 28px;
            }
        }


        /* The Contact Form CSS */
        .contact-form1 {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .contact-form1 form {
            flex: 1;
            min-width: 300px;
            margin-top: 100px;
        }

        .contact-form1 .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .contact-form1 .form-row input {
            flex: 1;
        }

        .contact-form1 input[type="text"],
        .contact-form1 input[type="email"],
        .contact-form1 textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form1 .send-btn {
            padding: 10px 20px;
            background-color: #3085d6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form1>div:last-child {
            flex: 1;
            min-width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-form1 img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .contact-form1 {
                flex-direction: column;
            }

            .contact-form1 .form-row {
                flex-direction: column;
            }
        }
    </style>

    {{-- for Contact Page --}}
    <!-- SweetAlert2 CSS & JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const successMsg = urlParams.get('success');
            const errorMsg = urlParams.get('error');

            if (successMsg) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: successMsg,
                    confirmButtonColor: '#3085d6'
                });
            } else if (errorMsg) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMsg,
                    confirmButtonColor: '#d33'
                });
            }
        });
    </script>
</head>

<body>
    <!-- header -->
    @include('layouts.header')
    @yield('content')

    @include('layouts.footer')
    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
        </span></a>
    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
