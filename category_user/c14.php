<header class="bg-dark py-5" style="background-image: url('icon/backimg17.jpg');">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder ">Knowledge</h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            
            <div class="h1gu">
            <h1 style="font-family: 'Kanit', sans-serif;">ความรู้ทั่วไป</h1>
            </div>
                 <div class="best-seller">
                    <?php 
                    require_once('database/condb.php');
                    $sql = "SELECT * FROM tbl_book inner join tbl_user on tbl_book.u_id = tbl_user.u_id inner join tbl_category on tbl_book.c_id = tbl_category.c_id AND tbl_book.status_book = '1' WHERE tbl_book.c_id = '14' ";
                    $query = mysqli_query($conn,$sql);
                    while( $show = mysqli_fetch_array($query))
                         {
          ?>
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <!-- Product image-->
                            <div class = "cardimg"> 
                            <h3><div class="badge bg-warning text-white position-absolute justifly-start" style="top: 0.75rem; right: 0.5rem"><?=  $show['price']?> ฿</div></h3>
                            <section class="block2" >
                            <a href="#"><img class="card-img-top" style="height: 400px; width: 280px;" src="upload/<?php echo $show['file_name']?>"/></a>
                            </section>
                            </div>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-start">
                                    <!-- Product name-->
                                    <h5 class="fw-bold" style="font-family: 'Kanit', sans-serif;"><?=  $show['title']?></h5>
                                    <!-- Product price-->
                                    <h5 style="font-family: 'Kanit', sans-serif;">ผู้แต่ง <mark><?=  $show['author']?></mark></a></h6>
                                    <p style="font-family: 'Kanit', sans-serif;">ผู้ประกาศขาย <mark><?= $show['fullname']?></mark></p>
                                    <span style="font-family: 'Kanit', sans-serif;"> วันที่ลงขาย <?=  $show['publication_date']?> </span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="btn btn-outline-dark"><?= $show['name']?></button> 
                                <button class="btn btn-outline-success">สั่งซื้อ</button>
                            </div>
                        </div>
                        <?php }?>
                    </div>
        </section>