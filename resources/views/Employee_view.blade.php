<!DOCTYPE html>
<html>
 <head>
      <title>View Employee Records</title>
   </head>
   
   <body>
      <table border = 2 cellspacing="4" align="center"
      cellpadding="6" background-color="blue">
         <tr>
            <td><b>ID</b></td>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>E-mail</b></td>
            <td><b>User-ID</b></td>
            <td><b>Password</b></td>
            <td><b>Confirm Password</b></td>
 
       </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->uid }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->confirm }}</td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>
   
  