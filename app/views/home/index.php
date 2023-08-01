        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Article Posts<small class="color-light alpha7">News Article</small></h3>
                    </div>
                    <div class="col-md-6 text-right pt35">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        
        <!-- Blog Area
        ===================================== -->
        <div id="blog" class="mt50 pb70">
            <div class="container">
                
               
                <div class="row">
                <?php foreach ( $data['article'] as $data ): ?>
                    <!--Blog Post -->
                    <div class="col-md-4 col-sm-4 col-xs-12 mb50">
                        <div class="blog-three">
                            <h4 class="blog-title"><a href="#"><?= $data['title']; ?></a></h4>
                            <div class="blog-three-attrib">
                                <span class="icon-calendar"></span><?php
                                $dateTime = DateTime::createFromFormat('Y-m-d', $data['publish_date']);
                                $formattedDateTime = $dateTime->format('d-F-Y');
                                echo $formattedDateTime;
                                ?> | 
                                <span class=" icon-pencil"></span><a href="#"><?= $data['author_id']; ?></a>
                            </div>
                            <?php if (!empty($data['images'])): ?>
                                <img src="<?= BASEURL; ?>/images/<?= ($data['images'][0]); ?>" class="img-responsive" alt="image blog" style="max-height: 400px;">
                            <?php endif; ?>
                            <p class="mt25">
                            </p>
                            <a href="<?= BASEURL; ?>/DashboardArtikel/detail/<?= $data['id']; ?>" class="button button-gray button-xs">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div> 
                <?php endforeach; ?>
                </div>
                
                <div class="text-center mt25 animated" data-animation="fadeInUp" data-animation-delay="800">
                    <div class="col-md-12">
                        <a href="<?= BASEURL; ?>/DashboardArtikel/AllPost" class="button button-sm button-pasific center hover-skew-backward">View More</a>
                    </div>
                </div>
                
            </div>
        </div>
         