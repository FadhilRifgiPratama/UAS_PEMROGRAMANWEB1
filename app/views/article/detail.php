<?php  
function generateSocialMediaShareLink($url, $platform, $postText) {
    $encodedURL = urlencode($url);
    $encodedPostText = urlencode($postText);

    switch ($platform) {
        case 'facebook':
            return '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $encodedURL . '" target="_blank">Share on Facebook</a>';
        case 'twitter':
            return '<a href="https://twitter.com/intent/tweet?url=' . $encodedURL . '&text=' . $encodedPostText . '" target="_blank">Share on Twitter</a>';
        case 'linkedin':
            return '<a href="https://www.linkedin.com/sharing/share-offsite/?url=' . $encodedURL . '" target="_blank">Share on LinkedIn</a>';
        case 'pinterest':
            return '<a href="https://pinterest.com/pin/create/button/?url=' . $encodedURL . '&description=' . $encodedPostText . '" target="_blank">Pin on Pinterest</a>';
        // Add more cases for other social media platforms if needed
        default:
            return '';
    }
}
$url = 'https://www.example.com';
$postText = 'Check out this cool website!';
$socialMediaPlatform = 'twitter'; // Change this to the desired platform

$shareLink = generateSocialMediaShareLink($url, $socialMediaPlatform, $postText);

?>

        <header class="bg-grad-stellar mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-12 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><?= $data['article']['title']; ?><small class="color-light alpha7"><?= $data['article']['category_id']; ?></small></h3>
                    </div>
                </div>
            </div>

        </header>
        
        
        <!-- Blog Area
        ===================================== -->
        <section id="blog" class="pt75 pb50">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="blog-three-mini">
                            <h2 class="color-dark"><a href="#"><?= $data['article']['title']; ?></a></h2>
                            <div class="blog-three-attrib">
                                <div><i class="fa fa-calendar"></i>
                                <?php
                                $dateTime = DateTime::createFromFormat('Y-m-d', $data['article']['publish_date']);
                                $formattedDateTime = $dateTime->format('d-F-Y');
                                echo $formattedDateTime;
                                ?> | </div> | 
                                <div><i class="fa fa-pencil"></i><a href="#"><?= $data['article']['author_id']; ?></a></div> | 
                                <div>
                                <?php 
                                    function generateWhatsAppShareLink($url, $postText) {
                                        $encodedURL = urlencode($url);
                                        $encodedPostText = urlencode($postText);

                                        return '<a href="https://api.whatsapp.com/send?text=' . $encodedPostText . '%20' . $encodedURL . '" target="_blank">Share on WhatsApp</a>';
                                    }

                                    $url = 'https://www.example.com';
                                    $postText = $data['article']['title'];
                                    $whatsappShareLink = generateWhatsAppShareLink($url, $postText);
                                    echo $whatsappShareLink;
                                ?>    
                                
                                </div>
                            </div>
                            <?php foreach ($data['article']['images'] as $image): ?>
                                <img src="<?= BASEURL; ?>/images/<?= $image; ?>" alt="Image Carousel" class="img-responsive">
                            <?php endforeach; ?>  
                            <div class="lead mt25">
                                <?= $data['article']['content']; ?>
                            </div>
                            
                            <div class="blog-post-read-tag mt50">
                                
                            </div>
                            
                        </div>
                        
                    </div>                    
                    
                </div>
                
            </div>
        </section>
         