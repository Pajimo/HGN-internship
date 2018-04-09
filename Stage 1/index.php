<!DOCTYPE html>
<html>
<head>
    <style>
          #dev{
            padding-top: 18%;
            padding-left: 25%;
            padding-right: 25%;
            padding-bottom: 25%;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
        }

        .alignleft {
        	float: left;
        }
        .alignright {
        	float: right;
        }

        body{
            background-color: #E5E5E5;
            margin-left: 100px;
            margin-right: 100px;
        }
    </style>
</head>
<body>
        <div class="alignleft">
              Home/<span style="color:blue">About</span>
        </div>
        <div class="alignright">
            <?php
                echo  date_default_timezone_set("Africa/Lagos"). "Time is " . date("F j, Y, g:i a") . "<br>";;
            ?>
        </div>
    <div id="dev">
          <h3 style="margin-bottom: 0px;">Hi, I'm Olamide Faniyan</h3>
          <p style="margin-bottom:0px; margin-top: 0px;">-------------------<</>/>-------------------</p>
          <h4 style="margin-top: 0px;">A Front-end developer/designer<br/>
          And I'm currently an intern at HNG</h4>
    </div>
</body>
</html>
