<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Laravel</title>
        <link rel="stylesheet" href="css/style.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/ajax.js"></script>
        <script src="js/foScript.js" type="text/javascript"></script>
        <script src="js/ingatlan.js" type="text/javascript"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <section>
            <div id="urlap">
                <form action="">
                  @csrf
                        <div class="row">
                                <label for="id" class="col-sm-3 col-form-label">Poszter</label>
                           <div class="col-sm-9">
                                <input class="form-control id" type="text" name="id" id="id"  >
                           </div>
                        </div>
                        <div class="row" id="index">
                            <label for="ingatlanKategoriak" class="col-sm-3 col-form-label">Ingatlan Kategóriák</label>
                          <div class="col-sm-9">
                            <select id="ingatlanKategoriak" name="ingatlanKategoriak">
                            </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="hirdetesDatuma" class="col-sm-4 col-form-label">Hirdetés Dátuma</label>
                            <div class="col-sm-8">
                                <input type="date" id="hirdetesDatuma" name="fhirdetesDatumavetitesnap" >
                            </div>
                        </div>
                        <div class="row">
                            <label for="fleiras" class="col-sm-3 col-form-label">Leírás</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" id="fleiras" rows="5" maxlength="500"  name="filmLeiras"></textarea>
                          </div>
                        </div>
                        <div>
                            <input type="checkbox" id="tehermentesIngatlan" name="tehermentesIngatlan" value="Bike">
                            <label for="tehermentesIngatlan"> Tehrmentes Ingatlan</label><br>
                        </div>
                        <div class="row">
                                <label for="kep" class="col-sm-3 col-form-label">Poszter</label>
                           <div class="col-sm-9">
                            <input class="form-control kep" type="text" name="kep" id="kep">
                           </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <input type="submit" class="btn kuldes" value="Küldés">
                            <input type="submit" class="btn modosit" value="Módosít">
                            

                        </div>
                </form>
            </div>
            
            <div id="tablazat" class="container">
                    <div class="w">
                        <div class="col">
                            <p>Kategoria</p>
                        </div>
                        <div class="col">
                            <p>Leiras</p>
                        </div>
                        <div class="col">
                            <p>Hirdetés dátuma</p>
                        </div>
                        <div class="col">
                            <p>Tehermentes</p>
                        </div>
                        <div class="col">
                            <p>Fénykép</p>
                        </div>

                        <div class="col">
                            <p>Törlés</p>
                        </div>
                        <div class="col">
                            <p>Módosítás</p>
                        </div>
                    </div>
                    <div class="container" id="szulo">
                        <div class="row" id="gyerek">
                            <div class="col">
                                <p class="kategoria">Kategoria</p>
                            </div>
                            <div class="col">
                                <p class="leiras">Leira</p>
                            </div>
                            <div class="col">
                                <p  class="datum">Hirdetés dátuma</p>
                            </div>
                            <div class="col">
                                <p class="teher">Tehermentes</p>
                            </div>
                            <div class="col">
                                <div class="kep"></div>
                            </div>
                            <div class="col">
                                <button class="torles">Törlés</button>
                            </div>
                            <div class="col">
                                <button class="modositas">Módosítás</button>
                            </div>

                            <div class="col">
                                <button class="erdekel">Érdekel</button>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </body>
</html>
