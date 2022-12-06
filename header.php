<header>
    <div uk-sticky="sel-target: .uk-container; cls-active: uk-navbar-sticky">
        <nav class="uk-container" uk-navbar="mode: click">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#">
                    <img src="assets/images/logo-axt.png" alt="Logo AXT">
                </a>
            </div>
            <div class="uk-navbar-right">
                <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip"><span>Menu</span><i class="fas fa-bars"></i></button>

                <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                        <button class="uk-offcanvas-close" type="button" uk-close></button>
                        <ul class="uk-nav uk-nav-primary uk-margin-auto-vertical">
                            <li><a href="./">Inicio</a></li>
                            <li><a href="sobre">Empresa</a></li>
                            <ul uk-accordion>
                                <li>
                                    <a class="uk-accordion-title" href="#">Produtos</a>
                                    <div class="uk-accordion-content">
                                        <ul class="productsList">
                                            <li><a href="">Terminal Isolado em pvc</a></li>
                                            <li><a href="">Terminal Isolado em nylon</a></li>
                                            <li><a href="">Terminal Fêmea, emenda, lingueta e outros</a></li>
                                            <li><a href="">terminal ilhós</a></li>
                                            <li><a href="">terminal sem isolação</a></li>
                                            <li><a href="">terminal de compressão</a></li>
                                            <li><a href="produtos">Ver todos</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <li><a href="">Desenvolvimento</a></li>
                            <li><a href="contato">Contato</a></li>
                            <div class="searchBar">
                               
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>