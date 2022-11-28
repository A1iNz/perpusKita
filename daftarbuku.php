<?php
    session_start();
    include 'auth/koneksi.php';
    include 'template/navbar.php';
    // error_reporting(0);			
?>
<style>
    .box{
        width: 100%;
        height: 70%;        
        /* border: 5px solid black; */
    }
    .cover{
        max-width: 100%;
        max-height: 100%;
        width : 80%;
        height: 60%;
        /* display: block; */
    }
</style>
<div class="container card mt-5">
    <div class="card-body">
        <?php 
            if($_SESSION['status'] == "login"){
        ?>
            <?php if($_SESSION['username'] == "admin"){ ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="tambahBuku.php"><i class="fa-solid fa-circle-plus fa-3x"></i></a> 
            </div>
            <?php } ?>
            <div id="display-image  ">
                <div class="mt-5 row ps-5">
                <?php
                    $query = "select * from buku";
                    $result = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_assoc($result)) {
                        // var_dump($data);
                        $id = $data['id_buku'];
                ?>
                    <div id="demo" class="col-sm-3 ms-5 mb-5 mt-5">
                        <div class="card">
                            <center>
                                <div class="card-body box">
                                    <img class=" cover" src="assets/terupload/<?php echo $data['cover']; ?>">
                                    <h5 class="card-title text-center mt-3"><?php echo $data['judul']; ?></h5>
                                    <div>
                                        <?php echo $id ?>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pinjam</button>
                                    <form action="pinjamBuku.php"  method="POST" >
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <?php echo $data['id_buku'] ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <input type="hidden" id="idBuku" name="id_buku" value="<?php echo $data['id_buku'] ?>">
                                                        <button type="submit" onclick="pinjam()" class="btn btn-primary">Understood</button>
                                                        <!-- <input href="pinjamBuku.php" type="submit" value="Pinjam" name="pinjam" class="mt-3 pinjam w-50 btn btn-primary"> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </center>
                        </div>
                    </div>
                <?php
                    }
                ?>
                </div>
        <?php
            }else{
        ?>
            <div id="display-image" class="mt-5 row">
                <?php
                    $query = "select * from buku";
                    $result = mysqli_query($koneksi, $query);
            
                    while ($data = mysqli_fetch_assoc($result)) {
                ?>
               <div id="demo" class="col-sm-3">
                    <div class="card">
                        <center>
                                <div class="card-body box cover mt-5">
                                    <img class=" " src="assets/terupload/<?php echo $data['cover']; ?>">
                                    <h5 class="card-title text-center mt-3"><?php echo $data['judul']; ?></h5>
                                    <!-- <a href="#" onclick="pinjam()" name="pinjam" value="<?php $data['id']; ?>" class="mt-3 pinjam w-50 btn btn-primary">Pinjam</a> -->
                                </div>
                        </center>
                    </div>
                </div>
            <?php
                }
            ?>
        <?php
            }
        ?>  
    </div>
</div>
<?php
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
?>

<script>
    function pinjam() {
       <?php
        header('Location: pinjamBuku.php')
       ?>
    }
</script>