@extends('layouts.template')

@section('content')
     <!--Main content-->
 <section class="container margin-bottom-50"> 
         
    <div class="about-container">
    

  <!DOCTYPE html>
<html>
  <style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>
<body>

<h2></h2>

<table style="width:100%">
  <tr>
    <th>id_Suppliers</th>
    <th>nama_supplier</th>
    <th>jenis</th>
    <th>kontrak</th>
    <th>biaya</th>
  </tr>
  <tr>
    @foreach ($blog as $b)
    <tr>
      <td>{{ $b-> id}}</td>
      <td>{{ $b-> nama_supplier }}</td>
      <td>{{ $b-> jenis }}</td>
      <td>{{ $b-> kontrak }}</td>
      <td>{{ $b-> biaya }}</td>
    </tr> 
    @endforeach
   
  </tr>
</table>

</body>
</html>

</div>


     
    <!--banner-->
    <div class="tm-banner">
      <h2 class="tm-banner-title">Maecenas</h2>
      <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
      <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
    </div>
    
  </section> <!-- Main content -->
@endsection