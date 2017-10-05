<!DOCTYPE html>
   <html>
   <head>
    <title>Employee Management | Add</title>
   <style type="text/css">
   
   .topic{
               font-family: 'Raleway', sans-serif;
              color: #636b6f;
                padding: 0 25px;               
                font-weight: 600;
                justify-content: center;
            }
            .center {
               margin-top: 15%;
                align-items: center;
                display: flex;
                justify-content: center;
            }
   </style>
   
      <script type="text/javascript">
   var divs = new Array();

   divs[0] = "errFirst";

   divs[1] = "errLast";

   divs[2] = "errEmail";

   divs[3] = "errUid";

   divs[4] = "errPassword";

   divs[5] = "errConfirm";

   function validate()

   {

        var inputs = new Array();

        inputs[0] = document.getElementById('employee_firstname').value;

        inputs[1] = document.getElementById('employee_lastname').value;

        inputs[2] = document.getElementById('employee_email').value;

        inputs[3] = document.getElementById('employee_uid').value;

        inputs[4] = document.getElementById('employee_password').value;

        inputs[5] = document.getElementById('employee_confirm').value;

         var errors = new Array();

        errors[0] = "<span style='color:red'>Please enter your first name!</span>";

        errors[1] = "<span style='color:red'>Please enter your last name!</span>";

        errors[2] = "<span style='color:red'>Please enter your email!</span>";

        errors[3] = "<span style='color:red'>Please enter your user id!</span>";

        errors[4] = "<span style='color:red'>Please enter your password!</span>";

        errors[5] = "<span style='color:red'>Please confirm your password!</span>";

        for (i in inputs)

        {

             var errMessage = errors[i];

             var div = divs[i];

    

             if (inputs[i] == "")

                 document.getElementById(div).innerHTML = errMessage;

             else if (i==2)

             {

                 var atpos=inputs[i].indexOf("@");

                 var dotpos=inputs[i].lastIndexOf(".");

                 if (atpos<1 || dotpos<atpos+2 || dotpos+3>=inputs[i].length)

                 document.getElementById('errEmail').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";

               else

                     document.getElementById(div).innerHTML = "OK!";

             }

       else if (i==5)

             {

                 var first = document.getElementById('employee_password').value;

                 var second = document.getElementById('employee_confirm').value;

                 if (second != first)

                  document.getElementById('errConfirm').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";

                 else

                      document.getElementById(div).innerHTML = "OK!";

             }

           else

                 document.getElementById(div).innerHTML = "OK!";

        }

   }

   function finalValidate()

   {

        var count = 0;

       for(i=0;i<6;i++)

       {

         var div = divs[i];

         if(document.getElementById(div).innerHTML == "OK!")

              count = count + 1;

       }

      if(count == 6)

        document.getElementById("errFinal").innerHTML = "All the data you entered is correct!!!";

   }

   </script>
   
   </head>

   <body>
    <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
   <div class="center">
   <table>
   <tr>
   <td class="topic">First Name:</td>

   <td><input type="text" id="employee_firstname" name='employee_firstname' onkeyup="validate();" /></td>

   <td><div id="errFirst"></div></td>

   </tr>

   <tr>

   <td class="topic">Last Name:</td>

   <td><input type="text" id="employee_lastname" name='employee_lastname' onkeyup="validate();"/></td>

   <td><div id="errLast"></div></td>
   </tr>

   <td class="topic">E-mail:</td>

   <td><input type="text" id="employee_email" name='employee_email' onkeyup="validate();"/></td>

   <td><div id="errEmail"></div></td>

   </tr>

   <tr>

   <td class="topic">User-Id:</td>

   <td><input type="text" id="employee_uid" name='employee_uid' onkeyup="validate();"/></td>

   <td><div id="errUid"></div></td>

   </tr>

   <tr>

   <td class="topic">Password:</td>

   <td><input type="password" id="employee_password" name='employee_password'onkeyup="validate();"/></td>

   <td><div id="errPassword"></div></td>

   </tr>

   <tr>

   <td class="topic">Confirm Password:</td>

   <td><input type="password" id="employee_confirm" name='employee_confirm'onkeyup="validate();"/></td>

   <td><div id="errConfirm"></div></td>

   </tr>

   <tr>

   <td class="topic" colspan='2'><input type="submit" id="create" value="Add Employee"/ onclick="validate();finalValidate();"/></td>

   <td><div id="errFinal"></div></td>

   </tr>

   </table>
   </div>
   </form>
   </body>
   </html>