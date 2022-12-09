<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-sm-top">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index2.php">Book store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index2.php?newbook">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="index2.php?newbook">New Books Arrivals</a></li>
                                <li><a class="dropdown-item" href="index2.php?c1">นิยาย / วรรณกรรม</a></li>
                                <li><a class="dropdown-item" href="index2.php?c2">การ์ตูน / มังงะ</a></li>
                                <li><a class="dropdown-item" href="index2.php?c3">หนังสือเด็ก</a></li>
                                <li><a class="dropdown-item" href="index2.php?c4">หนังสือจิตวิทยาทั่วไป</a></li>
                                <li><a class="dropdown-item" href="index2.php?c5">ธุรกิจ</a></li>
                                <li><a class="dropdown-item" href="index2.php?c6">วิชาการ และ การเรียนรู้</a></li>
                                <li><a class="dropdown-item" href="index2.php?c7">ภาษา</a></li>
                                <li><a class="dropdown-item" href="index2.php?c8">คู่มือเตรียมสอบ</a></li>
                                <li><a class="dropdown-item" href="index2.php?c9">ครอบครัว แม่และเด็ก</a></li>
                                <li><a class="dropdown-item" href="index2.php?c10">บ้านและสวน</a></li>
                                <li><a class="dropdown-item" href="index2.php?c11">งานอดิเรก</a></li>
                                <li><a class="dropdown-item" href="index2.php?c12">อาหารและเครื่องดื่ม</a></li>
                                <li><a class="dropdown-item" href="index2.php?c13">ศาสนา & โหราศาสตร์</a></li>
                                <li><a class="dropdown-item" href="index2.php?c14">ความรู้ทั่วไป</a></li>
                                <li><a class="dropdown-item" href="index2.php?c15">ท่องเที่ยว</a></li>
                                <li><a class="dropdown-item" href="index2.php?c16">สุขภาพและความงาม</a></li>
                                <li><a class="dropdown-item" href="index2.php?c17">นิตยสาร</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex m-lg-4">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                        
                    </form>
                    
                    <button class="btn btn-warning" type="submit">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $row['fullname'];?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <?php 
                            if ($row['status'] == "1") {
                                echo '<li><a class="dropdown-item" href="admin/index.php">ระบบหลังบ้าน</a>';
                                echo '<li><a class="dropdown-item"  href="admin/index.php?profile">Profile</a>';
                                echo '<li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a>';
                            }
                            if ($row['status'] == "0"){
                                echo '<li><a class="dropdown-item" href="user/index.php?book">My Book</a>';
                                echo '<li><a class="dropdown-item" href="user/index.php?book_upload">ขายหนังสือ</a>';
                                echo '<li><a class="dropdown-item" href="user/index.php?profile">Profile</a>';
                                echo '<li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a>';

                            }
                    
                         ?>
                            </ul>
                        </li>
                    </ul>
                    </button>
                </div>
            </div>
        </nav>