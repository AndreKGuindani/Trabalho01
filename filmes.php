<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Filmix - Filmes e Séries</title>
</head>

<body>
    <header class="shadow-sm fixed-top">
        <nav class="container-sm d-flex justify-content-between align-items-center py-3">
            <a href="index.php" class="logo">🎬 <strong>Filmix</strong></a>
            <ul class="d-flex gap-3 mb-0">
                <li><a class="nav-link" href="#acao">Ação</a></li>
                <li><a class="nav-link" href="#suspense">Supense</a></li>
                <li><a class="nav-link" href="#comedia">Comédia</a></li>
                <li><a class="nav-link" href="#terror">Terror</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="container-sm pt-5" id="acao">
            <section>
                <h4 class="text-light mb-3">Filmes de ação</h4>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">

                        <!-- Primeiro slide -->
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/1/13/John_wick_ver3.jpg"
                                            class="card-img-top" alt="John Wick">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">John Wick</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2014</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Chad Stahelski</p>
                                            <p class="card-text small"><strong>Atores:</strong> Keanu Reeves, Michael
                                                Nyqvist</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://musicart.xboxlive.com/7/eea21900-0000-0000-0000-000000000002/504/image.jpg"
                                            class="card-img-top" alt="Mad Max: Estrada da Fúria">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Mad Max: Estrada da Fúria</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2015</p>
                                            <p class="card-text small"><strong>Diretor:</strong> George Miller</p>
                                            <p class="card-text small"><strong>Atores:</strong> Tom Hardy, Charlize
                                                Theron</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 18 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://play-lh.googleusercontent.com/qqUD5CdYWfD7O2r_dVguxkIfogWUvNeeuGJToMFHtpAs8ps_dQp21o0WonAXiMMguQGk8w"
                                            class="card-img-top" alt="Duro de Matar">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Duro de Matar</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1988</p>
                                            <p class="card-text small"><strong>Diretor:</strong> John McTiernan</p>
                                            <p class="card-text small"><strong>Atores:</strong> Bruce Willis, Alan
                                                Rickman</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://m.media-amazon.com/images/S/pv-target-images/ae8dddd0abc2fac14052f29bc2ae15ddd86374c0d3bd017171ee6473b8933b29.jpg"
                                            class="card-img-top" alt="Batman: O Cavaleiro das Trevas">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Batman: O Cavaleiro das Trevas</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2008</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Christopher Nolan</p>
                                            <p class="card-text small"><strong>Atores:</strong> Christian Bale, Heath
                                                Ledger</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/4/44/GladiadorPoster.jpg/250px-GladiadorPoster.jpg"
                                            class="card-img-top" alt="Gladiador">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Gladiador</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2000</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Ridley Scott</p>
                                            <p class="card-text small"><strong>Atores:</strong> Russell Crowe, Joaquin
                                                Phoenix</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Segundo slide -->
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/8/84/AOrigemPoster.jpg"
                                            class="card-img-top" alt="A Origem">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">A Origem</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2010</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Christopher Nolan</p>
                                            <p class="card-text small"><strong>Atores:</strong> Leonardo DiCaprio,
                                                Joseph Gordon-Levitt</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwQQ3KvN9W7366QI3e0wpFpY5gVMR135OXfg&s"
                                            class="card-img-top" alt="Missão Impossível">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Missão Impossível</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1996</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Brian De Palma</p>
                                            <p class="card-text small"><strong>Atores:</strong> Tom Cruise, Jon Voight
                                            </p>
                                            <p class="card-text small"><strong>Classificação:</strong> 12 anos</p><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img2.acsta.net/medias/nmedia/18/89/43/82/20052140.jpg"
                                            class="card-img-top" alt="Os Vingadores">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Os Vingadores</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2012</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Joss Whedon</p>
                                            <p class="card-text small"><strong>Atores:</strong> Robert Downey Jr., Chris
                                                Evans</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 12 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img2.acsta.net/medias/nmedia/18/92/91/08/20224693.jpg"
                                            class="card-img-top" alt="O Exterminador do Futuro 2">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">O Exterminador do Futuro 2</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1991</p>
                                            <p class="card-text small"><strong>Diretor:</strong> James Cameron</p>
                                            <p class="card-text small"><strong>Atores:</strong> Arnold Schwarzenegger,
                                                Linda Hamilton</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/8/88/Black_Widow_%282020%29.jpg/250px-Black_Widow_%282020%29.jpg"
                                            class="card-img-top" alt="Viúva Negra">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Viúva Negra</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2021</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Cate Shortland</p>
                                            <p class="card-text small"><strong>Atores:</strong> Scarlett Johansson,
                                                Florence Pugh</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <section class="container-sm pt-5" id="suspense">
                <h4 class="text-light mb-3">Filmes de suspense</h4>
                <div id="carouselSuspense" class="carousel slide">
                    <div class="carousel-inner">

                        <!-- Primeiro slide -->
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRROBAac4LjCY9YFSUy934ryVCNKW-MCJlY3A&s"
                                            class="card-img-top" alt="Seven">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Seven</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1995</p>
                                            <p class="card-text small"><strong>Diretor:</strong> David Fincher</p>
                                            <p class="card-text small"><strong>Atores:</strong> Brad Pitt, Morgan
                                                Freeman</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 18 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/pictures/14/10/10/19/21/152595.jpg"
                                            class="card-img-top" alt="O Iluminado">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">O Iluminado</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1980</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Stanley Kubrick</p>
                                            <p class="card-text small"><strong>Atores:</strong> Jack Nicholson, Shelley
                                                Duvall</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvn_etn7rqDp2pOzLLs_K1kQD0aRhEPeqIWQ&s"
                                            class="card-img-top" alt="O Silêncio dos Inocentes">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">O Silêncio dos Inocentes</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1991</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Jonathan Demme</p>
                                            <p class="card-text small"><strong>Atores:</strong> Jodie Foster, Anthony
                                                Hopkins</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 18 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://m.media-amazon.com/images/I/611tlXI0pwL._AC_UF1000,1000_QL80_.jpg"
                                            class="card-img-top" alt="Os Outros">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Os Outros</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2001</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Alejandro Amenábar</p>
                                            <p class="card-text small"><strong>Atores:</strong> Nicole Kidman, Fionnula
                                                Flanagan</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://m.media-amazon.com/images/I/81sSyD75y6L._AC_UF1000,1000_QL80_.jpg"
                                            class="card-img-top" alt="Garota Exemplar">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Garota Exemplar</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2014</p>
                                            <p class="card-text small"><strong>Diretor:</strong> David Fincher</p>
                                            <p class="card-text small"><strong>Atores:</strong> Ben Affleck, Rosamund
                                                Pike</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Segundo slide -->
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/pictures/210/509/21050952_20131018203347915.jpg"
                                            class="card-img-top" alt="Os Suspeitos">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Os Suspeitos</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1995</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Bryan Singer</p>
                                            <p class="card-text small"><strong>Atores:</strong> Kevin Spacey, Gabriel
                                                Byrne</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg"
                                            class="card-img-top" alt="Corra!">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Corra!</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2017</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Jordan Peele</p>
                                            <p class="card-text small"><strong>Atores:</strong> Daniel Kaluuya, Allison
                                                Williams</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://play-lh.googleusercontent.com/Z349tbhk9pphjy6y3czs-DUo665ysjhQ_7-k2pSR9pup-_qqn_hhzeujOaohnPH4LVM"
                                            class="card-img-top" alt="O Sexto Sentido">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">O Sexto Sentido</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 1999</p>
                                            <p class="card-text small"><strong>Diretor:</strong> M. Night Shyamalan</p>
                                            <p class="card-text small"><strong>Atores:</strong> Bruce Willis, Haley Joel
                                                Osment</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 14 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/pictures/19/12/19/20/45/2019215.jpg"
                                            class="card-img-top" alt="A Mulher na Janela">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">A Mulher na Janela</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2021</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Joe Wright</p>
                                            <p class="card-text small"><strong>Atores:</strong> Amy Adams, Julianne
                                                Moore</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://musicart.xboxlive.com/7/b4541100-0000-0000-0000-000000000002/504/image.jpg"
                                            class="card-img-top" alt="Ilha do Medo">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Ilha do Medo</h6>
                                            <p class="card-text small"><strong>Ano:</strong> 2010</p>
                                            <p class="card-text small"><strong>Diretor:</strong> Martin Scorsese</p>
                                            <p class="card-text small"><strong>Atores:</strong> Leonardo DiCaprio, Mark
                                                Ruffalo</p>
                                            <p class="card-text small"><strong>Classificação:</strong> 16 anos</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSuspense"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSuspense"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </section>

            <section class="container-sm mt-5" id="comedia">
                <h4 class="text-light mb-3">Filmes de comédia</h4>
                <div id="carouselComedia" class="carousel slide">
                    <div class="carousel-inner">

                        <!-- Primeiro slide -->
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img2.acsta.net/medias/nmedia/18/90/86/15/20116705.jpg"
                                            class="card-img-top" alt="O Máskara">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">O Máskara</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Jim Carrey, Cameron Diaz<br>
                                                <strong>Diretor:</strong> Chuck Russell<br>
                                                <strong>Ano:</strong> 1994<br>
                                                <strong>Classificação:</strong> 12 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsj1OMRR2NeDrdKcrlFLIzJrYSG7rZWJy6cg&s"
                                            class="card-img-top" alt="Esqueceram de Mim 2">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Esqueceram de Mim 2</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Macaulay Culkin, Joe Pesci<br>
                                                <strong>Diretor:</strong> Chris Columbus<br>
                                                <strong>Ano:</strong> 1992<br>
                                                <strong>Classificação:</strong> Livre
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://m.media-amazon.com/images/S/pv-target-images/7de3e539b111d5ce87b254329ad0af057a06788d1eec2b6f966f8aa2f9793753.jpg"
                                            class="card-img-top" alt="Se Beber, Não Case">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Se Beber, Não Case</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Bradley Cooper, Ed Helms<br>
                                                <strong>Diretor:</strong> Todd Phillips<br>
                                                <strong>Ano:</strong> 2009<br>
                                                <strong>Classificação:</strong> 16 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl_QCFlD9P8FOfWrTge7xdhvdRAS5tRkLuPw&s"
                                            class="card-img-top" alt="Descompensada">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Descompensada</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Anna Faris, Eugenio Derbez<br>
                                                <strong>Diretor:</strong> Ken Marino<br>
                                                <strong>Ano:</strong> 2014<br>
                                                <strong>Classificação:</strong> 14 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://images.justwatch.com/poster/246488291/s718/uma-noite-no-museu.jpg"
                                            class="card-img-top" alt="Uma Noite no Museu">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Uma Noite no Museu</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Ben Stiller, Robin Williams<br>
                                                <strong>Diretor:</strong> Shawn Levy<br>
                                                <strong>Ano:</strong> 2006<br>
                                                <strong>Classificação:</strong> Livre
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Segundo slide -->
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/90/43/12/20096263.jpg"
                                            class="card-img-top" alt="As Férias de Mr. Bean">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">As Férias de Mr. Bean</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Rowan Atkinson<br>
                                                <strong>Diretor:</strong> Steve Bendelack<br>
                                                <strong>Ano:</strong> 2007<br>
                                                <strong>Classificação:</strong> Livre
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/f/f7/Borat%21.jpg"
                                            class="card-img-top" alt="Borat">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Borat</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Sacha Baron Cohen<br>
                                                <strong>Diretor:</strong> Larry Charles<br>
                                                <strong>Ano:</strong> 2006<br>
                                                <strong>Classificação:</strong> 16 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/b/bd/Click_film.jpg"
                                            class="card-img-top" alt="Click">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Click</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Adam Sandler, Kate Beckinsale<br>
                                                <strong>Diretor:</strong> Frank Coraci<br>
                                                <strong>Ano:</strong> 2006<br>
                                                <strong>Classificação:</strong> 12 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/medias/nmedia/18/97/52/82/20534159.jpg"
                                            class="card-img-top" alt="As Branquelas">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">As Branquelas</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Shawn Wayans, Marlon Wayans<br>
                                                <strong>Diretor:</strong> Keenen Ivory Wayans<br>
                                                <strong>Ano:</strong> 2004<br>
                                                <strong>Classificação:</strong> 14 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/0/0d/Jumanji_The_Next_Level.jpg/250px-Jumanji_The_Next_Level.jpg"
                                            class="card-img-top" alt="Jumanji: Bem-vindo à Selva">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Jumanji</h6>
                                            <p class="card-text small">
                                                <strong>Atores:</strong> Dwayne Johnson, Kevin Hart<br>
                                                <strong>Diretor:</strong> Jake Kasdan<br>
                                                <strong>Ano:</strong> 2019<br>
                                                <strong>Classificação:</strong> 12 anos
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselComedia"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselComedia"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>

            </section>

            <section class="container-sm mt-5" id="terror">
                <h4 class="text-light mb-3">Filmes de terror</h4>
                <div id="carouselTerror" class="carousel slide">
                    <div class="carousel-inner">

                        <!-- Primeiro slide -->
                        <div class="carousel-item active">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img2.acsta.net/pictures/210/166/21016629_2013062820083878.jpg"
                                            class="card-img-top" alt="Invocação do Mal">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Invocação do Mal</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> James Wan<br>
                                            <strong>Atores:</strong> Vera Farmiga, Patrick Wilson<br>
                                            <strong>Ano:</strong> 2013<br>
                                            <strong>Classificação:</strong>  16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhNs9d8KDmPw6UfxmjMpBOZH9szbSt6PE0UA&s"
                                            class="card-img-top" alt="It: A Coisa">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">It: A Coisa</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Andy Muschietti<br>
                                            <strong>Atores:</strong> Bill Skarsgård, Jaeden Martell<br>
                                            <strong>Ano:</strong> 2017<br>
                                            <strong>Classificação:</strong> 16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/pictures/19/02/07/14/16/5034340.jpg"
                                            class="card-img-top" alt="Nós">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nós</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Jordan Peele<br>
                                            <strong>Atores:</strong> Lupita Nyong'o, Winston Duke<br>
                                            <strong>Ano:</strong> 2019<br>
                                            <strong>Classificação:</strong> 16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/pictures/16/02/02/11/51/346769.jpg"
                                            class="card-img-top" alt="A Bruxa">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">A Bruxa</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Robert Eggers<br>
                                            <strong>Atores:</strong> Anya Taylor-Joy, Ralph Ineson<br>
                                            <strong>Ano:</strong> 2015<br>
                                            <strong>Classificação:</strong> 18+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img2.acsta.net/pictures/14/12/02/19/31/398428.jpg"
                                            class="card-img-top" alt="O Chamado">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">O Chamado</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Gore Verbinski<br>
                                            <strong>Atores:</strong> Naomi Watts, Martin Henderson<br>
                                            <strong>Ano:</strong> 2002<br>
                                            <strong>Classificação:</strong> 16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Segundo slide -->
                        <div class="carousel-item">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg"
                                            class="card-img-top" alt="Corra!">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Corra!</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Jordan Peele<br>
                                            <strong>Atores:</strong> Daniel Kaluuya, Allison Williams<br>
                                            <strong>Ano:</strong> 2017<br>
                                            <strong>Classificação:</strong> 16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSjw7PiW7mPQoRWm4yRUbo2IJL-QykqyVh0Q&s"
                                            class="card-img-top" alt="Hereditário">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Hereditário</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Ari Aster<br>
                                            <strong>Atores:</strong> Toni Collette, Milly Shapiro<br>
                                            <strong>Ano:</strong> 2018<br>
                                            <strong>Classificação:</strong> 18+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/medias/nmedia/18/87/89/84/20028680.jpg"
                                            class="card-img-top" alt="Atividade Paranormal">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Atividade Paranormal</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> Oren Peli<br>
                                            <strong>Atores:</strong> Katie Featherston, Micah Sloat<br>
                                            <strong>Ano:</strong> 2007<br>
                                            <strong>Classificação:</strong> 16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://br.web.img3.acsta.net/pictures/18/09/05/17/21/5348044.jpg"
                                            class="card-img-top" alt="Halloween">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Halloween</h6>
                                            <p class="card-text small">
                                            <strong>Direção:</strong> David Gordon Green<br>
                                            <strong>Atores:</strong> Jamie Lee Curtis, Judy Greer<br>
                                            <strong>Ano:</strong> 2018<br>
                                            </strong>Classificação:</strong> 18+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNXzeWMvkpoq_RRDlRy0eOogiUk1P6p_yQQw&s"
                                            class="card-img-top" alt="Terror em Silent Hill">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Terror em Silent Hill</h6>
                                            <p class="card-text small">
                                                <strong>Direção:</strong> Christophe Gans<br>
                                                <strong>Atores:</strong> Radha Mitchell, Sean Bean<br>
                                                <strong>Ano:</strong> 2006<br>
                                                <strong>Classificação:</strong> 16+
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTerror"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTerror"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </section>

    </main>

    <footer class="text-center py-4">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>

</html>