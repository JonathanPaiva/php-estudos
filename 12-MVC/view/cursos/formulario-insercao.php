<?php include __DIR__ . '/../html/inicio-html.php'; ?>

    <form action="/salvar-curso<?= isset($curso) ? '?id=' . $curso->getID() : '' ?> " method="post">

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" 
                id="descricao" 
                name="descricao" 
                class="form-control"
                value=" <?= isset($curso) ? $curso->getDescricao(): ''; ?> ">
        </div>

        <button class="btn btn-primary">
            Salvar
        </button>

    </form>

<?php include __DIR__ . '/../html/fim-html.php'; ?> 