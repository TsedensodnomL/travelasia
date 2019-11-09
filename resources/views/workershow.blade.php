@extends('layouts.superior')

@section('content')
<?php echo $user->lastname;?>
<div class="card-body">
<?php 
echo "<p> Овог: ".$user->lastname."</p>";
echo "<p> Нэр: ".$user->firstname."</p>";  
echo "<p> Цахим хаяг: ".$user->firstname."</p>";
echo "<p> Утас: ".$user->firstname."</p>";
echo "<p> Төрсөн огноо: ".$user->firstname."</p>";
echo "<p> Хүйс: ".$user->firstname."</p>";

echo $user->lastname;
?>

</div>

@endsection()