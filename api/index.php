<?php
// This is the source code that powers Mastofetch
// Copyright 2025-Present TheDoggyBrad Software Labs (under MIT License)
error_reporting(0);
header("Content-Type: text/html; charset=utf-8");

// This is the list of instances that will be used by Mastofetch
$instances = [
'https://social.vivaldi.net/api/v1/timelines/public'
];

// The process of fetching the posts and decoding them to what you will see on the screen
// Limit of 50 URLs, to avoid overloading
function fetchPostsFromMastodon($url, $limit = 50)
{
    $fullUrl = $url . '?limit=' . $limit;

// The HTTP request parameters using GET, a custom user agent and a timeout of 10 seconds to avoid heavy delays
    $opts = [
        'http' => [
            'method'  => 'GET',
            'header'  => [
                'User-Agent: MastofetchBot/1.0 (+https://mastofetch.vercel.app)',
            ],
            'timeout' => 10 // in seconds
        ]
    ];

// The actual fetching process
    $context = stream_context_create($opts);
    $response = @file_get_contents($fullUrl, false, $context);

    if ($response === false) {
        return [];
    }

    $data = json_decode($response, true);
    return is_array($data) ? $data : [];
}


// The decoding process
function decodeEntities($text)
{
    return html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// Decoding the profile picture of the Mastodon user
function getAuthorProfileImage($account)
{
    return $account['avatar'];
}

// Decoding the time and date of the posts and encoding it as the estimated length of time between you seeing the post and the time it was posted
function getTimeElapsedString($datetime)
{
    $now = new DateTime("now", new DateTimeZone("UTC"));
    $ago = new DateTime($datetime, new DateTimeZone("UTC"));
    $diff = $now->diff($ago);

    $string = [
        'y' => 'year',
        'm' => 'month',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    ];

    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . ($diff->$k > 1 ? $v . 's' : $v);
        } else {
            unset($string[$k]);
        }
    }

    return $string ? implode(', ', array_slice($string, 0, 1)) . ' ago' : 'just now';
}

// Exclusing the already fetched URL to avoid getting from the same instance again during that run of the script
function getRandomInstanceURL($exclude = null)
{
    global $instances;
    $filtered = array_values(array_filter($instances, fn($url) => $url !== $exclude));
    if (empty($filtered)) return null;
    return $filtered[array_rand($filtered)];

}

// Includes some safety protections like sanitization 
if (isset($_GET['ajax']) && $_GET['ajax'] === '1') {
    $exclude = filter_input(INPUT_GET, 'exclude', FILTER_SANITIZE_URL);
    $url = getRandomInstanceURL($exclude);
    $posts = fetchPostsFromMastodon($url, 10);

// The encoding of the lazyload next post items
    foreach ($posts as $post) {
        $authorProfileImage = getAuthorProfileImage($post['account']);
        echo "<div class='post'>";
        echo "<img class='author-img' src='{$authorProfileImage}' alt='Author Profile Image'>";
        echo "<p style='margin-bottom: 2px;'><strong>{$post['account']['display_name']}</strong></p>";
        echo "<p class='post-time' style='margin-top: 0px;'>Posted&nbsp;" . getTimeElapsedString($post['created_at']) . "</p>";
        echo "<p>" . strip_tags(decodeEntities($post['content']), '<p><a><br><strong><em><blockquote><code>') . "</p>";

        if (!empty($post['media_attachments'])) {
            foreach ($post['media_attachments'] as $attachment) {
                if ($attachment['type'] === 'image') {
                    echo "<div class='media'><img src='" . $attachment['url'] . "' alt='Image'></div>";
                } elseif ($attachment['type'] === 'video') {
                    echo "<div class='media'><video controls><source src='" . $attachment['url'] . "' type='video/mp4'></video></div>";
                }
            }
        }

        echo "</div><hr>";
    }
    exit;
}


// 3 Posts from the 1st instance will initially appear then the rest will appear during the lazyload
$firstInstance = $instances[array_rand($instances)];
$initialPosts = fetchPostsFromMastodon($firstInstance, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- For SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastofetch - Catch the fediverse in your hands</title>
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231878/mastofetch/favicon_io/apple-touch-icon_td8gsp.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231878/mastofetch/favicon_io/favicon-32x32_odtk7m.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231877/mastofetch/favicon_io/favicon-16x16_zlpxtr.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231878/mastofetch/favicon_io/favicon_bfxjif.ico">
    <link rel="manifest" href="site.webmanifest">
    <meta name="description" content="Catch the fediverse in your hands with Mastofetch">
    <meta name="keywords" content="Mastodon, Mastofetch">
    <meta name="author" content="TheDoggyBrad Software Labs">
    <meta property="og:title" content="Mastofetch" />
    <meta property="og:type" content="site" />
    <meta property="og:url" content="https://mastofetch.vercel.app" />
    <meta property="og:image" content="https://res.cloudinary.com/dceum4nes/image/upload/f_auto,q_auto/v1/mastofetch/bdwa8xpebulizhkqnkuq" />
    <meta property="og:description" content="Catch the fediverse in your hands with Mastofetch">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://mastofetch.vercel.app">
    <meta property="twitter:url" content="https://mastofetch.vercel.app">
    <meta name="twitter:title" content="Google">
    <meta name="twitter:description" content="Catch the fediverse in your hands with Mastofetch">
    <meta name="twitter:image" content="https://res.cloudinary.com/dceum4nes/image/upload/f_auto,q_auto/v1/mastofetch/bdwa8xpebulizhkqnkuq">
    <link rel="canonical" href="https://mastofetch.vercel.app" />
    <meta name="google-site-verification" content="i75bK6WPK0pIchr3PaYsTtuaDdkr1ocmy6KSuI1i5g0" />
    <!-- For the return to the top button iocn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <style>
body {
    font-family: 'Segoe UI', Roboto, sans-serif;
    background-color: #1e1e2f;
    color: #e0e0e0;
    margin: 0;
    padding: 20px;
    line-height: 1.6;
}

.post {
    background-color: #2a2a40;
    border-radius: 12px;
    padding: 20px;
    margin: 20px auto;
    max-width: 700px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    transition: transform 0.2s ease;
}

.post:hover {
    transform: translateY(-3px);
}

.post p {
    margin: 10px 0;
    overflow-wrap: break-word;
}

.post a {
    color: #64b5f6;
    text-decoration: none;
}

.post a:hover {
    color: #ff4081;
    text-decoration: underline;
}

.author-img {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    float: left;
    margin-right: 12px;
    object-fit: cover;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
}

.post strong {
    font-size: 1.1rem;
}

.post-time {
    color: #a0a0a0;
    font-size: 0.85rem;
    margin-top: -6px;
}

.media {
    margin-top: 15px;
    border-radius: 10px;
    overflow: hidden;
}

.media img,
.media video {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

hr {
    border: none;
    border-top: 1px solid #3a3a55;
    margin: 30px auto;
    max-width: 700px;
}

.refresh, .about {
    color: #ffffff;
    text-decoration: none;
    font-family: 'Segoe UI', Roboto, sans-serif;
    font-weight: 500;
    letter-spacing: 0.3px;
    -webkit-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

.mastofetchlogo {
    display: block;
    margin: 20px auto;
}

/* Linkers are the hyperlinks located in the about Mastofetch modal */
.linkers {
    color: #ffffff;
    font-family: 'Segoe UI', Roboto, sans-serif;
    font-weight: 500;
    letter-spacing: 0.3px;
}

.about-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.6);
}

.about-modal-content {
  background-color: #2a2a40;
  margin: 10% auto;
  padding: 20px;
  border-radius: 8px;
  width: 90%;
  max-width: 500px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.2);
  font-family: system-ui, sans-serif;
  color: #ffffff;
  font-style: normal;
  -webkit-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
}

.about-close {
  color: #ffffff;
  float: right;
  font-size: 32px;
  font-weight: bold;
  cursor: pointer;
  -webkit-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
}

.about-close:hover {
  color: #ff0000;
  -webkit-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
}

body.modal-open {
  overflow: hidden;
}

#toTopBtn {
    position: fixed;
    bottom: 30px;
    right: 25px;
    z-index: 1000;
    background-color: #2a2a40;
    color: #ffffff;
    font-size: 20px;
    border: none;
    border-radius: 50%;
    padding: 14px 16px;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    transition: background-color 0.3s ease, transform 0.2s ease;
   -webkit-user-select: none; 
   -ms-user-select: none; 
   user-select: none;
}

#toTopBtn:hover {
    background-color: #3b3b5c;
    transform: translateY(-2px);
    -webkit-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

    </style>

</head>
<body>
    <img class="mastofetchlogo" width="128px" height="128px" src="https://res.cloudinary.com/dceum4nes/image/upload/f_auto,q_auto/v1/mastofetch/Logo_wgac9d">
    <p class="popup" style="color:white; text-align:center">
        <a oncontextmenu="return false;" class="refresh" href="#" onclick="location.reload(); return false;">Refresh Content</a><br>
        <a oncontextmenu="return false;" class="about" id="aboutBtn" href="#">About Mastofetch</a>
    </p><br>
    <div id="posts">
        <?php
// These are the intial posts appearing
        foreach ($initialPosts as $post) {
            $authorProfileImage = getAuthorProfileImage($post['account']);
            echo "<div class='post'>";
            echo "<img class='author-img' src='{$authorProfileImage}' alt='Author Profile Image'>";
            echo "<p style='margin-bottom: 2px;'><strong>" . htmlspecialchars($post['account']['display_name'], ENT_QUOTES | ENT_HTML5, 'UTF-8') . "</strong><p class='post-time' style='margin-top: 0px;'>Posted&nbsp;" . getTimeElapsedString($post['created_at']) . "</p>";
            echo "<p>" . strip_tags(decodeEntities($post['content']), '<p><a><br><strong><em><ul><ol><li><blockquote><code><img>') . "</p>";

            if (!empty($post['media_attachments'])) {
                foreach ($post['media_attachments'] as $attachment) {
                    if ($attachment['type'] === 'image') {
                        echo "<div class='media'><img src='" . $attachment['url'] . "' alt='Image'></div>";
                    } elseif ($attachment['type'] === 'video') {
                        echo "<div class='media'><video controls><source src='" . $attachment['url'] . "' type='video/mp4'></video></div>";
                    }
                }
            }

            echo "</div><hr>";
        }
        ?>
    </div>
    <p id="loader" style="text-align: center; color: #ffffff;">Loading posts...</p>

  <!-- The modal popup for the about Mastofetch -->
  <div id="aboutModal" class="about-modal">
  <div class="about-modal-content">
    <span class="about-close">&times;</span>
     <img class="mastofetchlogo" width="92px" height="92px" src="https://res.cloudinary.com/dceum4nes/image/upload/f_auto,q_auto/v1/mastofetch/Logo_wgac9d">
     <p>Mastofetch is your anonymized feed retriever for the Mastodon network. This project feeds the public posts posted across the entire Mastodon network to your web browser.</p>
      <a class="linkers" target="_blank" rel="me" href="https://mastodon.social/@mastofetch">Mastodon Profile</a><br>
      <a class="linkers" target="_blank" rel="noopener noreferrer" href="https://github.com/thedoggybrad/mastofetch">Github Repository</a><br>
      <a class="linkers" target="_blank" rel="noopener noreferrer" href="https://github.com/thedoggybrad/mastofetch#terms-of-service-for-mastofetch">Terms of Service</a><br>
      <a class="linkers" target="_blank" rel="noopener noreferrer" href="https://github.com/thedoggybrad/mastofetch#privacy-policy-for-mastofetch">Privacy Policy</a><br>
      <a class="linkers" target="_blank" rel="noopener noreferrer" href="https://github.com/thedoggybrad/mastofetch/blob/main/LICENSE">License (MIT License)</a><br>
    <br><br>
    <footer style="text-align: center;">&#169;2025-Present TheDoggyBrad Software Labs.<br>All Rights Reserved.</footer>
  </div>
</div>


<!-- The button that will return you to the top of the page -->
<button id="toTopBtn" aria-label="Scroll to top">
<i class="fa-solid fa-arrow-up"></i>
</button>
    
<script>
// The JavaScript for the return to top button 
    document.getElementById("toTopBtn").onclick = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
</script>


<script>
// The JavaScript for the about Mastofetch modal
  const modal = document.getElementById("aboutModal");
  const btn = document.getElementById("aboutBtn");
  const span = document.querySelector(".about-close");

btn.onclick = () => {
  modal.style.display = "block";
  document.body.classList.add("modal-open");
};

span.onclick = () => {
  modal.style.display = "none";
  document.body.classList.remove("modal-open");
};

window.onclick = e => {
  if (e.target === modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
  }
};

</script>

    <script>
// The JavaScripts for the appearance of each post items
        let loading = false;
        const firstInstance = <?= json_encode($firstInstance) ?>;

        function loadMorePosts() {
            if (loading) return;
            loading = true;

            fetch('?ajax=1&exclude=' + encodeURIComponent(firstInstance))
                .then(res => res.text())
                .then(html => {
                    document.getElementById('posts').insertAdjacentHTML('beforeend', html);
                    loading = false;
                });
        }

        function isNearBottom() {
            return window.innerHeight + window.scrollY >= document.body.offsetHeight - 200;
        }

        window.addEventListener('scroll', () => {
            if (isNearBottom()) {
                loadMorePosts();
            }
        });

        window.addEventListener('load', () => {
            setTimeout(loadMorePosts, 1000);
        });
    </script>
</body>
</html>
