<?php
require_once('../layout/header.php');
require_once('../layout/nav.php');
require_once('../../Classes/Product.php');
?>
<div class="container">

    <div class="alert alert-danger display-error" style="display: none">

    </div>
    <div class="alert alert-success display-success" style="display: none">

    </div>


    <form class="form-horizontal" id="form-product">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastrar Produto</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome:</label>
                <div class="col-md-5">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Descrição</label>
                <div class="col-md-5">
                    <input id="description" name="description" type="text" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Preço</label>
                <div class="col-md-5">
                    <input id="price" name="price" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <input type="hidden" id="method" name="method" value="create">

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="save"></label>
                <div class="col-md-4">
                    <button type="button" id="btn-add-product" name="btn-add-product" class="btn btn-success"
                            onclick="saveProduct()">Salvar
                    </button>
                </div>
            </div>

        </fieldset>
    </form>
</div>


<?php require_once('../layout/footer.php') ?>
