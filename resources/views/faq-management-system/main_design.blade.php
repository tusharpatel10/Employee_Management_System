<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Management System</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!--Stylesheet-->
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: rgb(102, 102, 102);
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px;
            width: 80%;
            min-width: 500px;
        }

        .title-container>h1 {
            color: #ffffff;
            font-weight: bold;
            font-size: 50px;
            text-shadow: 1px 1px #000;
        }

        .title-container>button {
            font-size: 15px;
            width: 170px;
        }

        .wrapper {
            background-color: #ffffff;
            margin-bottom: 20px;
            padding: 15px 40px;
            border-radius: 5px;
            box-shadow: 0 15px 25px rgba(0, 0, 50, 0.2);
        }

        .toggle {
            width: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 16px;
            color: #111130;
            font-weight: 500;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 15px 0;
        }

        .content {
            position: relative;
            font-size: 14px;
            text-align: justify;
            line-height: 30px;
            height: 0;
            overflow: hidden;
            transition: all 1s;
        }

        .action-button img {
            width: 15px;
        }
    </style>
</head>

<body style="background-color: rgb(102, 102, 102);">

    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>


    <!--Script-->
    <script>
        let toggles = document.getElementsByClassName('toggle');
        let contentDiv = document.getElementsByClassName('content');
        let icons = document.getElementsByClassName('icon');

        for (let i = 0; i < toggles.length; i++) {
            toggles[i].addEventListener('click', () => {
                if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
                    contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
                    toggles[i].style.color = "#0084e9";
                } else {
                    contentDiv[i].style.height = "0px";
                    toggles[i].style.color = "#111130";
                }

                for (let j = 0; j < contentDiv.length; j++) {
                    if (j !== i) {
                        contentDiv[j].style.height = "0px";
                        toggles[j].style.color = "#111130";

                    }
                }
            });
        }

        function showAllActionButtons() {
            let actionButtons = document.querySelectorAll('.action-button');

            actionButtons.forEach(button => {
                if (button.style.display === 'none' || button.style.display === '') {
                    button.style.display = 'block';
                } else {
                    button.style.display = 'none';
                }
            });
        }
    </script>

    @yield('script')
</body>

</html>
