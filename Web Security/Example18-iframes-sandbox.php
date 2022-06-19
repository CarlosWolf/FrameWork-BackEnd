<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iframes - sandbox</title>
</head>
<body>
<iframe src="http://nytimes.com" height="400px" width="600px"
        scrolling="yes" frameborder="0">
</iframe>
<br>
<iframe sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
        src="https://platform.twitter.com/widgets/tweet_button.html"
        style="border: 0; width:100px; height:40px;">
</iframe>
</body>
</html>
