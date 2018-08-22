<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('style/feedback.css')}}">
    <link rel="stylesheet" href="{{asset('dist/js/bootstrap.js')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}">
</head>
<body class="si-body si-body-feedback">
<div class="container">
    <div id="form" class="col-md-6 col-md-offset-3 feedback">
        <div id="feedbackform">
            <div class="socialintents-rows">
                <div class="col-md-11"><h4 class="feedbackLine1">Hello! We'd love to hear your thoughts about our
                        website</h4></div>
                <div onclick="hide()" class="col-md-1"><p style="color: red" class="fa fa-times"></p><br></div>
            </div>
            <br>
            <form action="/feedback" method="post">
                {{csrf_field()}}
            <div class="col-md-12 form-inline socialintents-rows" style="">
                <p class="si-smalltext feedbackRatings">1. How likely would you be to recommend us to your friends?</p>
                <div onclick="changeActiveNum()" id="list" class=" col-md-12 btn-group" data-toggle="buttons">
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate1" value="1">
                        1 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate2" value="2">
                        2 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate3" value="3">
                        3 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate4" value="4">
                        4 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate5" value="5">
                        5 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate6" value="6">
                        6 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate7" value="7">
                        7 </label>
                    <label class="btn btn-default btn-feedback active">
                        <input type="radio" name="rating" id="rate8" value="8">
                        8 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate9" value="9">
                        9 </label>
                    <label class="btn btn-default btn-feedback">
                        <input type="radio" name="rating" id="rate10" value="10">
                        10 </label>
                </div>
                <div style="padding-top:10px;">
                    <p class="si-smalltext feedbackLine2">2. How can we improve our website? Do you have ideas,
                        questions,
                        or need help? Let us know.</p>
                </div>
                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <ul  class="nav nav-tabs" id="feedbackTabs">
                        <li onclick="feedback1()" id="nav"  >
                            <input type="hidden" name="typeFeedback" value="Question">
                            <a id="nav1" >Question</a>
                        </li>
                        <li onclick="feedback2()" id="nav" >
                            <input type="hidden"  name="typeFeedback" value="Idea">
                            <a id="nav1">Proposed Idea</a>
                        </li>
                        <li onclick="feedback3()" id="nav"  >
                            <input type="hidden" name="typeFeedback"   value="Problem">
                            <a >Problem</a>
                        </li>
                    </ul>
                </div>
                    {{--<label onclick="feedback1()" class="col-md-4 btn-default btn-feedback">--}}
                        {{--<input type="radio" name="typeFeedback"  value="Question">--}}
                        {{--Question </label>--}}
                    {{--<label onclick="feedback2()" class="col-md-4 btn-default btn-feedback">--}}
                        {{--<input type="radio" name="typeFeedback"  value="Idea">--}}
                        {{--Idea </label>--}}
                    {{--<label onclick="feedback3()" class="col-md-4 btn-default btn-feedback">--}}
                        {{--<input type="radio" name="typeFeedback"  value="Problem">--}}
                        {{--Problem </label>--}}
                <div id="feedbackType" class="tab-content si-borderbox">
                    <div id="tab1" class="feedback-tabs tab-pane active" style="padding:10px 0px 10px 0px;>
                             <input type=" id="cat1">
                    <textarea style="width:100%" class="form-control" name="userFeedback" id="feedback1" rows="3" placeholder="Please Enter your Question" maxlength="200" required="required">Please enter your Question!
                    </textarea>
                </div>
                {{--<div id="feedbackType" class="tab-content si-borderbox"></div>--}}
                <div id="feedbackType" class="tab-content si-borderbox"></div>
                </div>
                <input type="hidden" id="uid">
                <div class="" style="padding-top:5px;padding-bottom:5px;">
                    <button id="feedbackBtn" type="submit" class="btn btn-primary pull-right">Send Feedback</button>
                    <input type="checkbox" id="myCheck"  onclick="replyBack()">Want us reply back?</input>
                    <div id="text" style="display:none">
                        <p>Please Kindly give me your email</p>
                        <input style="outline: none; width: 100%;" name="userEmail" type="text" placeholder="your email">
                    </div>

                </div>

            </form>
            </div>
        </div>
    </div>
</div>
    <script>
        // Add active class to the current button (highlight it)
        function changeActiveNum() {
            var header = document.getElementById("list");
            var btns = header.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        }
        function feedback1() {
            document.getElementById("feedbackType").innerHTML = "<div id=\"tab1\" class=\"feedback-tabs tab-pane active\" style=\"padding:10px 0px 10px 0px;>\n" +
                "                           <input type=\" hidden\" id=\"cat1\" value=\"Question\">\n" +
                "                        <textarea style=\"width:100%\"\n" +
                "                                  class=\"form-control\" name=\"userFeedback\" id=\"feedback1\" rows=\"3\" placeholder=\"Please Enter your Question!\"\n" +
                "                                  maxlength=\"200\" required=\"required\"></textarea></div>";
        }

        function feedback2() {
            document.getElementById("feedbackType").innerHTML = "<div id=\"tab1\" class=\"feedback-tabs tab-pane active\" style=\"padding:10px 0px 10px 0px;>\n" +
                "                           <input type=\" hidden\" id=\"cat1\" value=\"Question\">\n" +
                "                        <textarea style=\"width:100%\"\n" +
                "                                  class=\"form-control\" name=\"userFeedback\" id=\"feedback1\" rows=\"3\" placeholder=\"Please Enter your Ideas Here!\"\n" +
                "                                  maxlength=\"200\" required=\"required\"></textarea></div>";
        }

        function feedback3() {
            document.getElementById("feedbackType").innerHTML = "<div id=\"tab1\" class=\"feedback-tabs tab-pane active\" style=\"padding:10px 0px 10px 0px;>\n" +
                "                           <input type=\" hidden\" id=\"cat1\" value=\"Question\">\n" +
                "                        <textarea style=\"width:100%\"\n" +
                "                                  class=\"form-control\" name=\"userFeedback\" id=\"feedback1\" rows=\"3\" placeholder=\"Please Enter your Problem Here!\"\n" +
                "                                  maxlength=\"200\" required=\"required\"></textarea></div>";
        }



        function replyBack() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }


        function hide() {
            var x = document.getElementById("form");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

        }
    </script>
</div>
</body>
