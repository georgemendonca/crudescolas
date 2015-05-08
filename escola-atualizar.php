<?php
function gowp_crudescolas_atualizar () {
    
    // Variáveis globais e form
    global $wpdb;         // Objeto do Banco do WordPress
    $id = $_GET["id"];    // Identificação da Escola recuperado via GET
    $name=$_POST["name"]; // Nome da Escola recuperado via POST
    
    // Atualizar
    if(isset($_POST['update'])){	
        $wpdb->update(
             'escola'               // Tabela
            ,array('name' => $name) // dado
            ,array( 'ID' => $id )   // where
            ,array('%s')            // formato do dado
            ,array('%s')            // formato do where
        );	
    }
    // Delete
    else if(isset($_POST['delete'])){	
        $wpdb->query($wpdb->prepare("DELETE FROM escola WHERE id = %s",$id));
    }
    else{ // Recupera o registro para atualização (update)
        $escolas = $wpdb->get_results(
            $wpdb->prepare("SELECT id, name from escola where id=%s",$id)
        );
        foreach ($escolas as $s ){
            $name=$s->name;
        }
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/crudescolas/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2><strong>Gestão de Escolas</strong></h2>

        <?php if($_POST['delete']){?>
            <div class="updated"><p>Escola Apagada!</p></div>
            <a href="<?php echo admin_url('admin.php?page=gowp_crudescolas_listar')?>">&laquo; 
                Voltar para a lista de Escolas
            </a>

        <?php } else if($_POST['update']) {?>
            <div class="updated"><p>Escola Atualizada!</p></div>
            <a href="<?php echo admin_url('admin.php?page=gowp_crudescolas_listar')?>">&laquo; 
                Voltar para a listagem de escolas
            </a>

        <?php } else {?>
            <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <table>
                    <caption><strong>Atualizar Escola</strong></caption><col><col>
                    <tr><th>Name</th><td><input class="escola" type="text" name="name" value="<?php echo $name;?>"/></td></tr>
                </table>
                <br />
                <input type='submit' name="update" value='Save' class='button'> &nbsp;&nbsp;
                <input type='submit' name="delete" value='Delete' class='button' onclick="return confirm('Tem certeza que quer apagar esta Escola?')">
            </form>
        <?php }?>
        <br />
        <a href="<?php echo admin_url('admin.php?page=gowp_crudescolas_listar')?>">&laquo; 
            Voltar para a listagem de escolas
        </a>
    </div>
    <?php
}