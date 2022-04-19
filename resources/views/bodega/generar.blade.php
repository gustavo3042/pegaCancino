


<!DOCTYPE html>
<html>
<head>
    <title>Multiple data send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
</head>

<style>


    
</style>
<body>
    <div class="card">



    
<div class="card-header">

    <h3 class="text-center">Generar Reporte De Cierre Del Terminal</h3>
    <p style="text-align: center">IMPORT LAS PALMERAS DCO</p>
    <p style="text-align: center">CALLE 5 DE ABRIL</p>
    <p style="text-align: center">CHILLAN</p>

 <div style="padding: 20px;">
    <a class="btn btn-primary" href="{{route('bodega.registro')}}">volver</a>
</div>

</div>

<br>



<div class="card-body">



     <form  action="/orders" method="post">

       {{csrf_field()}}
         <section>
             <div class="panel panel-header">

                 <div class="row">
                     <div class="col-md-6">
                 <div class="form-group">
                     <label for="encargado">Encargado:</label>
                     <input type="text" name="encargado" value="{{auth()->user()->name}}" class="form-control " readonly>
                 </div></div>
                 <div class="col-md-6">
                 <div class="form-group">
                     <label for="date">Fecha:</label>
                     <input type="datetime-local" name="fecha" class="form-control" required >
                     <input type="hidden" name="status" value="1" id="">
                 </div></div>


                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="terminal">Terminal:</label>
                        <input type="text" name="terminal" class="form-control" required >
                        
                    </div></div>

             </div></div>
             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                            
                             <th>Tipo Pago</th>
                             <th>Número</th>
                             <th>Costo</th>
                             <th>Total</th>

                             <!--boton addRow para agregar input para abajo class addRow -->
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>

                     <tbody>
         <tr>
        
         <td><input type="text" name="brand[]" class="form-control" value="Credito" readonly></td>
           <td><input type="text" name="quantity[]" class="form-control quantity" ></td>
           <td><input type="text" name="budget[]" class="form-control budget"></td>
          
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>

         
         </tr>

         <tr>
        
            <td><input type="text" name="brand[]" class="form-control" value="Red Compra" readonly></td>
              <td><input type="text" name="quantity[]" class="form-control quantity" ></td>
              <td><input type="text" name="budget[]" class="form-control budget"></td>
             
            <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
   
            
            </tr>



            <tr>
        
                <td><input type="text" name="brand[]" class="form-control" value="Efectivo" readonly></td>
                  <td><input type="text" name="quantity[]" class="form-control quantity" ></td>
                  <td><input type="text" name="budget[]" class="form-control budget"></td>
                 
                <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
       
                
                </tr>



                         </tr>
                     </tbody>


                     <tfoot>
                         <tr>
                           
                             <td style="border: none"></td>
                         
                             <td >Total Capturas :</td>
                             <td><b class="total"></b> </td>
                             <td><input type="submit" name="" value="Guardar" class="btn btn-success"></td>
                         </tr>
                     </tfoot>



                 </table>


             </div>
         </section>
     </form>


    </div>

</div>
<script type="text/javascript">

    $('tbody').delegate('.quantity,.budget','keyup',function(){
        var tr= $(this).parent().parent();
        var quantity=tr.find('.quantity').val();
        var budget=tr.find('.budget').val();
        var amount=(1*budget);
        tr.find('.amount').val(amount);
        total();

    

    });


    function total()
    {

      var total = 0;

      $('.budget').each(function(i,e){


        var budget = $(this).val()-0;

        total +=budget;


      });

      $('.total').html(total+".00 $");

    }



    $('.addRow').on('click',function(){
        addRow();
    });




    function addRow()
    {
        var tr='<tr>'+
            
        

        '<td><input type="text" name="brand[]" class="form-control"></td>'+

        '<td><input type="text" name="quantity[]" class="form-control quantity" ></td>'+

        '<td><input type="text" name="budget[]" class="form-control budget"></td>'+

    

        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };


    $('.remove').live('click',function(){

        var last=$('tbody tr').length;

        if(last==3){
            alert("No se puede eliminar la columna");
        }
        else{
             $(this).parent().parent().remove();
        }

    });




</script>


</body>
</html>
