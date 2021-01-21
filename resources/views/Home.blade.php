
<!doctype html>
<html>

<body>
<div id="mybody">

   
        @include('Header')

<div class = "mdcontainer">
    <div class = "row text-center">
        <h1>Image Hover Effect</h1>
    </div>
    
   

    
<div class = "mdrow">
    <a href = "#" class = "column col-xs-6" id = "zoomIn"><figure><img src ="images/d1.jpg"></figure></a>
    <a href = "#" class = "column col-xs-6" id = "zoomOut"><figure><img src = "images/OS.jpg"></figure></a>   
</div>
    
   
            
</div>    
<footer style="margin-top: 30px ;" class="row">
        @include('footer')
</footer>

</div>
</body>
</html>