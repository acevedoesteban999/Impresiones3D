<?php 
    include_once '../../includes/bot.php';
    $bot=new Bot();
    
    if(!$bot->existSessionUser() || !$bot->userIsAdmin())
        die("Session Error");
?>
<div class="row mt-4 p-2 justify-content-center">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Fichero</th>
                <th scope="col">Mensaje</th>
                <th scope="col"></th>
            </tr>
        </thead>  
        <tbody>
        <?php      
            $requests=$bot->getNewRequests();
            foreach($requests as $request):?>
                <tr>
                    <th scope="row ">
                        <?php echo $request['id']?>
                    </th>
                    <td>@<?php echo $request['username']?></td>
                    <td><?php echo $request['file_name']?></td>
                    <td><?php echo $request['message'] ?></td>
                    <td>
                    
                    <a title="Aceptar Modelo" href="" class="m-1 btn btn-outline-success"><i class="bi bi-journal-text"></i></a>
                    <a title="Verificar Modelo" href="./visualice.php?model_id=<?php echo $request['file_id'] ?>" class="m-1 btn btn-outline-warning"><i class="bi bi-eye-fill"></i></a>
                    <a title="Denegar Modelo" href="" class="m-1 btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>  