<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
.w-full {
    width: 100%;
}
.justify-center {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.items-center {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
@media (min-width: 768px)
.md\:text-15xl {
    font-size: 9rem;
}
.text-5xl {
    font-size: 3rem;
}
.text-black {
    color: #22292f;
}
.font-black {
    font-weight: 900;
}
@media (min-width: 768px)
.md\:my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}
.w-16 {
    width: 4rem;
}
.my-3 {
    margin-top: .75rem;
    margin-bottom: .75rem;
}
.h-1 {
    height: .25rem;
}
.bg-purple-light {
    background-color: blue;
}
@media (min-width: 768px)
.md\:text-3xl {
    font-size: 1.875rem;
}
.text-2xl {
    font-size: 1.5rem;
}
.text-grey-darker {
    color: #606f7b;
}
.mb-8 {
    margin-bottom: 2rem;
}
.leading-normal {
    line-height: 1.5;
}
.font-light {
    font-weight: 300;
}
p {
    margin: 0;
}
.size{
    font-size:30px;
    margin-top:60px;
}
label{
    font-size:15px
}
         </style>
    </head>
    <body>
            
                <div class="container-fluid">
                         <div class="row">
                                <div style="background-color:white;height:100vh;" class="col-lg-6 flex  justify-center">
                                            <div class="text-black text-5xl md:text-15xl font-black">
                                               <a class="btn btn-primary btn-xs" href="/search">
                                                 <span style="font-size:15px" >go back</span>
                                               </a>
                                               <br>
                                                <span class="size"> ADD PRODUCT</span>
                                                <br>
                                                  <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>
                                                <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
                                                   please fill the textbox correctly
                                                </p>



                                            <div>
                                                <form method="post" action="/addproduct" style="overflow-y:'scroll'" enctype="multipart/form-data" >
                                                {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label for="name">Product Name</label>
                                                                <input  required autofocus type="name" name="name" class="form-control" id="name" placeholder="product name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="description">Product description</label>
                                                                <textarea name="description"  required autofocus  type="description" class="form-control" id="description" placeholder="product description"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="location">Product location</label>
                                                                <input  name="location"  required autofocus type="location" class="form-control" id="location" placeholder="product location [exrt home address]">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="district">Product district</label>
                                                                <input  name="district"  required autofocus type="district" class="form-control" id="name" placeholder="product district">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Product image</label>
                                                                <input name="file" required autofocus type="file" class="form-control" id="name" placeholder="product image only">
                                                            </div>

                                                            <div class="form-group">
                                                                 <input type="submit" class="form-control btn btn-success" id="name" placeholder="product image only">
                                                            
                                                            </div>

                                                            </form> 
                                            </div>

                                            </div>
                            
                                    </div> 
                                    <div class="col-lg-6"  
                                    style="height:100vh;background-image: url('admin.svg');-webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;
                                    background-size: cover; ">
                               
                                    </div>   
                          </div>
                </div>
     </body>
</html>