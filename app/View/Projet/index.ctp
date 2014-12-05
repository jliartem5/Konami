<table style='color: white; width:100%'>
    <tr>
        <th style="width: 25%;">Titre</th>
        <th style="width: 75%;">Description</th>
    </tr>
    <!-- Ici, nous bouclons sur le tableau $post afin d"afficher les informations des posts -->
<?php foreach ($projets as $projet): ?>
        <tr>
            <td>
                <?php
                echo $projet['Projet']['nom'];
                ?>
            </td>
            <td>
                <?php
                echo $projet['Projet']['description'];
                if($projet['Projet']['photo'] != null){
                    echo '<img src="'.$projet['Projet']['photo'].'"/>';
                }
                ?>
            </td>
        </tr>
<?php endforeach; ?>
</table>