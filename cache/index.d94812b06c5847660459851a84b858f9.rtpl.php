<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- body -->

<body class="main-layout " style="font-family: Impact, Charcoal, sans-serif;">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            
                                        <ul class="top_icon" style="font-family: Impact, Charcoal, sans-serif;" >

                                            <?php if( $var["0"]<4 ){ ?>
                                            <li class="button_login" > <a href="/slim/login">Entrar</a> </li>
                                            <li> <a href="/slim/cadastro">Cadastrar-se</a> </li>
                                            <li class="mean-last">
                                             <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                                            </li>
                                            <?php } ?>

                                            <?php if( $var["0"]>4 ){ ?>
                                            <li class="button_login" > <a href="/slim/sair">sair</a> </li>
                                            <?php } ?>

                                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">
                                <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main" style="font-family: Impact, Charcoal, sans-serif;">
                                            <li class="active"> <a href="#game">Jogo</a> </li>
                                            <li > <a href="#torneio">Torneios</a> </li>
                                            <li> <a href="#about">Sobre</a> </li>
                                            <li> <a href="#testimonial">Testimonial</a> </li>
                                            <li> <a href="#contact">Contato</a> </li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                                <div class="text-bg">
                                    <h1 style="font-family: Impact, Charcoal, sans-serif;">Clash<br> of clans</h1>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut</span>
                                    <button href="https://play.google.com/store/apps/details?id=com.supercell.clashofclans" class="btn btn-outline-warning" style="font-family: Impact, Charcoal, sans-serif;">Download </button>
                                </div>
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="text-img">
                                   <figure><img src="images/barbarofinal.png" alt="#"/></figure>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
        
           </section>
        </div>
    </header>

    <!-- our -->
    <div id="games" class="our" style="font-family: Impact, Charcoal, sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 id="torneio">Proximos Torneios</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 margin_bottom">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img src="images/our-image1.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="Games">
                                <h3>Torneio de cv 8</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>


                                <?php if( $var["1"]>=2 ){ ?>
                                <div class="alert alert-success" role="alert" style="font-family: Impact, Charcoal, sans-serif;">
                                    Voce esta inscrito para este torneio!
                                </div>
                                <?php } ?>


                                <?php if( $var["1"]<2 ){ ?>
                                <a href="/slim/inscrito">Inscrever-se</a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 margin_bottom">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img src="images/our-image2.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="Games">
                                <h3>Sanke</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <a href="#">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img src="images/our-image3.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="Games">
                                <h3>Cricket</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et </p>
                                <a href="#">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end our -->
    <!-- We are -->
    <div id="software" class="We_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Software</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="box_bg">
                         <div class="box_bg_img">
                             <figure><img src="images/soft.jpg"></figure>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
                     <div class="box_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                         <a href="#">Read more</a>
                     </div>
                 </div> 
            </div>
        </div>
    </div>
    <!-- end We are -->

    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sobre o Evento</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-box">
                        <figure><img src="images/about.jpg" alt="#" /></figure>

                        <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            <br> labore et dolore magna aliqua. Ut enim conseq</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end abouts -->

    <!-- testimonial -->
    <div id="testimonial" class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Vencedores</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 offset-md-2">
                    <div class="row box">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="testimonial_box">
                                <figure><img src="images/test1.png" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="testimonial_box">
                                <figure><img src="images/test2.png" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="testimonial_box">
                                <figure><img src="images/test3.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                    <div class="clients_box">
                        <h3>Jecoo</h3>
                        <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            <br>aliqua. Ut enim ad minim veniam, quis
                            <br>nostrud exercitation ullamco</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end testimonial -->

    <!-- contact -->
    
   
    <!-- inicio da tabela de jogadores -->
<div class="container">
    <table border="0" cellpadding="0" cellspacing="0" style="font-size: 90%; margin:1em 2em 1em 1em;" >
        <tbody>
            <tr>
                <td height="5">
                </td>
                <td align="center" colspan="2" style="border:1px solid #aaa;" bgcolor="#f2f2f2">Oitavas de final
                </td>
                <td colspan="2">
                </td>
                <td align="center" colspan="2" style="border:1px solid #aaa;" bgcolor="#f2f2f2">Quartas de final
                </td>
                <td colspan="2">
                </td>
                <td align="center" colspan="2" style="border:1px solid #aaa;" bgcolor="#f2f2f2">Semifinais
                </td>
                <td colspan="2">
                </td>
                <td align="center" colspan="2" style="border:1px solid #aaa;" bgcolor="#f2f2f2"><a href="/wiki/Final_da_Copa_do_Mundo_FIFA_de_2014" title="Final da Copa do Mundo FIFA de 2014">Final</a>
                </td>
            </tr>
            <tr>
                <td height="5">
                </td>
                <td width="170">&nbsp;
                </td>
                <td width="30">&nbsp;
                </td>
                <td width="10">&nbsp;
                </td>
                <td width="10">&nbsp;
                </td>
                <td width="170">&nbsp;
                </td>
                <td width="30">&nbsp;
                </td>
                <td width="10">&nbsp;
                </td>
                <td width="10">&nbsp;
                </td>
                <td width="170">&nbsp;
                </td>
                <td width="30">&nbsp;
                </td>
                <td width="10">&nbsp;
                </td>
                <td width="10">&nbsp;
                </td>
                <td width="170">&nbsp;
                </td>
                <td width="30">&nbsp;
                </td>
            </tr>
            <tr>
                <td height="5">
                </td>
                <td colspan="2" rowspan="2">28 de junho – <a href="/wiki/Est%C3%A1dio_Governador_Magalh%C3%A3es_Pinto" title="Estádio Governador Magalhães Pinto">Belo Horizonte</a>
                </td>
                <td rowspan="4" style="border-width:0 0 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
                <td rowspan="7" style="border-width:0 0 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
                <td colspan="2" rowspan="3">
                </td>
                <td rowspan="7" style="border-width:0 0 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
                <td rowspan="13" style="border-width:0 0 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
                <td colspan="2" rowspan="9">
                </td>
                <td rowspan="13" style="border-width:0 0 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
                <td rowspan="25" style="border-width:0 0 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
                <td colspan="2" rowspan="21">
                </td>
            </tr>
            <tr>
                <td height="5">
                </td>
            </tr>
            <tr>
                <td height="5">
                </td>
                <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><span class="flagicon"><a href="/wiki/Brasil" title="Brasil">

                </td>
                <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
                </td>

            </tr>
            <tr>
                <td height="5">
                </td>
                <td colspan="2" rowspan="2">4 de julho – <a href="/wiki/Est%C3%A1dio_Governador_Pl%C3%A1cido_Castelo" title="Estádio Governador Plácido Castelo">Fortaleza</a>
                </td>
            </tr>
            <tr>
                <td height="5">
                </td>
                <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Chile.svg" class="image">
                </td>
                <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
                </td>
                <td rowspan="6" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
                </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><span class="flagicon"><a href="/wiki/Brasil" title="Brasil">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">28 de junho – <a href="/wiki/Est%C3%A1dio_do_Maracan%C3%A3" class="mw-redirect" title="Estádio do Maracanã">Rio de Janeiro</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="12" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Colombia.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="12" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Colombia.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="6">
            </td>
            <td colspan="2" rowspan="2">8 de julho – <a href="/wiki/Est%C3%A1dio_Governador_Magalh%C3%A3es_Pinto" title="Estádio Governador Magalhães Pinto">Belo Horizonte</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Uruguay.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="6" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span class="flagicon"><a href="/wiki/Brasil" title="Brasil">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">30 de junho – <a href="/wiki/Est%C3%A1dio_Nacional_de_Bras%C3%ADlia_Man%C3%A9_Garrincha" title="Estádio Nacional de Brasília Mané Garrincha">Brasília</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="24" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Germany.svg" class="image" title="Bandeira da Alemanha">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="24" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><span class="flagicon"><a href="/wiki/Fran%C3%A7a" title="França">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">4 de julho – <a href="/wiki/Est%C3%A1dio_do_Maracan%C3%A3" class="mw-redirect" title="Estádio do Maracanã">Rio de Janeiro</a>
            </td>
            <td colspan="2" rowspan="18">
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Nigeria.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="6" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span class="flagicon"><a href="/wiki/Fran%C3%A7a" title="França">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">30 de junho – <a href="/wiki/Est%C3%A1dio_Beira-Rio" title="Estádio Beira-Rio">Porto Alegre</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="12" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Germany.svg" class="image" title="Bandeira da Alemanha">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="12" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Germany.svg" class="image" title="Bandeira da Alemanha">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="6">
            </td>
            <td colspan="2" rowspan="2"> – <a href="/wiki/Est%C3%A1dio_do_Maracan%C3%A3" class="mw-redirect" title="Estádio do Maracanã">Final</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Algeria.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="6" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Germany.svg" class="image" title="Bandeira da Alemanha">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">29 de junho – <a href="/wiki/Est%C3%A1dio_Governador_Pl%C3%A1cido_Castelo" title="Estádio Governador Plácido Castelo">Fortaleza</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="23" style="border-width:2px 0 0 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Argentina.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_the_Netherlands.svg" class="image" title="Países Baixos">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">5 de julho – <a href="/wiki/Arena_Fonte_Nova" title="Arena Fonte Nova">Salvador</a>
            </td>
            <td colspan="2" rowspan="10">
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Mexico.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="6" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_the_Netherlands.svg" class="image" title="Países Baixos">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">29 de junho – <a href="/wiki/Itaipava_Arena_Pernambuco" class="mw-redirect" title="Itaipava Arena Pernambuco">Recife</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="12" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Costa_Rica_(state).svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td>
            <td rowspan="12" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b>
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="6">
            </td>
            <td colspan="2" rowspan="2">9 de julho – <a href="/wiki/Arena_de_S%C3%A3o_Paulo" class="mw-redirect" title="Arena de São Paulo">São Paulo</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Greece.svg" class="image" title="Grécia">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td>
            <td rowspan="6" style="border-width:2px 0 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_the_Netherlands.svg" class="image" title="Países Baixos">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">1 de julho – <a href="/wiki/Arena_de_S%C3%A3o_Paulo" class="mw-redirect" title="Arena de São Paulo">São Paulo</a>
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="11" style="border-width:2px 0 0 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Argentina.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td>
            <td rowspan="11" style="border-width:2px 0 0 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Argentina.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td></tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">5 de julho – <a href="/wiki/Est%C3%A1dio_Nacional_de_Bras%C3%ADlia_Man%C3%A9_Garrincha" title="Estádio Nacional de Brasília Mané Garrincha">Brasília</a>
            </td>
            <td colspan="2" rowspan="9">
            </td>
            <td colspan="2" rowspan="2"> – <a href="/wiki/Est%C3%A1dio_Nacional_de_Bras%C3%ADlia_Man%C3%A9_Garrincha" title="Estádio Nacional de Brasília Mané Garrincha">Campeao</a>
            </td>

            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Switzerland.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span style="white-space:nowrap;"></span>
            </td>
            <td rowspan="12" style="border-width:2px 3px 1px 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Argentina.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<span class="flagicon"><a href="/wiki/Brasil" title="Brasil">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="2">1 de julho – <a href="/wiki/Arena_Fonte_Nova" title="Arena Fonte Nova">Salvador</a>
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="5" style="border-width:2px 0 0 0; border-style: solid;border-color:black;">&nbsp;
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_Belgium.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            <td rowspan="5" style="border-width:2px 0 0 0; border-style: solid;border-color:black;">&nbsp;
            </td>

            
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<b><a href="/wiki/Ficheiro:Flag_of_Belgium.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td colspan="2" rowspan="3">
            </td>
            <td colspan="2" rowspan="3">
            </td>
            </tr>
            <tr>
            <td height="5">
            </td>
            <td rowspan="2" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;<a href="/wiki/Ficheiro:Flag_of_the_United_States.svg" class="image">
            </td>
            <td rowspan="2" align="center" style="border:1px solid #aaa;" bgcolor="#f9f9f9">&nbsp;
            </td>
            </tr>


            <tr>
            
            </tr>

        </tbody>

    </table>
</div>



    <!-- fim da tabela de jogadores -->


    

    