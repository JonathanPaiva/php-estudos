<?php include __DIR__ . '/../html/inicio-html.php'; ?>

    <a href="/novo-curso" class="btn btn-primary mb-2">
        Novo Curso
    </a>  

    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $curso->getDescricao(); ?>

                <span>
                    
                    <a href="/alterar-curso?id= 
                        <?= $curso->getid(); ?>" 
                        class="btn btn-info btn-sm">
                        Alterar
                    </a>

                    <a href="/excluir-curso?id= 
                        <?= $curso->getid(); ?>" 
                        class="btn btn-danger btn-sm">
                        Excluir
                    </a>

                </span>

            </li>
        <?php endforeach; ?>
    </ul>

<?php include __DIR__ . '/../html/fim-html.php'; ?> 