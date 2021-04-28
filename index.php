<html>

    <head>
        <meta charset="UTF-8">
        
        <title>Formulário</title>
        <link rel="stylesheet" type="text/css" href="custom.css" />
        <title>Formulário de Contato</title>

        </style>
    </head>

    <body>

        <header>
            <div class="topnav" >
                <a href="#" class="active">Formulário</a>
                <a href="processo.php">tabela</a>
                <a href="#">clientes</a>
            </div>

        </header>

        <main>
            <div id="div-form" class="center">
                <h1>Formulário de Contato</h1>

                <form method="POST" action="processo.php">
                    <div>
                        <input type="text" name="nome" class="input" placeholder="Digite seu nome..." />
                    </div>
                    <div>
                        <input type="text" name="telefone" class="input" placeholder="Digite seu telefone..." />
                    </div>
                    <div>
                        <input type="email" name="email" class="input" placeholder="Digite seu email..." />
                    </div>
                    <div>
                        <textarea name="mensagem" class="input" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <button type="submit" class="button">Enviar</button>
                </form>
            <div>
        </main>

        <footer>
            <div class="footer">
            © 2021 Meu programa php

            </div>


        </footer>
        
        
    </body>
    
</html>