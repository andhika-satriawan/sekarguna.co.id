<?php /* Template Name:Videos 2 */ ?>

<?php get_header('page'); ?>

<div class="body-videos">
    <div class="container">
        <h1>MyAlkes Vlog</h1>
        <div class="row">
            <div class="col-md-12">
                <div id="profileYoutube" class="channel-youtube"></div>
            </div>   
        </div>
        <div id="listYoutube" class="row"></div>
    </div>      
</div>

<script type="text/javascript">
    const getChannelYoutubeDataFromAPI = () => {
        const elementProfileYoutube = document.getElementById('profileYoutube');

        fetch('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,contentDetails&id=UCVIbsI7uH1loUis-tjbuQSQ&key=AIzaSyDD00NXM9xJKrt4Zo7mw3nIV3wV19Jgh1A', {
            method: "GET",
            header: {
                "Content-Type" : "application/json"
            }
        })
        .then((response) => response.json())
        .then((dataChannelYoutube) => {
            
            dataChannelYoutube.items.map((profile) => {
                elementProfileYoutube.innerHTML += `
                    <img src="${profile.snippet.thumbnails.medium.url}" alt="Photo profile channel youtube PT. Sekarguna Medika">
                    <h6>${profile.snippet.title}</h6>
                    <p>${profile.statistics.subscriberCount} subscribers</p>
                `
            })
        })
    }
    getChannelYoutubeDataFromAPI();


    const getListYoutubeDataFromAPI = () => {
        const elementListYoutube = document.getElementById('listYoutube');

        fetch('https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails,id,snippet,status&playlistId=PL5Zg1SVUzfrvzea_gakpIMBix2_KSaKx5&maxResults=50&key=AIzaSyDD00NXM9xJKrt4Zo7mw3nIV3wV19Jgh1A', {
            method: "GET",
            header: {
                "Content-Type" : "application/json"
            }
        })
        .then((response) => response.json())
        .then((dataListYoutube) => {
            
            dataListYoutube.items.map((video) => {
                elementListYoutube.innerHTML += `
                    <div class="col-md-6">
                        <div class="box-video-y">
                            <div class="show-more">
                                <iframe loading="lazy" src="https://www.youtube.com/embed/${video.contentDetails.videoId}" width="100%" height="315" title="${video.snippet.title}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>${video.snippet.title}</h5>
                                <em>${video.contentDetails.videoPublishedAt}</em>
                                <p>${video.snippet.description}</p>
                                <strong>SHOW MORE</strong>
                            </div>
                        </div>
                    </div>
                `
            })
        }) 
    }
    getListYoutubeDataFromAPI();


    
    // const buttonLoad = document.getElementsByTagName("strong");
    // for(let i = 0; i < buttonLoad.length; i++){
    //     console.log(i);
    //     buttonLoad[i].addEventListener('click', function() {
    //         if(this.parentElement.className == 'show-more'){
    //             this.parentElement.className = 'show-less';
    //         } else {
    //             this.parentElement.className = 'show-more';
    //         }
    //     });
    // }
</script>

<?php get_footer(); ?>