<div class="container">
<h4>Cadastrar Produtos</h4>
    <div class="card-group ">
        <div class="card">
            <div class="card-body">
                <?php if ($product['id'] != ""): ?>
                <div class="form-group float-right">
                    <a href="<?=base_url("product/delete/").$product['id']?>" class="btn btn-danger">Excluir</a>
                </div>  
                <?php endif ?>   
                <form method="post" action="<?=base_url("product/save")?>">
                <input type="hidden" name="id" value="<?=$product['id']?>" >
                <div class="form-group">
                    <label for="productName">Nome do Produto</label>
                    <input type="text" class="form-control" id="productname" name="name" value="<?=$product['name']?>" placeholder="Nome do produto" required>
                </div>
                <div class="form-group">
                    <label for="">Valor</label>
                    <input type="number" min="0.00" max="10000.00" step="0.01" name="price" value="<?=$product['price']?>" id="" class="form-control" placeholder="Valor" required>

                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="js-example-basic-single" style="width: 100%" name="category" required>
                        <?php foreach ($categories['categories'] as $c): ?>
                            <?php if ($product['category'] == $c['id']): ?>
                                <option value="<?=$c['id']?>" selected><?=$c['name']?></option>
                            <?php else: ?>
                                <option value="<?=$c['id']?>"><?=$c['name']?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição do produto</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required><?=$product['name']?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enviar"  class="btn btn-success">
                </div>
                </form>   
                         
            </div>
            
        </div>
    </div>
</div>

