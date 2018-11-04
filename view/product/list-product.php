<?php
require_once('../layout/header.php');
require_once('../layout/nav.php');
require_once('../../Classes/Product.php');
?>


    <div class="container">

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $products = new Product();
            foreach ($products->all() as $p) {
                ?>
                <tr>
                    <th scope="row"><?php echo $p['id'] ?></th>
                    <td><?php echo $p['name'] ?></td>
                    <td><?php echo $p['description'] ?></td>
                    <td><?php echo $p['price'] ?></td>
                    <td><a href="update-product.php?id=<?php echo $p['id']?>" class="btn btn-primary">Editar</a>
                        <a href="../../Controller/ProductController.php?acao=delete&id=<?php echo $p['id']?>" class="btn btn-danger">Excluir</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>


<?php require_once('../layout/footer.php') ?>