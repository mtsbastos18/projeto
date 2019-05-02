<div class="container">
<h4>Cadastrar Categorias</h4>
    <div class="card-group ">
        <div class="card">
            <div class="card-body">
                <?php if ($category['id'] != ""): ?>
                <div class="form-group float-right">
                    <a href="<?=base_url('/category/delete/').$category['id']?>" class="btn btn-danger">Excluir</a>
                </div>  
                <?php endif ?>   
                <form method="post" action="<?=base_url("category/save")?>">
                <input type="hidden" name="id" value="<?=$category['id']?>" >
                <div class="form-group">
                    <label for="productName">Nome da Categoria</label>
                    <input type="text" class="form-control" id="categoryName" name="name" value="<?=$category['name']?>" placeholder="Nome da Categoria" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enviar"  class="btn btn-success">
                </div>
                </form>   
                         
            </div>
            
        </div>
    </div>
</div>

