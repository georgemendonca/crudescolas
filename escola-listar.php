<?php function gowp_crudescolas_listar ()
{ ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/crudescolas/style-admin.css" rel="stylesheet" />

    <div>
        <h2><strong>Gestão de Escolas</strong></h2>
        <a href="<?php echo admin_url('admin.php?page=gowp_crudescolas_criar'); ?>">Adicionar Novo</a>
        <?php
            global $wpdb;
            $rows = $wpdb->get_results("SELECT id, name from escola");
            ?>
            <table>
            	<caption><strong>Escolas</strong></caption><col><col><col>
            	<thead>
            		<tr><th>ID <th>Escola<th>&nbsp;
            	</thead>
            	<tbody>
		            <?php
		            foreach ($rows as $row ){
		            	echo "<tr>";
		            	echo "<td>$row->id";
		            	echo "<td>$row->name";
		            	echo "<td>
    							<a href='".admin_url('admin.php?page=gowp_crudescolas_atualizar&id='.$row->id)."'>
        							Atualizar
        						</a>";
		            }
		            ?>
            	</tbody>
            </table>
    </div>
    <?php
}