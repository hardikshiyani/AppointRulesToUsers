<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Points</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        body {
            background-color: #dee9ff;
        }

        .registration-form {
            padding: 50px 0;
        }

        .registration-form form {
            background-color: #fff;
            max-width: 720px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .registration-form .form-icon {
            text-align: center;
            background-color: #5891ff;
            border-radius: 50%;
            font-size: 40px;
            color: white;
            width: 100px;
            height: 100px;
            margin: auto;
            margin-bottom: 50px;
            line-height: 100px;
        }

        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
        }

        .registration-form .social-media {
            max-width: 600px;
            background-color: #fff;
            margin: auto;
            padding: 35px 0;
            text-align: center;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            color: #9fadca;
            border-top: 1px solid #dee9ff;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .registration-form .social-icons {
            margin-top: 30px;
            margin-bottom: 16px;
        }

        .registration-form .social-icons a {
            font-size: 23px;
            margin: 0 3px;
            color: #5691ff;
            border: 1px solid;
            border-radius: 50%;
            width: 45px;
            display: inline-block;
            height: 45px;
            text-align: center;
            background-color: #fff;
            line-height: 45px;
        }

        .registration-form .social-icons a:hover {
            text-decoration: none;
            opacity: 0.6;
        }

        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 100px;
                height: 100px;
                font-size: 30px;
                line-height: 70px;
            }
          
        }
    </style>

</head>

<body>
    <div class="registration-form">
        <form method="post" name="dynamic_field" action="http://localhost/CI_rules/Rules_controller/storePost">
            <div class="form-icon">
                <span><i class=''></i></span>
            </div>
            <table border="5" id="dynamic_field">
                <div class="form-group">
                    <div id="dynamicCheck">
                        <tr>
                            <td><label><b style="font-family:cursive" ;>SET RULES</b></label></td>
                            <td><input type="text" class="form-control item" id="rules" name="rules[][rule]" placeholder="SET RULES" style="width:180" required=""></td>
                            <td><label><b style="font-family:cursive" ;>Enter Points</b></label></td>
                            <td><input type="text" class="form-control item" id="points" name="points[][points]" placeholder="ENTER POINTS" style="width:180"></td>
                    </div>
                    <td><button type="button" name="add" id="add" class="btn btn-success btn_add" style="font-size:16px;">+</button></td
                        
                         
                    </tr>
                </div>
            </table>
            <div id="newElementId"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">SET RULES</button><br>
                <center><a href="<?php echo base_url('displaydata') ?>">BACK</a></center>
            </div>
            <div>
                <table style="width: 100%; background-color: white" border="5" id="demo">

                    <thead>
                        <th>id</th>
                        <th>rule</th>
                        <th>Points</th>
                    </thead>
                    <tbody>
                        <?php
                        $id = 1;
                        // echo "<pre>"; print_r($data);
                        // exit;  
                        foreach ($data as $row) {
                        ?>
                            <tr>

                                <td><?php echo $id ?></td>
                                <td><?php echo $row['rule']; ?></td>
                                <td><?php echo $row['points']; ?></td>
                            <?php
                            $id++;
                        }
                            ?>

                    </tbody>

            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>


    <script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"> <td><label><b style="font-family:cursive";>SET RULES</b></label></td><td><input type="text" class="form-control item" id="rules" name="rules[][rule]" placeholder="SET RULES" style="width:180" class="form-control name_list" required /></td><td  id="row'+i+'"><label><b style="font-family:cursive" ;>Enter Points</b></label></td><td><input type="text" class="form-control item" id="points" name="points[][points]" placeholder="SET POINTS" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr></tr>');  
           //$('#dynamic_field').append('<tr ><td><label><b style="font-family:cursive"  ;>SET RULES</b></label></td><td><input type="text" class="form-control item" id="rules" name="rules[][rule]" placeholder="SET RULES" style="width:180"></td><td><label><b style="font-family:cursive" ;>Enter Points</b></label></td><td><input type="text" class="form-control item" id="points" name="rules[][points]" placeholder="SET POINTS" style="width:180"></td></div><td><i class="fa fa-plus-circle"style="font-size:40px;" onclick="createNewElement();" aria-hidden="true"></i></td></tr></div>');
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
  
    });  
</script>
    <script type="text/JavaScript">
        function createNewElement() 
        {   
	    var txtNewInputBox = document.createElement('div');
	    txtNewInputBox.innerHTML = "  <table border='5'><tr><td><label><b style='font-family:cursive'  ;>SET RULES</b></label></td><td><input type='text' class='form-control item' id='rules' name='rules[][rule]' placeholder='SET RULES' style='width:180'></td><td><label><b style='font-family:cursive' ;>Enter Points</b></label></td><td><input type='text' class='form-control item' id='points' name='rules[][points]' placeholder='SET RULES' style='width:180'></td></div><td><i class='fa fa-plus-circle'style='font-size:40px;' onclick='createNewElement();' aria-hidden='true'></i></td></tr></div>";
	    document.getElementById("newElementId").appendChild(txtNewInputBox);
        }
</script>
    <script>
        $(document).ready(function() {
            $('#birth-date').mask('00/00/0000');
            $('#phone-number').mask('0000-0000');
        })
    </script>

</body>

</html>