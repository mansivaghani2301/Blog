<?php
include(__DIR__ . './../includes/header.php');
?>
<div class="content-wrapper container-xxl p-0 pt-5">
    <div class="card mb-4 d-flex">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>List of Blog</h5>
            <div class="col-sm-2 align-items-start justify-content-end me-2">
                <a href="./create.php" class="btn btn-dark float-end"><i class="fa fa-plus me-1"></i><B>Create</b></a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                                $sql = "SELECT * from blog";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                        <td><?php echo $row['id']; ?></td>
                        <td> <img src="<?php echo $row["image"]; ?>" height=100px; width="100px;"></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['category_id']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>

                            <a href="./update.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="./delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></button></a>
                            <a href="./delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning">
                                    <i class="fa-solid fa-eye"></i></button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include(__DIR__ . './../includes/footer.php');
include(__DIR__ . './../includes/script.php');
?>