<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar Bootstrap</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <!-- Link "Início" -->
        <a class="navbar-brand" href="#">Início</a>

        <!-- Botão para mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <!-- Dropdown dos exercícios -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="exerciciosDropdown" role="button" data-bs-toggle="dropdown">
                        Exercícios
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Gerando os exercícios de 1 a 20 -->
                        <script>
                            for (let i = 1; i <= 20; i++) {
                                document.write(`<li><a class="dropdown-item" href="#">Exercício ${i}</a></li>`);
                            }
                        </script>
                    </ul>
                </li>
            </ul>

            <!-- Nome do usuário alinhado à direita -->
            <span class="navbar-text text-white">
                Usuário
            </span>
        </div>
    </div>
</nav>

<!-- Link do Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
