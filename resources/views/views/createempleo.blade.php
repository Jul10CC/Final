<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>V </title>
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
            background-image: url("https://userscontent2.emaze.com/images/68e7aead-b5a3-41cc-bd36-5250a113ae03/6ff017e5c38b2a71744d329b6b3f5d0b.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -o-filter: blur(10px);
            -ms-filter: blur(10px);
            filter: blur(10px);
        }
        .contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 500px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(93,103,113,0.5);
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(70px/2);
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
        <img src="https://image.flaticon.com/icons/svg/52/52762.svg" class="avatar">
        </br>
        </br>
        </br>
        <h2>Nuevo Empleo</h2>
        <form method="post">
        
    <div class="form-group">
    </br>
    <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" />
   </div>
   <div class="form-group">
    </br>
    <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripcion" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-outline-info" />
   </div>
        </form>
    </div>
</body>
 </div>
</div>
</html>