<?php
if(isset($_POST['delete_doct'])){
////////////// Elimianr registro de la tabla /////////
$consulta = "DELETE FROM `doctor` WHERE `coddoc`=:coddoc";
$sql = $connect-> prepare($consulta);
$sql -> bindParam(':coddoc', $coddoc, PDO::PARAM_INT);
$coddoc=trim($_POST['doctid']);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();

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

}
else{

    echo '<script type="text/javascript">
swal("Error!", "No se pudo eliminar el registro!", {
                        icon : "error",
                        buttons: {                  
                            confirm: {
                                className : "btn btn-danger"
                            }
                        },
                    });

        </script>';

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>