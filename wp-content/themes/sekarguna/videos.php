<?php /* Template Name:Videos */ ?>

<?php 
    function get_CURL($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl); 
        curl_close($curl);

        return json_decode($result, true);  
    }

    $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,contentDetails&id=UCVIbsI7uH1loUis-tjbuQSQ&key=AIzaSyDD00NXM9xJKrt4Zo7mw3nIV3wV19Jgh1A');

    $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
    $channelName = $result['items'][0]['snippet']['title'];
    $subscriber = $result['items'][0]['statistics']['subscriberCount'];

    $output = get_CURL('https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails,id,snippet,status&playlistId=PL5Zg1SVUzfrvzea_gakpIMBix2_KSaKx5&maxResults=50&key=AIzaSyDD00NXM9xJKrt4Zo7mw3nIV3wV19Jgh1A');

    $idVideo = $output['items'];
?>

<?php get_header('page'); ?>

<div class="body-videos">
    <div class="container">
        <h1>MyAlkes Vlog</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="channel-youtube">
                    <img src="<?= $youtubeProfilePic; ?>" alt="">
                    <h6><?= $channelName; ?></h6>
                    <p><?= $subscriber; ?> subscribers</p>
                </div>
            </div>

            <?php 
                foreach ($idVideo as $contentDetails) {
                    echo '
                        <div class="box-video-y">
                            <div class="show-more">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/'.$contentDetails["contentDetails"]["videoId"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>'.$contentDetails["snippet"]["title"].'</h5>
                                <em>'. date('d M Y | h:i:s', strtotime($contentDetails["contentDetails"]["videoPublishedAt"])).'</em>
                                <p>'.$contentDetails["snippet"]["description"].'</p>
                                <span>SHOW MORE</span>
                            </div>
                        </div>
                    ';
                }
            ?>

        </div>
    </div>      
</div>

<script type="text/javascript">
    let button = document.getElementsByTagName("span");
    for(let i = 0; i<button.length;i++){
        button[i].addEventListener('click', function() {
                if(this.parentElement.className == 'show-more'){
                    this.parentElement.className = 'show-less';
                } else {
                    this.parentElement.className = 'show-more';
        }
    });
}
</script>

<?php get_footer(); ?>