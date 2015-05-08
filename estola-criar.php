<?php
    function gowp_crudescolas_criar () {
    $id = $_POST["id"];
    $name = $_POST["name"];
    
    //Adicionar Escola
    if(isset($_POST['insert'])){
        global $wpdb;
        $wpdb->insert(
            'escola', // Tabela
            array('id' => $id,'name' => $name), // Dado
            array('%s','%s') // Formato do dado
        );
        $message.="Escola Inserida";
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/crudescolas/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2><strong>Gestão de Escolas</strong></h2>
        <p>* Três letras maiúsculas para o ID</p>
        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message;?></p></div><?php endif;?>

        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <table>
                <caption><strong>Adicionar Escola</strong></caption><col><col>
                <tr>
                    <th>ID</th>
                    <td><input class="id" type="text" name="id" value="<?php echo $id;?>"/></td>
                </tr>
                <tr>
                    <th>Escola</th>
                    <td>
                        <input class="escola"  type="text" name="name" value="<?php echo $name;?>"/>
                    </td>
                </tr>
            </table>
            <br />
            <input type='submit' name="insert" value='Salvar' class='button'>
        </form>

    </div>
    <br />
    <a href="<?php echo admin_url('admin.php?page=gowp_crudescolas_listar')?>">&laquo; 
        Voltar para a listagem de escolas
    </a>
    <?php
}