<html>
<head>

<link rel="shortcut icon" type="images/x-icon" href="images/favicon.png">
<style>
#loading-div-background{
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    background: #fff;
    width: 100%;
    height: 100%;
}

#loading-div{
    width: 300px;
    height: 150px;
    background-color: #fff;
    border: 5px solid #1468b3;
    text-align: center;
    color: #202020;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -150px;
    margin-top: -100px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("/css/pie/PIE.htc"); /* HANDLES IE */
}



</style>
   <script type="text/javascript" src="jquery.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function (){
        $("#loading-div-background").css({ opacity: 1.0 });
    });

    function ShowProgressAnimation(){
        $("#loading-div-background").show().slow();
    }
</script>

</head>

        <body>
        
<form id="frm_send" name="frm_send" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

<input type="submit" id="submit" name="submit" class="button" onclick="ShowProgressAnimation();" value="Send">
</form>
<div id="loading-div-background">
  <div id="loading-div" class="ui-corner-all">
    <img style="height:32px;width:32px;margin:30px;" src="/images/please_wait.gif" alt="Loading.."/><br>PROCESSING. PLEASE WAIT...
  </div>
</div>
        </body>
</html>