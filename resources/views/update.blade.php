@extends('layouts.app')

@section('content')
<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>LastName</td>
               <td><input type='text' name='lastname' /></td>
            </tr>
            <tr>
               <td>Major</td>
               <td><input type='text' name='major' /></td>
            </tr>
            <tr>
               <td>DOB</td>
               <td><input type='text' name='dob' /></td>
            </tr>
            <tr>
               <td>aplied uni</td>
               <td><input type='text' name='applieduni' /></td>
            </tr>
            <tr>
               <td>bio</td>
               <td><input type='text' name='bio' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>
@endsection