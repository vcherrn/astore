<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid bg-light py-3">
    
       
<form action="{{ route('order.complete') }}" method="POST">
            @csrf
          <div class="controls">
              <div class="row">
   
                      <div class="col-sm-4">
                      <div class="form-group">
                          <label for="form_town">Город *</label>
                          <input   type="text" name="town" class="form-control" placeholder="Город"  >

                      </div>
                  </div>

                  <div class="col-sm-4">
                      <div class="form-group">
                          <label for="form_street">Район *</label>
                          <input    type="text" name="area" class="form-control" placeholder="Район" >
                        
                      </div>
                  </div>

                  <div class="col-sm-4">
                      <div class="form-group">
                          <label for="form_street">Улица *</label>
                          <input   type="text" name="street" class="form-control" placeholder="Улица" >
                         
                      </div>
                  </div>

                  
                  <div class="col-sm-4">
                      <div class="form-group">
                          <label for="form_house">Дом *</label>
                          <input   type="number " name="house" class="form-control" placeholder="Номер дома" >
                          
                      </div>
                  </div>
                
                  <div class="col-sm-4">
                      <div class="form-group">
                          <label for="form_apartment">Квартира *</label>
                          <input    type="number " name="apartment" class="form-control" placeholder="Номер квартиры" >
                         
                      </div>
                  </div>

                  <div class="col-sm-4">
                      <div class="form-group">
                          <label for="form_phone">Номер телефона *</label>
                          <input   type="text" name="phone" class="form-control" placeholder="Номер телефона" >
                          
                      </div>
                  </div>
                
                  
              </div>
          </div> 
         
  
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_queries">Особые пожелания </label>
                      <textarea   name="message" class="form-control" placeholder="Особые пожелания" rows="4"></textarea>
                     
                  </div>
              </div>
              <div class="col-md-12">
              </div>
          </div>
         
      
          <div>
                          Cart Price: {{ $sum = Apackage\Astore\Models\User_Product::getTotal() }}р
            </div>

           
                
                
                <p  class="btn border" onclick="makeChange()">Calculate the cost</p>
                 
                <div style="display:none;"  id='b1' > Delivery:{{$geometric = Apackage\Astore\FacadeClasses\GetGeoMetric::index()}}</div>
                <div style="display:none;" id='b2'> All: {{$sum+$geometric}}</div>
                   
             <div>
            <button  class="btn border " >Сделать заказ</button>
            </div>  
      </form>
      
  </div>
    <script>
        function makeChange() {
        document.getElementById("b1").style.display = "block";
        document.getElementById("b2").style.display = "block";
}
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>