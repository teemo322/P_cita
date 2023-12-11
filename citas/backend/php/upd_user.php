<?php  
if(isset($_POST['upd_user']))
{
    $id=trim($_POST['userid']);
    $nombre=trim($_POST['namees']);
    $usuario=trim($_POST['nameusua']);
    $email=trim($_POST['emaiusu']);
    $cargo=trim($_POST['usucarg']);
    try {

        $query = "UPDATE usuarios SET nombre=:nombre,usuario=:usuario,email=:email,cargo=:cargo WHERE id=:id LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nombre' => $nombre,
            ':usuario' => $usuario,
            ':email' => $email,
            ':cargo' => $cargo,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            
           

        echo '<script type="text/javascript">

swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
    buttons: {
        confirm: {
            text: "Confirm Me",
            value: true,
            visible: true,
            className: "btn btn-success",
            closeModal: true
        }
    }
});

        </script>';

            exit(0);
        }
        else
        {
           


        echo '<script type="text/javascript">
swal("Error!", "No se pueden agregar datos!", {
                        icon : "error",
                        buttons: {                  
                            confirm: {
                                className : "btn btn-danger"
                            }
                        },
                    });

        </script>';

            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>



