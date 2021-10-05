@extends('layouts.app')
@section('contain')
<center>
    <?php
        foreach ($data as $item) {
            echo $item;
            echo "<br>";
        };
    ?>
    </center>
    
@endsection