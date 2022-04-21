<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PHP, language, code, La Liga, Laravel, Composer, MVC, Sprint4, ITacademy, BarcelonActiva">
	<link rel="shortcut icon" href="img/pelotadiseño2.png" type="image/x-icon">
    <meta name="description" content="Ejercicio que implementa una liga de futbol a través de Laravel">
    <meta name="author" content="JcSomeCodes , JcSomeShots ">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Square+Peg&display=swap" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>

    <title>Register</title>
</head>
<body>
    <header class=" cabecera flex flex-col justify-center ">

        <div class="titulo mx-auto my-8 flex items-center">
            <h1 class="text-6xl textoCabecera  -skew-y-6">La Liga de Campiones</h1>
            <figure>
                <img src="img/pelotaNaranja.png" alt="pelotaDiseny" class="w-14 animate-pulse ml-7 ">
            </figure>
        </div>
        <div class="line mx-3 border-b opacity-25 border-black"></div>


        <nav class="flex-none mx-16 my-5">
            <ul >
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline txt">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="#"> Resultados</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline">
                    <a class="ml-6 mr-2 textoCabecera text-lg hover:text-yellow-900" href="#"> Calendario</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-6 mr-2">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="index.html"> Clasificación</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out float-right mr-2 textoCabecera">
                    <a href="altaEquipo.html"> Nuevo Equipo</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="tabla border-4 mx-10 flex flex-col justify-center items-center mt-9">
            <h2 class="txt mt-4 text-2xl tracking-wider">Quieres dar de alta a un nuevo equipo</h2>


            <form action="#" method="post" class="flex flex-col  items-start my-9">
                <div class="flex flex-row justify-center items-center">
                    <label for="nombreEquipo" class="mr-11 ">Nombre del equipo</label>
                    <input type="text" id="nombreEquipo" name="nombreEquipo" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">
                </div>

                <div class="mt-2 flex flex-row justify-center items-center">
                    <label for="sloganEquipo" class="mr-12 ">Slogan del equipo</label>
                    <input type="text" id="sloganEquipo" name="nombreEquipo" size="40" class="pl-2 rounded border focus:border-yellow-900 focus:outline-none focus:shadow-md">
                </div>

                <div class="flex flex-row justify-center items-center space-x-6 mt-2">
                    <label for="antiguedad">Antigüedad del equipo:</label>
                    <select name="anyos" id="antiguedad" class="rounded px-3 focus:border-yellow-900 focus:outline-none focus:shadow-md py-0.5">
                        <option value="max2"> menos de 2 años</option>
                        <option value="max5"> menos de 5 años</option>
                        <option value="max10"> menos de 10 años</option>
                        <option value="max"> más 10 años</option>
                    </select>
                </div>

                <input type="submit" value="Registra" style="background-color: #036; text-align: center;" class="submit mx-auto px-3 py-1 ease-in duration-300 mt-4 rounded-lg bg-gray-400 shadow-lg cursor-pointer">
                
            </form>

           
        </section>
        <div class="txt flex justify-center mt-2">
            <p class="text-xs mr-3"><small>Si quieres dar de baja a un equipo</small></p>
            <a href="#" class="txt pincha align-text-bottom mr-2 flex items-end">
                <small>pincha aquí</small>
                <figure>
                    <img src="img/pelotaNaranja.png" alt="pelotaDiseny" class="w-4 pelota ml-2 ease-in-out">
                </figure>
            </a>
            <p class="text-xs mr-3"><small>... por qué te vas?</small></p>
        </div>
    </main>
</body>
</html>