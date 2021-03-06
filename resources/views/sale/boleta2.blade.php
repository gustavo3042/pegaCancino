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
                        <th id="">DATOS DEL VENDEDOR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style='font-size: 20px;'>
                            <p id="proveedor">Nombre: {{$sale->user->name}}<br>
                                {{--  {{$purchase->provider->document_type}}-COMPRA: {{$purchase->provider->document_number}}<br>  --}}
                                {{-- Direcci??n: {{$purchase->provider->address}}<br>
                                Tel??fono: {{$purchase->provider->phone}}<br> --}}
                                Email: {{$sale->user->email}}</p>
                                <p style='font-size: 20px;'>Boleta para Despacho</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="fact">
            {{--  <p>{{$purchase->provider->document_type}} COMPRA<br />
                {{$purchase->provider->document_number}}</p>  --}}
                <p>NUMERO DE VENTA<br />
                    {{$sale->id}}</p>
        </div>
    </header>
    <br>


    <br>
    <section>
        <div>
            <table id="faccomprador">
                <thead>
                    <tr id="fv">
                       <th>VENDEDOR</th>
                       <th>FECHA VENTA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                           <td style='font-size: 20px;' >{{$sale->user->name}}</td>
                          <td style='font-size: 20px;'>{{$sale->date}}</td>
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
                        <th>CANTIDAD</th>
                        <th>PRODUCTO</th>
                        <th>CODIGO</th>
                        <th>PRECIO VENTA (CHL)</th>
                       
                  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($saleDetails as $saleDetail)
                    <tr>
                        <td  style='font-size: 20px;'>{{$saleDetail->quantity}}</td>
                        <td style='font-size: 20px;' >{{$saleDetail->bodega->name}}</td>
                        <td style='font-size: 20px;' >{{$saleDetail->bodega->barcode}}</td>
                        <td style='font-size: 20px;'> {{$saleDetail->precio}}</td>
                       <!-- <td style='font-size: 40px;'>{{$saleDetail->precio + ($saleDetail->precio * 0.19)}}</td>-->
                       
                        
                    </tr>
                    @endforeach
                </tbody>
                <!--
                <tfoot style="">

                    <tr>
                        <th style='font-size: 30px;' colspan="3">
                            <p align="right">SUBTOTAL:</p>
                        </th>
                        <td style='font-size: 30px;'>
                            <p align="right">$/ {{number_format($subTotal + ($subTotal * 0.19))}}<p>
                        </td>
                    </tr>

                    <tr>
                        <th style='font-size: 30px;'colspan="3">
                            <p align="right">TOTAL IMPUESTO 19%:</p>
                        </th>
                        <td style='font-size: 30px;'>
                            <p align="right">$/ {{number_format($subTotal*$sale->iva/100,2)}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th style='font-size: 30px;' colspan="3">
                            <p align="right">TOTAL PAGAR:</p>
                        </th>
                        <td style='font-size: 30px;'>
                            <p align="right">$/ {{number_format($sale->total,2)}}<p>
                        </td>
                    </tr>

                </tfoot>

            -->

        
            <tbody id="tab" >


               

               


              

                


                
                <tr>
                    <th style='font-size: 20px;' colspan="4">
                        <p >Iva: ${{number_format( ($subTotal - $desc) *0.19)}}</p>
                       
                        <p >Total a pagar: ${{number_format( $sale->total )}}<p>
                        
                    </th>
                  
                </tr>

            </tbody>


            </table>
            <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
            <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <!--puedes poner un mensaje aqui-->
        <div id="datos">
            <p id="encabezado">
                {{--  <b>{{$company->name}}</b><br>{{$company->description}}<br>Telefono:{{$company->telephone}}<br>Email:{{$company->email}}  --}}
            </p>
        </div>
    </footer>
</body>

</html>
