<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/CidadeDV.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once PATH . '/Template/_includes/_head.php'; ?>

    <style>
        .h400 {
            height: 400px;
        }

        .h100 {
            height: 100px;
        }
    </style>

</head>

<body>
    <!-- FORMATAÇÃO DE TEXTOS -->
    <!-- text-start, center, end = alinha à esquerda, centro e direita -->
    <!-- aceita breakpoints: text-sm-start -->
    <!-- text-nowrap = não quebra o texto no final direito da página -->
    <!-- text-break = quebra uma palavra muito grande que não é quebrada por padrão pelo navegador -->
    <!-- text-lowercase = todo o texto em minúscula -->
    <!-- text-uppercase = todo o texto em maiúscula -->
    <!-- text-capitalize = as primeiras letras de cada palavra em maiúscula -->
    <!-- fs-1 a fs-6 (fs=font size) = tamanho do texto correspondente aos tamanhos de H1 a H6 -->
    <div class="container text-capitalize">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, odio omnis! Ducimus, consequuntur ex eum
            facere culpa commodi? Sed nesciunt, atque doloremque fugiat magnam saepe dolore corrupti. Tempore, esse
            ullam?
        </p>
    </div>

    <!-- BORDAS E SOMBRAS -->
    <!-- border, border-top, border-bottom, border-start, border-end -->
    <!-- rounded = arrodenddamento nas bordas -->
    <!-- rounded-0 a rounded-5 = intensidade do arredondamento -->
    <!-- rounded-top, bottom, star, end não permitem especificar a intensidade -->
    <!-- rounded-pill = formato de pílula -->
    <!-- rounded-circle = formato de elipse e, se o elemento for quadrado, formato de círculo -->
    <!-- border-{cor temática} -->
    <!-- border-0 a border-5 = espessura da borda -->
    <!-- border-opacity-50 -->
    <!-- shadow-none = remove a sombra -->
    <!-- shadow-sm = sombra pequena; shadow = sombra média; shadow-lg = sobra maior -->
    <!-- NÃO POSSUEM RESPONSIVIDADE NO BOOTSTRAP 5 -->
    <div class="container p-5">
        <div class="col-4 mx-auto p-5 bg-success border border-dark border-3 border-opacity-50">

        </div>
    </div>
    <hr>

    <!-- MARGENS E PADDINGS -->
    <!-- m-0 a m-5 = margens -->
    <!-- padrão é com uma pequena margem. m-0 remove todas as margens -->
    <!-- p-0 a p-5 = paddings -->
    <!-- ms-0/ps-0 = margem e padding esquerda (s=start) -->
    <!-- me-0/pe-0 = direita (e=end) -->
    <!-- mt-0/pt-0 = superior (t=top) -->
    <!-- mb-0/pb-0 = inferior (b=bottom) -->
    <!-- mx-0/px-0 = esquerda e direita (x=eixo x) -->
    <!-- my-0/py-0 = superior e inferior (y=eixo y) -->
    <!-- mx-auto = centraliza dividindo as margens lateriais igualmente -->
    <!-- Nos breakpoint: por exemplo: m-sm-0 -->
    <div class="container">
        <p class="bg-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, tempore provident nam
            placeat aperiam ipsum excepturi totam est nisi neque?</p>
        <p class="bg-danger m-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates at dolore eos
            minima rem nihil culpa officia sint sit tempora?</p>
        <p class="bg-warning">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo tempore commodi sint
            vitae laborum odio! Maxime tenetur saepe esse tempore.</p>
    </div>
    <hr>

    <!-- ICONES -->
    <!-- para alterar a cor, há duas formas: -->
    <!-- 1. font-{cor temática} -->
    <!-- 2. style="color: red" -->
    <!-- bootstrap icons. instalar: composer require bootstrap-icons + usar link em <head> -->
    <div class="container p-5">
        Bootstrap Icons
        <i class="bi-house-check text-info" style="font-size: 64px"></i>
    </div>
    <!-- fontawesome-free. download + usar link em <head> -->
    <div class="container p-5">
        FontAwesome-Free
        <i class="fa-solid fa-house-circle-check" style="font-size: 64px; color: blue"></i>
    </div>
    <hr>

    <!-- CORES E OPACIDADE -->
    <!-- 8 cores temáticas: primary, secondary, success, danger, warning, info, light, dark, white, transparent -->
    <!-- text-{cor temática} = muda a cor do texto -->
    <!-- bg-gradient = degradê -->
    <!-- OPACIDADE: opacity-50 = 50% de opacidade -->
    <!-- text-opacity-50 = opacidade do texto -->
    <!-- text-white = texto branco -->
    <!-- text-muted = desbota o texto. menos destacado -->
    <!-- text-bg-{cor temática} = define a cor do fundo com uma cor do texto com bom contraste -->
    <!-- link-{cor temática} = define a cor do link -->
    <div class="container">
        <h1>Cores e opacidade</h1>
        <p class="bg-primary bg-gradient">Primary</p>
        <p class="bg-secondary">Secondary</p>
        <p class="bg-success">Success</p>
        <p class="bg-danger opacity-75">Danger</p>
        <p class="bg-warning">Warning</p>
        <p class="bg-info">Info</p>
        <p class="bg-light">Light</p>
        <p class="bg-dark opacity-25">Dark</p>
        <p class="bg-white">White</p>
        <p class="bg-transparent">Transparent</p>
    </div>
    <hr>

    <!-- TABELAS -->
    <div class="container">
        <!-- table-striped = linhas listradas -->
        <!-- table-striped-columns = colunas listradas -->
        <!-- table-hover = ilumina as linhas na passagem do mouse -->
        <!-- table-bordered = com bordas externas e internas -->
        <!-- table-borderless = sem bordas -->
        <!-- table-active = destaca uma linha específica -->
        <!-- table-sm = reduz pela metade o padding das células, diminuindo o tamanho da tabela -->
        <!-- align-middle = alinha verticalmente no meio -->
        <!-- caption-top = mostra o título de <caption> no topo da tabela -->
        <table class="table table-primary table-striped table-hover table-borderless table-sm caption-top">
            <thead>
                <tr>
                    <th>Coluna 1</th>
                    <th>Coluna 2</th>
                    <th>Coluna 3</th>
                    <th>Coluna 4</th>
                </tr>
            </thead>
            <!-- no tbody, table-group-divider = linha divisória mais grossa -->
            <tbody class="table-group-divider">
                <!-- (tr>td{Coluna $}*4)*5 -->
                <tr>
                    <td>Coluna 1</td>
                    <td>Coluna 2</td>
                    <td>Coluna 3</td>
                    <td>Coluna 4</td>
                </tr>
                <tr class="table-active">
                    <td>Coluna 1</td>
                    <td>Coluna 2</td>
                    <td>Coluna 3</td>
                    <td>Coluna 4</td>
                </tr>
                <tr>
                    <td>Coluna 1</td>
                    <td>Coluna 2</td>
                    <td>Coluna 3</td>
                    <td>Coluna 4</td>
                </tr>
                <tr>
                    <td>Coluna 1</td>
                    <td>Coluna 2</td>
                    <td>Coluna 3</td>
                    <td>Coluna 4</td>
                </tr>
                <tr>
                    <td>Coluna 1</td>
                    <td>Coluna 2</td>
                    <td>Coluna 3</td>
                    <td>Coluna 4</td>
                </tr>
            </tbody>
            <caption class="text-center">Título da tabela</caption>
        </table>
        <hr>
        <!-- (tr>td{Célula $}*20)*5 -->
        <!-- table-responsive = a rolagem fica somente na tabela e não na janela toda -->
        <div class="table-responsive">
            <table class="table table-primary table-striped table-hover table-borderless table-sm caption-top">
                <!-- no tbody, table-group-divider = linha divisória mais grossa -->
                <tbody class="table-group-divider">
                    <tr>
                        <td>Célula 1</td>
                        <td>Célula 2</td>
                        <td>Célula 3</td>
                        <td>Célula 4</td>
                        <td>Célula 5</td>
                        <td>Célula 6</td>
                        <td>Célula 7</td>
                        <td>Célula 8</td>
                        <td>Célula 9</td>
                        <td>Célula 10</td>
                        <td>Célula 11</td>
                        <td>Célula 12</td>
                        <td>Célula 13</td>
                        <td>Célula 14</td>
                        <td>Célula 15</td>
                        <td>Célula 16</td>
                        <td>Célula 17</td>
                        <td>Célula 18</td>
                        <td>Célula 19</td>
                        <td>Célula 20</td>
                    </tr>
                    <tr>
                        <td>Célula 1</td>
                        <td>Célula 2</td>
                        <td>Célula 3</td>
                        <td>Célula 4</td>
                        <td>Célula 5</td>
                        <td>Célula 6</td>
                        <td>Célula 7</td>
                        <td>Célula 8</td>
                        <td>Célula 9</td>
                        <td>Célula 10</td>
                        <td>Célula 11</td>
                        <td>Célula 12</td>
                        <td>Célula 13</td>
                        <td>Célula 14</td>
                        <td>Célula 15</td>
                        <td>Célula 16</td>
                        <td>Célula 17</td>
                        <td>Célula 18</td>
                        <td>Célula 19</td>
                        <td>Célula 20</td>
                    </tr>
                    <tr>
                        <td>Célula 1</td>
                        <td>Célula 2</td>
                        <td>Célula 3</td>
                        <td>Célula 4</td>
                        <td>Célula 5</td>
                        <td>Célula 6</td>
                        <td>Célula 7</td>
                        <td>Célula 8</td>
                        <td>Célula 9</td>
                        <td>Célula 10</td>
                        <td>Célula 11</td>
                        <td>Célula 12</td>
                        <td>Célula 13</td>
                        <td>Célula 14</td>
                        <td>Célula 15</td>
                        <td>Célula 16</td>
                        <td>Célula 17</td>
                        <td>Célula 18</td>
                        <td>Célula 19</td>
                        <td>Célula 20</td>
                    </tr>
                    <tr>
                        <td>Célula 1</td>
                        <td>Célula 2</td>
                        <td>Célula 3</td>
                        <td>Célula 4</td>
                        <td>Célula 5</td>
                        <td>Célula 6</td>
                        <td>Célula 7</td>
                        <td>Célula 8</td>
                        <td>Célula 9</td>
                        <td>Célula 10</td>
                        <td>Célula 11</td>
                        <td>Célula 12</td>
                        <td>Célula 13</td>
                        <td>Célula 14</td>
                        <td>Célula 15</td>
                        <td>Célula 16</td>
                        <td>Célula 17</td>
                        <td>Célula 18</td>
                        <td>Célula 19</td>
                        <td>Célula 20</td>
                    </tr>
                    <tr>
                        <td>Célula 1</td>
                        <td>Célula 2</td>
                        <td>Célula 3</td>
                        <td>Célula 4</td>
                        <td>Célula 5</td>
                        <td>Célula 6</td>
                        <td>Célula 7</td>
                        <td>Célula 8</td>
                        <td>Célula 9</td>
                        <td>Célula 10</td>
                        <td>Célula 11</td>
                        <td>Célula 12</td>
                        <td>Célula 13</td>
                        <td>Célula 14</td>
                        <td>Célula 15</td>
                        <td>Célula 16</td>
                        <td>Célula 17</td>
                        <td>Célula 18</td>
                        <td>Célula 19</td>
                        <td>Célula 20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>

    <!-- IMAGENS E FIGURAS -->
    <!-- EMMET: div.container>img.img-fluid[src="img.svg"] -->
    <div class="container">
        <!-- img-fluid = acompanha o tamanho do container -->
        <!-- img-thumbnail = com bordas levemente arredondadas -->
        <!-- rounded = a própria imagem com cantos arredondados -->
        <!-- <img src="../../../mesacafe.jpg" alt="Imagem responsiva" class="rounded"> -->

        <!-- imagens flutuantes -->
        <img src="../../../mesacafe.jpg" alt="Imagem responsiva" class="opacity-50 img-thumbnail float-end ms-3"
            style="max-width: 10%; height: auto">
        <p class="lead text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, itaque alias. Sint,
            nesciunt non
            animi vero nostrum assumenda pariatur vitae iusto suscipit sequi incidunt facilis tenetur, doloremque neque
            sapiente praesentium. Facilis molestias doloremque, architecto ea, velit repellat quidem esse recusandae
            expedita voluptatem fuga. Id, est iste provident quaerat blanditiis doloribus architecto ad consequatur
            cumque eos sint perspiciatis pariatur quam cum possimus magnam similique! Sapiente sed odit dicta
            dignissimos ex consequuntur maiores quae, dolore fuga optio temporibus quam rerum corporis delectus libero,
            porro aut iure iste at doloremque vel tenetur! Velit, corporis dicta veniam natus quia ipsa dolores porro
            quasi molestias?
        </p>
    </div>
    <hr>
    <!-- figuras -->
    <div class="container text-center">
        <!-- figure.figure>img.img-fluid.rounded[src=""]+figcaption.figcaption.text-end{Legenda da Figura} -->
        <figure class="figure">
            <img src="../../../mesacafe.jpg" alt="" class="img-fluid rounded" style="max-width: 10%; height: auto">
            <figcaption class="figcaption text-center">Legenda da Figura</figcaption>
        </figure>
    </div>
    <hr>

    <!-- TIPOGRAFIA -->
    <div class="container">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis consequatur, quas, dolorem qui facere
        architecto recusandae veniam praesentium nesciunt enim amet officiis dolor placeat voluptas adipisci ullam,
        labore ipsa quaerat!
        <p class="lead">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis consequatur, quas, dolorem qui
            facere
            architecto recusandae veniam praesentium nesciunt enim amet officiis dolor placeat voluptas adipisci
            ullam,
            labore ipsa quaerat!
        </p>
    </div>
    <hr>
    <div class="container">
        <p>Texto em <mark>marcado</mark></p>
        <p>Texto em aspecto de <del>excluído</del></p>
        <p>Texto <s>riscado</s></p>
        <p>Texto <ins>recém-inserido</ins></p>
        <p>Texto <u>sublinhado</u></p>
        <p>Texto <small>pequeno</small></p>
        <p>Texto <strong>encorpado</strong></p>
        <p>Texto <em>itálico</em></p>
    </div>
    <hr>
    <div class="container">
        <abbr title="Mongo, Express, React, Node">MERN</abbr>
    </div>
    <hr>
    <div class="container">
        <figure class="text-end">
            <blockquote class="blockquote" cite="Fulano de tal">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt magnam velit rerum,
                    tenetur
                    quidem
                    aperiam temporibus porro praesentium ad atque, in possimus ducimus! Amet deserunt a
                    exercitationem
                    enim
                    vitae quos.</p>
            </blockquote>
            <figcation class="blockquote-footer">
                <cite>Fulano famoso</cite>, diretor de cinema
            </figcation>
        </figure>
    </div>
    <hr>
    <div class="container">
        <ul class="list-unstyled">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
        </ul>
        <!-- ul.list-inline>list-inline-item{Item $}*5 -->
        <ul class="list-inline">
            <list-inline-item>Item 1</list-inline-item>
            <list-inline-item>Item 2</list-inline-item>
            <list-inline-item>Item 3</list-inline-item>
            <list-inline-item>Item 4</list-inline-item>
            <list-inline-item>Item 5</list-inline-item>
        </ul>
        <!-- dl>(dt{Termo $}+dd{Descrição do termo $})*5 -->
        <dl>
            <dt>Termo 1</dt>
            <dd>Descrição do termo 1</dd>
            <dt>Termo 2</dt>
            <dd>Descrição do termo 2</dd>
            <dt>Termo 3</dt>
            <dd>Descrição do termo 3</dd>
            <dt>Termo 4</dt>
            <dd>Descrição do termo 4</dd>
            <dt>Termo 5</dt>
            <dd>Descrição do termo 5</dd>
        </dl>
    </div>
    <hr>
    <div class="container">
        <h1>h1 - Título de Nível 1</h1>
        <h2>h2 - Título de Nível 2</h2>
        <h3>h3 - Título de Nível 3</h3>
        <h4>h4 - Título de Nível 4</h4>
        <h5>h5 - Título de Nível 5</h5>
        <h6>h6 - Título de Nível 6</h6>
    </div>
    <hr>
    <div class="container">
        <div class="h1">.h1 - Classe de título de nível 1</div>
        <div class="h2">.h2 - Classe de título de nível 2</div>
        <div class="h3">.h3 - Classe de título de nível 3</div>
        <div class="h4">.h4 - Classe de título de nível 4</div>
        <div class="h5">.h5 - Classe de título de nível 5</div>
        <div class="h6">.h6 - Classe de título de nível 6</div>
    </div>
    <hr>
    <!-- div.container>h1.display-${Display $}*6 -->
    <div class="container">
        <h1 class="display-1">Display 1</h1>
        <h1 class="display-2">Display 2</h1>
        <h1 class="display-3">Display 3</h1>
        <h1 class="display-4">Display 4</h1>
        <h1 class="display-5">Display 5</h1>
        <h1 class="display-6">Display 6</h1>
    </div>
    <hr>

    <!-- FORMATAÇÃO DE COLUNAS DE LAYOUT -->
    <div class="container">
        <div class="row">
            <div class="col-3">Coluna 1</div>
            <div class="col-3">Coluna 2</div>
            <div class="col-3">Coluna 3</div>
        </div>
    </div>

    <!-- GRID -->
    <div class="container">
        <div class="row">
            <div class="col bg-info opacity-50 h400"></div>
            <div class="col-9 bg-danger opacity-75 h400"></div>
            <div class="col bg-info opacity-50 h400"></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col bg-warning opacity-50 h100"></div>
        </div>
        <div class="row">
            <div class="col-3 bg-info opacity-75 h400"></div>
            <div class="col-9 bg-dark opacity-75 h400"></div>
        </div>
        <div class="row">
            <div class="col bg-warning opacity-50 h100"></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-warning opacity-50 h100"></div>
            <div class="col-12 col-sm-3 bg-info opacity-75 h400"></div>
            <div class="col-12 col-sm-9 bg-dark opacity-75 h400"></div>
            <div class="col-12 bg-warning opacity-50 h100"></div>
        </div>
    </div>
    <hr>

    <!-- CONTAINER -->
    <div class="container bg-info">
        <h1>Contêineres</h1>
        <hr>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam hic incidunt ab sapiente facilis,
            tempore
            aspernatur suscipit pariatur vel, quidem vitae mollitia quia quae soluta qui doloribus fugit odit
            nemo
            quod.
            Tempora ducimus saepe eligendi unde veritatis nobis natus tenetur commodi suscipit? Quos amet qui
            itaque
            ullam nihil illum sint. Necessitatibus fuga consequuntur quis nam similique est, ullam, veritatis
            obcaecati
            in ducimus accusantium ea sapiente sequi magnam repellat nihil dignissimos. Mollitia aperiam in
            porro!
            Maxime ipsum at quo consequuntur expedita facilis nesciunt quasi possimus minima delectus, dicta
            esse
            dolorum assumenda odit nulla in odio excepturi voluptatum dolores consequatur quod? Quibusdam quia
            doloribus
            vel placeat, cupiditate asperiores deserunt ipsa saepe officia error porro amet delectus sit quod
            eius
            quam
            quis. Debitis maiores nam quia, voluptate labore quasi soluta distinctio quo perspiciatis voluptatum
            iste
            necessitatibus. Debitis nulla vero, quis doloribus libero molestias. Iure, impedit? Cupiditate amet,
            sapiente omnis incidunt commodi a temporibus.
        </p>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam hic incidunt ab sapiente facilis,
            tempore
            aspernatur suscipit pariatur vel, quidem vitae mollitia quia quae soluta qui doloribus fugit odit
            nemo
            quod.
            Tempora ducimus saepe eligendi unde veritatis nobis natus tenetur commodi suscipit? Quos amet qui
            itaque
            ullam nihil illum sint. Necessitatibus fuga consequuntur quis nam similique est, ullam, veritatis
            obcaecati
            in ducimus accusantium ea sapiente sequi magnam repellat nihil dignissimos. Mollitia aperiam in
            porro!
            Maxime ipsum at quo consequuntur expedita facilis nesciunt quasi possimus minima delectus, dicta
            esse
            dolorum assumenda odit nulla in odio excepturi voluptatum dolores consequatur quod? Quibusdam quia
            doloribus
            vel placeat, cupiditate asperiores deserunt ipsa saepe officia error porro amet delectus sit quod
            eius
            quam
            quis. Debitis maiores nam quia, voluptate labore quasi soluta distinctio quo perspiciatis voluptatum
            iste
            necessitatibus. Debitis nulla vero, quis doloribus libero molestias. Iure, impedit? Cupiditate amet,
            sapiente omnis incidunt commodi a temporibus.
        </p>
    </div>
    <hr>

    <!-- BREAKPOINTS -->
    <div class="text-center text-md-start text-xl-end">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, maxime quam debitis asperiores sunt
        illum
        praesentium soluta quia, natus pariatur voluptas molestias nam? Eveniet optio alias odio officiis quo
        obcaecati consequuntur itaque dolor aliquam illum! Eaque doloribus repudiandae quod. Iste non doloribus
        corrupti blanditiis similique totam perspiciatis saepe error itaque, laborum id. Praesentium molestiae
        et
        quas voluptatem accusamus tenetur eveniet suscipit recusandae explicabo necessitatibus? Sunt magnam
        facilis
        mollitia perferendis eveniet tenetur dignissimos, quisquam veniam necessitatibus, obcaecati praesentium,
        molestias illo maxime earum hic! Odio maxime eius molestias temporibus quo! Et, odit dolor ipsa
        voluptates
        numquam optio a hic mollitia aspernatur nihil?
    </div>
    <hr>

    <!-- TABLE -->
    <div class="container">
        <table class="table">
            <tr>
                <td>Coluna 1</td>
                <td>Coluna 2</td>
                <td>Coluna 3</td>
                <td>Coluna 4</td>
                <td>Coluna 5</td>
            </tr>
            <tr>
                <td>Coluna 1</td>
                <td>Coluna 2</td>
                <td>Coluna 3</td>
                <td>Coluna 4</td>
                <td>Coluna 5</td>
            </tr>
            <tr>
                <td>Coluna 1</td>
                <td>Coluna 2</td>
                <td>Coluna 3</td>
                <td>Coluna 4</td>
                <td>Coluna 5</td>
            </tr>
            <tr>
                <td>Coluna 1</td>
                <td>Coluna 2</td>
                <td>Coluna 3</td>
                <td>Coluna 4</td>
                <td>Coluna 5</td>
            </tr>
        </table>
    </div>
    <hr>

    <?php include_once PATH . '/Template/_includes/_footer.php'; ?>
</body>

</html>