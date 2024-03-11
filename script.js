document.addEventListener('DOMContentLoaded', function () {
    // Fetch and display recommended videos, newest videos, and newly uploaded videos
    fetchVideos('recommended-videos-container', 'list.php');
    fetchVideos('newest-videos-container', 'list.php?filter=new');
    fetchVideos('new-videos-container', 'list.php');

    // Function to fetch and display videos
    function fetchVideos(containerId, url) {
        fetch(url)
            .then(response => response.json())
            .then(data => {
                const videosContainer = document.getElementById(containerId);
                videosContainer.innerHTML = '';

                data.forEach(video => {
                    const videoElement = document.createElement('video');
                    videoElement.src = 'uploads/' + video;
                    videoElement.controls = true;
                    videoElement.type = 'video/mp4'; // You may need to adjust this based on the actual video type
                    videosContainer.appendChild(videoElement);
                });
            });
    }
});
