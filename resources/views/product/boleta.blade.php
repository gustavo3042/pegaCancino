<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reporte de venta</title>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        font-size: 14px;
        /*font-family: SourceSansPro;*/
    }


    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
    }

    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        background: #33AFFF;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #faproveedor {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #faproveedor thead {
        padding: 20px;
        background: #33AFFF;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #faccomprador {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #faccomprador thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facproducto thead {
        padding: 20px;
        background: #33AFFF;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

</style>

<body>

    <header>
        {{--  <div id="logo">
            <img src="img/logo.png" alt="" id="imagen">
        </div>  --}}
        <div>
            <table id="datos">
                <thead>
                    <tr>
                        <th id="">DATOS EMPRESA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <p id="proveedor">Nombre:Miguel Ángel Salinas Obreque<br>
                                {{--  {{$purchase->provider->document_type}}-COMPRA: {{$purchase->provider->document_number}}<br>  --}}
                                {{-- Dirección: {{$purchase->provider->address}}<br>
                                Teléfono: {{$purchase->provider->phone}}<br> --}}
                               </p>

                               <p>Rut:9.308.163-3 </p>
                               <p>Fabricación y reparación de cortinas roller</p>
                               <p>Arturo Prat, Chillan</p>
                        </th>

                        
                    </tr>

                    <tr>


                        <br>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="fact">
            {{--  <p>{{$purchase->provider->document_type}} COMPRA<br />
                {{$purchase->provider->document_number}}</p>  --}}
                <p>NÚMERO REGISTRO<br />
                    <p style="text-align: center">{{$sale->id}}</p></p>
        </div>
    </header>
    <br>


    <br>
    <section>
        <div>
            <table id="faccomprador">
                <thead>
                    <tr id="fv">
                        <th>ENCARGADO</th>
                        <th>FECHA INGRESO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >{{$sale->user->name}}</td>
                        <td>{{$sale->date}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <br>
    <section>
        <div>
            <table id="facproducto">
                <thead>
                    <tr id="fa">
                        <th >CANTIDAD</th>
                        <th>PRODUCTO</th>
                        <th>COLOR</th>
                       <th>CODIGO PRODUCTO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($saleDetails as $saleDetail)
                    <tr>
                        <td style="text-align: center">{{$saleDetail->quantity}}</td>
                        <td tyle="text-align: center">{{$saleDetail->product->name}}</td>
                        <td tyle="text-align: center">{{$saleDetail->product->color}}</td>
                    
                        <td tyle="text-align: center">{{$saleDetail->product->barcode}}</td>
                       
                       
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>

                    <!--
                    <tr>
                        <th colspan="3">
                            <p align="right">Total en Dinero :</p>
                        </th>
                        <td>
                            <p align="right">$/ {{number_format($subTotal,2)}}<p>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="3">
                            <p align="right">TOTAL IMPUESTO (19%):</p>
                        </th>
                        <td>
                            <p align="right">$/ {{number_format($subTotal*0.19,2)}}</p>
                        </td>
                    </tr>
                -->

                </tfoot>
            </table>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <!--puedes poner un mensaje aqui-->
        <div id="datos">
           
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

               <p style="padding-left: 190px ;"> ----------------------------------------------------------</p>
               <strong style="padding-left: 260px ;">Firma final despacho</strong>

               
            
        </div>
    </footer>
</body>

</html>
