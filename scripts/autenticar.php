<?php
session_start();
?>
<html>
    <body>
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

if(!empty($_POST['email']) && !empty($_POST['senha'] ) ) { 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    }else{
        echo "DEU MERDA";
        
        
    }
$sql = "SELECT id FROM usuarios WHERE login = '$email'";
$query = $banco->query($sql);
$total = $query->num_rows;

if($total==0){ ?>
    <script type="text/javascript">
        Swal.fire({
            title:'Ops!',
            text:'Login não encontrado',
            icon:'error',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../login.php";
            }
        })
    </script>
<?php }else{
    $sql = "SELECT id FROM usuarios WHERE login = '$email' and senha = '$senha'";
    $query = $banco->query($sql);
    $total = $query->num_rows;

    if($total==0){ ?>
         <script type="text/javascript">
        Swal.fire({
            title:'Ops!',
            text:'Senha incorreta',
            icon:'error',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../login.php";
            }
        })
    </script>
    <?php }else{
        
       $_SESSION['email'] = $email; 
        echo "<script>window.location.href='../HOME.php';</script>";

    }

}






?>
    </body>
</html>