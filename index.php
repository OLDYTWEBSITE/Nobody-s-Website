
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Video Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Your Video Platform</h1>
    </header>
    <main>
        <section id="upload-section">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="video-upload">Upload Video:</label>
                <input type="file" name="video" id="video-upload" accept="video/*" required>
                <button type="submit">Upload Video</button>
            </form>
        </section>
        <section id="videos-section">
            <h2>Recommended Videos</h2>
            <div id="recommended-videos-container"></div>
            <h2>Newest Videos</h2>
            <div id="newest-videos-container"></div>
            <h2>Newly Uploaded Videos</h2>
            <div id="new-videos-container"></div>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
