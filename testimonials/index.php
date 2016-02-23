<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Hilton Grand Vacations is committed to the idea that life is incomplete without vacations. Our distinctive resort collection features spacious condominium-style accommodations." />
  <title>Learn About Vacation Ownership with Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container page-container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
    </div>
    
    <!-- <div id="subtitle">
      <h2>About Vacation Ownership</h2>
    </div> -->
    
    <div>
      <div id="subcontent" class="content">
        <div class="row">
          <!-- <div class="sub-content">
            <h1>オーナーの声</h1>
          </div> -->

          <!-- <header class="cd-header">
            <h1>Content Filter</h1>
          </header> -->
           
          <main class="cd-main-content">
            <div class="cd-tab-filter-wrapper">
              <div class="cd-tab-filter">
                <ul class="cd-filters">
                  <li class="placeholder"> 
                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                  </li> 
                  <li class="filter"><a class="selected" href="#0" data-type="all">全て</a></li>
                  <li class="filter" data-filter=".video"><a href="#0" data-type="movie">動画</a></li>
                  <li class="filter" data-filter=".pics-hawaii"><a href="#0" data-type="pics-hawaii">ハワイ</a></li>
                  <li class="filter" data-filter=".pics-japan"><a href="#0" data-type="pics-japan">国内</a></li>
                  <li class="filter" data-filter=".pics-other"><a href="#0" data-type="pics-other">海外</a></li>
                </ul> <!-- cd-filters -->
              </div> <!-- cd-tab-filter -->
            </div> <!-- cd-tab-filter-wrapper -->
           
            <section class="cd-gallery">
              <ul>
                <li class="mix video testimonial-link">
                  <a href="https://www.youtube.com/watch?v=5b3ggGNMItw" class="popup-youtube"><img src="img/video/video-01.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">旅先での出会いもタイムシェアの魅力</span>
                      <span class="testimonial-name">愛知県在住/星野様</span>
                    </div>
                  </a>
                </li>
                <li class="mix video testimonial-link">
                  <a href="https://www.youtube.com/watch?v=5LqaeHKcdy4" class="popup-youtube"><img src="img/video/video-02.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">タイムシェアで「暮らすハワイ」を知った</span>
                      <span class="testimonial-name">千葉県在住/吉井様</span>
                    </div>
                  </a>
                </li>
                <li class="mix video testimonial-link">
                  <a href="https://www.youtube.com/watch?v=gZDHnDUQbpI" class="popup-youtube"><img src="img/video/video-03.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">神様がくれたプレゼント</span>
                      <span class="testimonial-name">宮城県在住/小野寺様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-other testimonial-link">
                  <a href="#"><img src="img/other/other-01.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">充実のアメリカ旅行</span>
                      <span class="testimonial-name">神奈川県在住／宗像様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-01.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">娘のウェディング</span>
                      <span class="testimonial-name">千葉県在住／浅倉様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-02.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">初めての家族旅行</span>
                      <span class="testimonial-name">沖縄県在住／森田様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-03.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">我が家のタイムシェアデビュー！</span>
                      <span class="testimonial-name">愛知県在住／村田様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-04.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">ハワイから広がる友達の輪</span>
                      <span class="testimonial-name">兵庫県在住／新井様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-other testimonial-link">
                  <a href="#"><img src="img/other/other-02.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">タイムシェアを購入して早８年...</span>
                      <span class="testimonial-name">大阪府在住／稲泉様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-05.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">愛のキューピット</span>
                      <span class="testimonial-name">三重県在住／水野様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-06.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">モノより思い出</span>
                      <span class="testimonial-name">神奈川県在住／高橋様</span>
                    </div>
                  </a>
                </li>
                <li class="mix pics-hawaii testimonial-link">
                  <a href="#"><img src="img/hawaii/hawaii-07.jpg" />
                    <div class="testimonial-details">
                      <span class="testimonial-title">素晴らしかった初めての<br />タイムシェア・リゾート利用体験</span>
                      <span class="testimonial-name">東京都在住／福田様</span>
                    </div>
                  </a>
                </li>
                <li class="gap"></li>
              </ul>
              <div class="cd-fail-message">No results found</div>
            </section> <!-- cd-gallery -->
          </main> <!-- cd-main-content -->

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>


          
        </div> <!-- row -->
      </div> <!-- subcontent -->
    </div>
    
    <?php addFooter(); ?>
    
  </div> <!-- container -->

  <?php addScripts(); ?>

</body>
</html>