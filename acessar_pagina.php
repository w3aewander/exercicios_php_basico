

<?php include __DIR__ . "/header.php"; ?>

<?php include __DIR__ . "/headerinfo.php"; ?>


<div class="container" style="height: 100vh">

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h4>Navegador interno da aplicação</h4>
        </div>
    </div>
    <div class="card-body">
       <div class="input-group"> 
           <input id="txtUrl" type="text" class="form-control">
           <button id="btnNav" class="btn btn-primary btn-sm">Ir</button>
       </div>
       <div class="py-4" id="pagina" style="width: 100%;height: 80vh; overflow: scroll">
          <h6>Conteúdo será injetado dinamicamente aqui...</h6>
        </div>
    </div>
</div>

</div>

<?php include __DIR__ . "/footer.php"; ?>