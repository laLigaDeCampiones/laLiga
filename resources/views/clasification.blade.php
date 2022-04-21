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

    <title>Clasification</title>
</head>
<body>
    <header class=" cabecera flex flex-col justify-center ">

        <div class="titulo mx-auto my-8 flex items-center">
            <h1 class="text-6xl textoCabecera  -skew-y-6">La Liga de Campiones</h1>
            <figure>
                <img src="img/pelotaNaranja.png" alt="pelotaDiseny" class="w-14 animate-pulse ml-7">
            </figure>
        </div>
        <div class="line mx-3 border-b opacity-25 border-black"></div>


        <nav class="flex-none mx-16 my-5">
            <ul >
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline txt">
                    <a class=" textoCabecera text-lg hover:text-yellow-900" href="#"> Resultados</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-4">
                    <a class=" textoCabecera text-lg hover:text-yellow-900" href="#"> Calendario</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out inline ml-4">
                    <a class="textoCabecera text-lg hover:text-yellow-900" href="#"> Clasificación</a>
                </li>
                <li class="cursor-pointer transition-all duration-150 ease-in-out float-right mr-2 textoCabecera">
                    <a href="altaEquipo.html"> Nuevo Equipo</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="laTabla">
            <div class="cabeceraTabla flex justify-center items-center">
                <table class="tabla  w-screen border-4  mx-auto text-slate-50 mt-9 mx-10 min-w-min max-w-5xl text-xs">
                    <tr class="p-2 items-center text-sm">
                        <th class="txt py-3 pr-6 font-base pl-3 ">#</th>
                        <th class="txt py-3 pr-6 font-base w-3/5 text-left">Equipo</th>
                        <th class="txt py-3 px-6 font-base puntos">PT</th>
                        <th class="txt py-3 px-6 font-base">PJ</th>
                        <th class="txt py-3 px-6 font-base ">PG</th>
                        <th class="txt py-3 px-6 font-base">PE</th>
                        <th class="txt py-3 px-6 font-base">PP</th>
                    </tr>
                    <tr>
                        <td class="txt py-3 pr-6 font-base pl-4 ">1</th>
                        <td class="txt equipo py-3 pr-6 font-base text-left"><a href="#"> Madrid</a></th>
                        <td class="txt py-3 pr-6 pl-8 font-base puntos">3</th>
                        <td class="txt py-3 pr-6 pl-8 font-base mx-auto">1</th>
                        <td class="txt py-3 pr-6 pl-8 font-base mx-auto">1</th>
                        <td class="txt py-3 pr-6 pl-8 font-base mx-auto">0</th>
                        <td class="txt py-3 pr-6 pl-8 font-base mx-auto">0</th>
                    </tr>
                    <tr class="">
                        <td class="txt py-3 pr-6 font-base pl-4 ">2</th>
                        <td class="txt equipo py-3 pr-6 font-base text-left"><a href="#">Barcelona</a></th>
                        <td class="txt py-3 pr-6 pl-8 font-base puntos">0</th>
                        <td class="txt py-3 pr-6 pl-8 font-base ">1</th>
                        <td class="txt py-3 pr-6 pl-8 font-base ">0</th>
                        <td class="txt py-3 pr-6 pl-8 font-base ">0</th>
                        <td class="txt py-3 pr-6 pl-8 font-base ">1</th>
                    </tr>
                </table>
            </div>
            <div class="explicacio txt flex justify-center mt-2">
                <p class="text-xs mr-3">PT = PUNTOS</p>
                <p class="text-xs mr-3">PJ = Partidos jugados</p>
                <p class="text-xs mr-3">PG = Partidos ganados</p>
                <p class="text-xs mr-3">PE = Partidos empatados</p>
                <p class="text-xs "> PP = Partidos perdidos</p>
            </div>
        </section>

    </main>
</body>
</html>