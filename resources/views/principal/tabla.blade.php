<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}} ">
<style>

th, td {
  padding: 5px;
  text-align: left;    
}

</style>
</head>
<body>

<h2>Cell that spans two columns</h2>
<p>To make a cell span more than one column, use the colspan attribute.</p>
<div style="text-align:center;">
<table border="0"style="width:85%; margin: 0 auto;" class="table table-bordered">

    <tbody>
  <tr> 
    <th style="width:48%;"></th>
     <th style="width:4%;"></th>
    <th style="width:48%; ">Atención a cliente</th>
   
  </tr>

  <tr>
    <td>http://jjdeveloperswdm.com/</td>
    <td></td>
    <td>464-112-4092</td>
  </tr>
  <tr>
    <td rowspan="3"> Desarrollo de software · Seguridad y vigilancia · Equipo de cómputo · Instalación de redes</td>
    <td></td>
    <td>443-111-1547</td>
  </tr>
  <tr>
  <td></td>
    <td>pablo</td>
  </tr>
  <tr>
  <td></td>
    <td>serviclientedev@jjdeveloperswdm.com</td>
  </tr>
  </tbody>
  
  
</table>
</div>

</body>
</html>