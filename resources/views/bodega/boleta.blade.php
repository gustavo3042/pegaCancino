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
                        <th id="">REPORTE DE CIERRE DEL TERMINAL</th>
                       
                       
                    </tr>

                    
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <p id="proveedor">Nombre: {{auth()->user()->name}}<br></p>
                            <p>IMPORT LAS PALMERAS DCO</p>
                            <p>5 DE ABRIL CHILLAN</p>
                                
                        </th>
                    </tr>

                    <tr>
                        
<br>

                    </tr>
                    <tr>

<br>
                    </tr>
                    <tr>

                        <br>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div id="fact">
           
            <p>NUMERO DE REGISTRO<br />
               <p style="text-align: center"> {{$order[0]->id}} </p></p>
               
        </div>
    </header>
    <br>


    <br>
    <section>
        <div>
            <table id="faccomprador">
                <thead>
                    <tr id="fv">
                        <th>ENCARGADO DEL REGISTRO</th>
                        <th>FECHA REGISTRO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$order[0]->encargado}}</td>
                        <td>{{$order[0]->fecha}}</td>
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
                        <th>TIPO PAGO</th>
                        <th>NÚMERO</th>
                        <th>TOTAL</th>
                        <th></th>
                       
                       
                    </tr>
                </thead>
                <tbody>

                    @foreach ($items as $item)
                    <tr >
                        <td>{{$item->brand}}</td>    
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->budget}}</td>
                      

                    </tr>
                    @endforeach
                  
                </tbody>
                <tfoot>

                    <tr>
                        <th colspan="3">
                            <p align="right">Total Capturas:</p>
                        </th>
                        <td>
                            <p align="right">${{$order[0]->total}} <p>
                        </td>
                    </tr>

                    <tr>
                        <th colspan="3">
                            <p align="right">Para Sueldos (10%):</p>
                        </th>
                        <td>
                            <p align="right">${{$order[0]->sueldos}} </p>
                        </td>
                    </tr>
                   

                </tfoot>
            </table>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <!--puedes poner un mensaje aqui-->
        <div id="datos">
            <p id="encabezado">
 
            </p>
        </div>
    </footer>
</body>

</html>
