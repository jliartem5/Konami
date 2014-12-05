<table style='color: white; width:100%; min-height: 500px;' border="1">
    <tr>
        <th style="width: 25%; font-size: 20px;">Titre</th>
        <th style="width: 75%; font-size: 20px;">Description</th>
        <?php
        if ($this->Session->check('user')):
            ?>
            <th style="font-size: 20px;">Action</th>
            <?php
        endif;
        ?>
    </tr>
    <!-- Ici, nous bouclons sur le tableau $post afin d"afficher les informations des posts -->
    <?php foreach ($projets as $projet): ?>
        <tr >
            <td>
                <?php
                echo $projet['Projet']['nom'];
                ?>
            </td>
            <td>
                <?php
                echo $projet['Projet']['description'];
                if ($projet['Projet']['photo'] != null) {
                    echo '<img style="height:80px; width:80px;" src="' . $projet['Projet']['photo'] . '"/>';
                }
                ?>
            </td>
            <td>
                <?php
                if ($this->Session->check('user')):
                    ?>
                    <input style="color:black;" type='button' value="Join"/>
                    <?php
                endif;
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>