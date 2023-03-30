<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" class="no-js">
    <head>
      <!-- Meta -->
      <title>Library Home Page<</title>
      <?php include('head.html'); ?>
    </head>
    <body>
    <?php include('layout.php'); ?>
        
      <div class="Container">
        <div class="Content">
            <div class="Wrapper">
              <div class="LeftContent col-xl-6 col-sm-12 split-image-left background-1">
              </div>

              <div class="RightContent col-xl-6 col-sm-12 split-image-right">
              <?php if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            $_SESSION['msg']= null;
        } ?>
                  <div class="row justify-content-center">
                    <div class="col-9">
                        <div class="row">
                          <div class="">
                          <h1>Public Library</h1>
                              <p>Welcome to our literary website, where book lovers can come together to borrow their favorite books and discover new literary works. Our extensive collection of books covers a wide range of genres, including classic literature, contemporary fiction, non-fiction, and much more. Whether you're looking for a gripping novel to escape into, an informative guide to expand your knowledge, or a thought-provoking memoir to inspire you, we have something for everyone.
                              </p>
                              <img class="img-fluid pt-5 pb-5" src="img\Latest Updates.jpg" alt="Photo">
                              <p>At our website, borrowing books is easy and convenient. Simply browse through our online catalog, select the books you want to borrow, and place your order. We'll deliver the books to your doorstep within a few days, and you can enjoy them at your leisure. Our website also offers a variety of reading resources, such as book reviews, author interviews, and reading guides, to enhance your reading experience.
                              </p>
                              <p>We believe that reading is a powerful tool for personal growth and enrichment, and we're dedicated to making great literature accessible to all. Whether you're a seasoned reader or just starting out, we invite you to join our community and explore the vast world of literature. So why wait? Start browsing our collection today and discover the joy of reading!

                              </p>
                              <img class="signature float-right" src="img/signature.png" alt="Signature">
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
      <!-- Javascript -->
      <?php include('script.html'); ?>
      <!-- End Javascript -->
  </body>
</html>
