<div class="container">
    <h4>Listar Categorias</h4>
    <div class="card-group ">
        <div class="card">
            <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $c): ?>
            <tr class='clickable-row' data-href="category/edit/<?=$c['id']?>">
                <td><?=$c['id']?></td>
                <td><?=$c['name']?></td>
            </tr>
            <?php endforeach ?>
    </table>
            </div>
        </div>
    </div>
</div>
<style>
    .clickable-row{
        cursor:pointer;
    }
</style>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "lengthMenu": "Exibindo  por página _MENU_",
                "zeroRecords": "Resultado não encontrado",
                "info": "Exibindo página _PAGE_ de _PAGES_",
                "infoEmpty": "Sem Resultados encontrados",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Pesquisar",
                "paginate": {
                    "first":      "Primeira",
                    "last":       "Última",
                    "next":       "Próximo",
                    "previous":   "Anterior"
                },
            }
        });
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    } );
</script>