@extends('layouts.app')

@section('content')
<html>
   <head>
      <title>Update Your Profile | Add</title>
   </head>

   <body>
      <div class="jumbotron">
      <form action = "/create" method = "post" style="width: 50px;margin-left: 40%;margin-bottom: 120px;padding-bottom: 80%">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>LastName</td>
               <td><input type='text' name='lastname' /></td>
            </tr>
            <hr>
            <tr>
               <td>Major</td>
               <td><input type='text' name='major' /></td>
            </tr>
            <hr>
            <tr>
               <td>DOB</td>
               <td><input type='text' name='dob' /></td>
            </tr>
            <hr>
            <tr>
               <td>aplied uni</td>
               <td><input type='text' name='applieduni' /></td>
            </tr>
            <hr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Profile"/>
               </td>
            </tr>
         </table>
      </form>
     </div> 
   </body>
</html>
@endsection