<?php
                                        require 'dbconfig.php';
                                            $query = "SELECT * FROM tbl_users";
                                            $stmt = $db_con->prepare( $query );
                                            $stmt->execute();
                                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                                ?>
                                                <tr>
                                                <td class="text-center"><?php echo $row["user_id"]; ?></td>
                                                <td class="text-center"><?php echo $row["first_name"]; ?>&nbsp;<?php echo $row["last_name"]; ?></td>
                                                <td>
                                                <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row["user_id"]; ?>" id="getUser" class="btn btn-sm btn-info"><i class="fas fa-eye" style="align-items:center;"></i> View</button>
                                                </td>
                                                </tr>
                                                <?php
                                            }
?>