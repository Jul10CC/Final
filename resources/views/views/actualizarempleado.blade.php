<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Producto</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("https://lh3.googleusercontent.com/proxy/wBWUkra2evH8rgvmbZ-rmu_vQOs4LPRdSCb4tjF80KQGALicwdGCAebY_1QYs5kXyxQ8WT_sEH-NEfmSJTVINWCe4R3XF1cqmImIpiI_NG9_T4dLrSxq03xiLoYCiBBGm8U");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
        }
        .contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 530px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(129,38,52,0.7);
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(7px/2);
            left: calc(50% - 40px);
        }
        .contact-form h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #FFF;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .contact-form input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .contact-form input[type="submit"] {
            height: 30px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: 15%;
        }
        .contact-form a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        input[type="checkbox"] {
            width: 20%;
        }
    </style>
</head>
  <body>
    <div class="contact-form">
        <img src="https://image.flaticon.com/icons/png/512/69/69686.png" class="avatar">
        <h2>Actualizar Empleado</h2>
        <form method="post">
        <div class="form-group">
    <input type="text" name="nombre" class="form-control" value ="{!!$empleado->nombre!!}" />
   </div>
   <div class="form-group">
    <input type="text" name="apellido" class="form-control" value ="{!!$empleado->apellido!!}" />
   </div>
   <div class="form-group">
    <input type="text" name="direccion" class="form-control" value ="{!!$empleado->direccion!!}" />
   </div>
   <div class="form-group">
    <select name ="id_empleo" id="inputEmpleo_id" class="form-control">
    @foreach($empleo as $emp )
   <option value="{!!$emp['id_empleo']!!}">{{$emp['nombre']}}</option>
   @endforeach
    </select>
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
        </form>
    </div> 
</body>
 </div>
</div>

</html>