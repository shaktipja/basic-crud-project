<?php
session_start();
$get_content='';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    require('db-conn.php');
    $query="SELECT * FROM posts WHERE id=".$id;
    $run_query=mysqli_query($conn,$query);
    
    if($run_query)
    {
      if(mysqli_num_rows($run_query)==0)
      {
        echo"<script>alert('No data available...') </script>";// confirm
        echo "<script>window.location = 'blog-archive.php'</script>";
      }
        while ($data = mysqli_fetch_array($run_query)){
        
        $get_id=$data['id'];
        $get_user_post=$data['user_post'];
        $get_author=$data['author'];
        $get_topic_name= $data['topic_name'];
        $get_description=$data['description'];
        $get_content=$data['content'];
        $get_date_time=$data['date_time'];
        $get_image_src=$data['image_src'];

        $get_content='<div class="col-md-12">
        <article class="mu-blog-single-item">
          <figure class="mu-blog-single-img">
            <a href="#"><img alt="img" src="'.$get_image_src.'"></a>
            <figcaption class="mu-blog-caption">
              <h3><a href="#">'.$get_topic_name.'</a></h3>
            </figcaption>                      
          </figure>
          <div class="mu-blog-meta">
            <a href="#">'.$get_author.'</a>
            <a href="#">'.$get_date_time.'</a>
            <span><i class="fa fa-comments-o"></i>87</span>
          </div>
          <div class="mu-blog-description">
            <p>'.$get_description.' </p><br>
            <p>'.$get_content.' </p>
            
            
          </div>
          <!-- start blog post tags -->
          <div class="mu-blog-tags">
            <ul class="mu-news-single-tagnav">
              <li>TAGS :</li>
              <li><a href="#">Science,</a></li>
              <li><a href="#">English,</a></li>
              <li><a href="#">Sports,</a></li>
              <li><a href="#">Health</a></li>
            </ul>
          </div>
          <!-- End blog post tags -->
          <!-- start blog social share -->
          <div class="mu-blog-social">
            <ul class="mu-news-social-nav">
              <li>SOCIAL SHARE :</li>
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            </ul>
          </div>
          <!-- End blog social share -->
        </article>
      </div>    ';
        }
    }
    else{
        header('Location:blog-archive.php');
    }
}
else {
  echo"<script>alert('No data avilable') </script>";// confirm
  echo "<script>window.location = 'blog-archive.php'</script>";
}
$title='My Single Blog';
$content='<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>My Complete Blog</h2>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                        '.$get_content.'
                  </div>
                </div>
                <!-- end course content container -->

                <!-- start blog navigation -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-single-navigation">
                      <a class="mu-blog-prev" href="#"><span class="fa fa-angle-left"></span>Prev</a>
                      <a class="mu-blog-next" href="#">Next<span class="fa fa-angle-right"></span></a>
                    </div>
                  </div>
                </div>
                <!-- end blog navigation -->

                <!-- start blog comment -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-comments-area">
                      <h3>5 Comments</h3>
                      <div class="comments">
                        <ul class="commentlist">
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">David Muller</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "-------Content here, content here", making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">John Doe</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "------------Content here, content here", making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                          <ul class="children">
                            <li class="author-comments">
                              <div class="media">
                                <div class="media-left">    
                                  <img alt="img" src="assets/img/testimonial-3.png" class="media-object news-img">
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Admin</h4>
                                 <span class="comments-date"> Posted on 12th June, 2016</span>
                                 <span class="author-tag">Author</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "-------Content here, content here", making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                              </div>
                            </li>
                            <ul class="children">
                              <li>
                                <div class="media">
                                  <div class="media-left">    
                                    <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                                  </div>
                                  <div class="media-body">
                                   <h4 class="author-name">David Muller</h4>
                                   <span class="comments-date"> Posted on 12th June, 2016</span>
                                   <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "--------------Content here, content here", making it look like readable English</p>
                                   <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </ul>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">Jhon Doe</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "----------Content here, content here", making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <!-- comments pagination -->
                        <nav>
                          <ul class="pagination comments-pagination">
                            <li>
                              <a aria-label="Previous" href="#">
                                <span class="fa fa-long-arrow-left"></span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a aria-label="Next" href="#">
                                <span class="fa fa-long-arrow-right"></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end blog comment -->
               
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="">Web Development</a></li>
                      <li><a href="">Math</a></li>
                      <li><a href="">Physics</a></li>
                      <li><a href="">Camestry</a></li>
                      <li><a href="">English</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>';

require('master.php');

?>


