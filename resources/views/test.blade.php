{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<title>Bootstrap Example</title>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="container">--}}
{{--<!-- Trigger the modal with a button -->--}}
{{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}

{{--<!-- Modal -->--}}
{{--<div class="modal fade" id="myModal" role="dialog">--}}
{{--<div class="modal-dialog">--}}

{{--<!-- Modal content-->--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header">--}}
{{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--<h4 class="modal-title">Modal Header</h4>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}
{{--<p>Some text in the modal.</p>--}}
{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}

{{--</div>--}}

{{--</body>--}}
{{--</html>--}}



{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<body>--}}

{{--<h2>JavaScript Prompt</h2>--}}

{{--<button onclick="myFunction()">Try it</button>--}}

{{--<p id="demo"></p>--}}

{{--<script>--}}
{{--function myFunction() {--}}
{{--var txt;--}}
{{--var person = prompt("Please enter your name:", "Harry Potter");--}}
{{--if (person == null || person == "") {--}}
{{--txt = "User cancelled the prompt.";--}}
{{--} else {--}}
{{--txt = "Hello " + person + "! How are you today?";--}}
{{--}--}}
{{--document.getElementById("demo").innerHTML = txt;--}}
{{--}--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    //    window.onclick = function(event) {
    //        if (event.target == modal) {
    //            modal.style.display = "none";
    //        }
    //    }
</script>

</body>
</html>
