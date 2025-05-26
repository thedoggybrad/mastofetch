<?php
// Source that powers Mastofetch
// Copyright 2025-Present TheDoggyBrad Software Labs (under MIT License)
// error_reporting(0);
header("Content-Type: text/html; charset=utf-8");

$instances = [
'https://mastodon.social/api/v1/timelines/public',
'https://mas.to/api/v1/timelines/public',
'https://social.vivaldi.net/api/v1/timelines/public',
'https://techhub.social/api/v1/timelines/public',
'https://c.im/api/v1/timelines/public',
'https://mstdn.ca/api/v1/timelines/public',
'https://aus.social/api/v1/timelines/public',
'https://sfba.social/api/v1/timelines/public',
'https://mastodon.scot/api/v1/timelines/public',
'https://toot.community/api/v1/timelines/public',
'https://mstdn.party/api/v1/timelines/public',
'https://ohai.social/api/v1/timelines/public',
'https://defcon.social/api/v1/timelines/public',
'https://ioc.exchange/api/v1/timelines/public',
'https://flipboard.social/api/v1/timelines/public',
'https://mastodon.au/api/v1/timelines/public',
'https://ieji.de/api/v1/timelines/public',
'https://wehavecookies.social/api/v1/timelines/public',
'https://cyberplace.social/api/v1/timelines/public',
'https://masto.nu/api/v1/timelines/public',
'https://toot.wales/api/v1/timelines/public',
'https://ravenation.club/api/v1/timelines/public',
'https://mstdn.plus/api/v1/timelines/public',
'https://glasgow.social/api/v1/timelines/public',
'https://expressional.social/api/v1/timelines/public',
'https://cupoftea.social/api/v1/timelines/public',
'https://woof.tech/api/v1/timelines/public',
'https://sakurajima.moe/api/v1/timelines/public',
'https://musicworld.social/api/v1/timelines/public',
'https://gaygeek.social/api/v1/timelines/public',
'https://urusai.social/api/v1/timelines/public',
'https://bookstodon.com/api/v1/timelines/public',
'https://cr8r.gg/api/v1/timelines/public',
'https://mastodon.holeyfox.co/api/v1/timelines/public',
'https://mastodon.com.pl/api/v1/timelines/public',
'https://masto.nyc/api/v1/timelines/public',
'https://hear-me.social/api/v1/timelines/public',
'https://ani.work/api/v1/timelines/public',
'https://social.silicon.moe/api/v1/timelines/public',
'https://theatl.social/api/v1/timelines/public',
'https://gardenstate.social/api/v1/timelines/public',
'https://drumstodon.net/api/v1/timelines/public',
'https://mastodon.sg/api/v1/timelines/public',
'https://xreality.social/api/v1/timelines/public',
'https://mstdn.social/api/v1/timelines/public',
'https://infosec.exchange/api/v1/timelines/public',
'https://mastodon.world/api/v1/timelines/public',
'https://hachyderm.io/api/v1/timelines/public',
'https://mastodon.gamedev.place/api/v1/timelines/public',
'https://social.tchncs.de/api/v1/timelines/public',
'https://kolektiva.social/api/v1/timelines/public',
'https://mastodonapp.uk/api/v1/timelines/public',
'https://universeodon.com/api/v1/timelines/public',
'https://mathstodon.xyz/api/v1/timelines/public',
'https://tech.lgbt/api/v1/timelines/public',
'https://mastodon.sdf.org/api/v1/timelines/public',
'https://det.social/api/v1/timelines/public',
'https://mastodon.ie/api/v1/timelines/public',
'https://social.linux.pizza/api/v1/timelines/public',
'https://indieweb.social/api/v1/timelines/public',
'https://mindly.social/api/v1/timelines/public',
'https://mastodon.green/api/v1/timelines/public',
'https://nerdculture.de/api/v1/timelines/public',
'https://ruby.social/api/v1/timelines/public',
'https://mastodon.nz/api/v1/timelines/public',
'https://phpc.social/api/v1/timelines/public',
'https://climatejustice.social/api/v1/timelines/public',
'https://metalhead.club/api/v1/timelines/public',
'https://mstdn.business/api/v1/timelines/public',
'https://sciences.social/api/v1/timelines/public',
'https://noc.social/api/v1/timelines/public',
'https://sunny.garden/api/v1/timelines/public',
'https://toot.io/api/v1/timelines/public',
'https://urbanists.social/api/v1/timelines/public',
'https://mastodon.me.uk/api/v1/timelines/public',
'https://hostux.social/api/v1/timelines/public',
'https://blorbo.social/api/v1/timelines/public',
'https://bark.lgbt/api/v1/timelines/public',
'https://furry.engineer/api/v1/timelines/public',
'https://mstdn.games/api/v1/timelines/public',
'https://mapstodon.space/api/v1/timelines/public',
'https://discuss.systems/api/v1/timelines/public',
'https://hcommons.social/api/v1/timelines/public',
'https://tilde.zone/api/v1/timelines/public',
'https://fairy.id/api/v1/timelines/public',
'https://peoplemaking.games/api/v1/timelines/public',
'https://socel.net/api/v1/timelines/public',
'https://mastoart.social/api/v1/timelines/public',
'https://veganism.social/api/v1/timelines/public',
'https://toad.social/api/v1/timelines/public',
'https://union.place/api/v1/timelines/public',
'https://stranger.social/api/v1/timelines/public',
'https://mastodon.berlin/api/v1/timelines/public',
'https://mastodon.london/api/v1/timelines/public',
'https://lgbtqia.space/api/v1/timelines/public',
'https://retro.pizza/api/v1/timelines/public',
'https://theblower.au/api/v1/timelines/public',
'https://vmst.io/api/v1/timelines/public',
'https://famichiki.jp/api/v1/timelines/public',
'https://pawb.fun/api/v1/timelines/public',
'https://freeradical.zone/api/v1/timelines/public',
'https://graphics.social/api/v1/timelines/public',
'https://4bear.com/api/v1/timelines/public',
'https://corteximplant.com/api/v1/timelines/public',
'https://eupolicy.social/api/v1/timelines/public',
'https://fandom.ink/api/v1/timelines/public',
'https://disabled.social/api/v1/timelines/public',
'https://mstdn.dk/api/v1/timelines/public',
'https://historians.social/api/v1/timelines/public',
'https://pnw.zone/api/v1/timelines/public',
'https://furries.club/api/v1/timelines/public',
'https://musicians.today/api/v1/timelines/public',
'https://libretooth.gr/api/v1/timelines/public',
'https://mountains.social/api/v1/timelines/public',
'https://cosocial.ca/api/v1/timelines/public',
'https://babka.social/api/v1/timelines/public',
'https://musician.social/api/v1/timelines/public',
'https://archaeo.social/api/v1/timelines/public',
'https://dmv.community/api/v1/timelines/public',
'https://convo.casa/api/v1/timelines/public',
'https://mastodon.energy/api/v1/timelines/public',
'https://drupal.community/api/v1/timelines/public',
'https://social.seattle.wa.us/api/v1/timelines/public',
'https://donphan.social/api/v1/timelines/public',
'https://gamepad.club/api/v1/timelines/public',
'https://mast.hpc.social/api/v1/timelines/public',
'https://norcal.social/api/v1/timelines/public',
'https://is.nota.live/api/v1/timelines/public',
'https://toot.funami.tech/api/v1/timelines/public',
'https://hometech.social/api/v1/timelines/public',
'https://wargamers.social/api/v1/timelines/public',
'https://epicure.social/api/v1/timelines/public',
'https://qaf.men/api/v1/timelines/public',
'https://datasci.social/api/v1/timelines/public',
'https://esq.social/api/v1/timelines/public',
'https://opencoaster.net/api/v1/timelines/public',
'https://genealysis.social/api/v1/timelines/public',
'https://elekk.xyz/api/v1/timelines/public',
'https://h-net.social/api/v1/timelines/public',
'https://mastodon.africa/api/v1/timelines/public',
'https://mastodon.pirateparty.be/api/v1/timelines/public',
'https://toot.garden/api/v1/timelines/public',
'https://cultur.social/api/v1/timelines/public',
'https://friendsofdesoto.social/api/v1/timelines/public',
'https://cyberfurz.social/api/v1/timelines/public',
'https://indieauthors.social/api/v1/timelines/public',
'https://mastodon.education/api/v1/timelines/public',
'https://hoosier.social/api/v1/timelines/public',
'https://planetearth.social/api/v1/timelines/public',
'https://earthstream.social/api/v1/timelines/public',
'https://mastodon.bot/api/v1/timelines/public',
'https://apobangpo.space/api/v1/timelines/public',
'https://techtoots.com/api/v1/timelines/public',
'https://seocommunity.social/api/v1/timelines/public',
'https://cwb.social/api/v1/timelines/public',
'https://jvm.social/api/v1/timelines/public',
'https://guitar.rodeo/api/v1/timelines/public',
'https://metalverse.social/api/v1/timelines/public',
'https://opalstack.social/api/v1/timelines/public',
'https://raphus.social/api/v1/timelines/public',
'https://toots.nu/api/v1/timelines/public',
'https://paktodon.asia/api/v1/timelines/public',
'https://arvr.social/api/v1/timelines/public',
'https://frontrange.co/api/v1/timelines/public',
'https://masto.yttrx.com/api/v1/timelines/public',
'https://poweredbygay.social/api/v1/timelines/public',
'https://rail.chat/api/v1/timelines/public',
'https://mastodon.cipherbliss.com/api/v1/timelines/public',
'https://x0r.be/api/v1/timelines/public',
'https://social.veraciousnetwork.com/api/v1/timelines/public',
'https://library.love/api/v1/timelines/public',
'https://vermont.masto.host/api/v1/timelines/public',
'https://squawk.mytransponder.com/api/v1/timelines/public',
'https://camp.smolnet.org/api/v1/timelines/public',
'https://clj.social/api/v1/timelines/public',
'https://okla.social/api/v1/timelines/public',
'https://mastodon.hosnet.fr/api/v1/timelines/public',
'https://growers.social/api/v1/timelines/public',
'https://nomanssky.social/api/v1/timelines/public',
'https://synapse.cafe/api/v1/timelines/public',
'https://birdon.social/api/v1/timelines/public',
'https://freemasonry.social/api/v1/timelines/public',
'https://k8s.social/api/v1/timelines/public',
'https://mastodon.babb.no/api/v1/timelines/public',
'https://skastodon.com/api/v1/timelines/public',
'https://silversword.online/api/v1/timelines/public',
'https://episcodon.net/api/v1/timelines/public',
'https://mastodon.frl/api/v1/timelines/public',
'https://kzoo.to/api/v1/timelines/public',
'https://cville.online/api/v1/timelines/public',
'https://kcmo.social/api/v1/timelines/public',
'https://mastodon.iow.social/api/v1/timelines/public',
'https://mcr.wtf/api/v1/timelines/public',
'https://nfld.me/api/v1/timelines/public',
'https://ms.maritime.social/api/v1/timelines/public',
'https://mastodon.ee/api/v1/timelines/public',
'https://23.illuminati.org/api/v1/timelines/public',
'https://ceilidh.online/api/v1/timelines/public',
'https://mastodon.vanlife.is/api/v1/timelines/public',
'https://social.sndevs.com/api/v1/timelines/public',
'https://dariox.club/api/v1/timelines/public',
'https://darticulate.com/api/v1/timelines/public',
'https://jaxbeach.social/api/v1/timelines/public',
'https://learningdisability.social/api/v1/timelines/public',
'https://computerfairi.es/api/v1/timelines/public',
'https://neovibe.app/api/v1/timelines/public',
'https://fairmove.net/api/v1/timelines/public',
'https://mastodon.conquestuniverse.com/api/v1/timelines/public',
'https://rap.social/api/v1/timelines/public',
'https://pool.social/api/v1/timelines/public',
'https://emacs.ch/api/v1/timelines/public',
'https://geekdom.social/api/v1/timelines/public',
'https://lor.sh/api/v1/timelines/public',
'https://awscommunity.social/api/v1/timelines/public',
'https://todon.nl/api/v1/timelines/public',
'https://thecanadian.social/api/v1/timelines/public',
'https://social.bau-ha.us/api/v1/timelines/public',
'https://federated.press/api/v1/timelines/public',
'https://mograph.social/api/v1/timelines/public',
'https://lgbt.io/api/v1/timelines/public',
'https://beekeeping.ninja/api/v1/timelines/public',
'https://allthingstech.social/api/v1/timelines/public',
'https://lounge.town/api/v1/timelines/public',
'https://furry.energy/api/v1/timelines/public',
'https://seo.chat/api/v1/timelines/public',
'https://fpl.social/api/v1/timelines/public',
'https://sanjuans.life/api/v1/timelines/public',
'https://toot.works/api/v1/timelines/public',
'https://pdx.sh/api/v1/timelines/public',
'https://masr.social/api/v1/timelines/public',
'https://nutmeg.social/api/v1/timelines/public',
'https://neurodiversity-in.au/api/v1/timelines/public',
'https://publishing.social/api/v1/timelines/public',
'https://persia.social/api/v1/timelines/public',
'https://wayne.social/api/v1/timelines/public',
];

function fetchPostsFromMastodon($url, $limit = 20)
{
    $fullUrl = $url . '?limit=' . $limit;

    $opts = [
        'http' => [
            'method'  => 'GET',
            'header'  => [
                'User-Agent: MastofetchBot/1.0 (+https://mastofetch.vercel.app)',
            ],
            'timeout' => 10 // in seconds
        ]
    ];

    $context = stream_context_create($opts);
    $response = @file_get_contents($fullUrl, false, $context);

    if ($response === false) {
        return [];
    }

    $data = json_decode($response, true);
    return $data ?? [];
}

function decodeEntities($text)
{
    return html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function getAuthorProfileImage($account)
{
    return $account['avatar'];
}

function getTimeElapsedString($datetime)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
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

function getRandomInstanceURL($exclude = null)
{
    global $instances;
    $filtered = array_filter($instances, fn($url) => $url !== $exclude);
    return $filtered[array_rand($filtered)];
}

if (isset($_GET['ajax']) && $_GET['ajax'] === '1') {
    $exclude = filter_input(INPUT_GET, 'exclude', FILTER_SANITIZE_URL);
    $url = getRandomInstanceURL($exclude);
    $posts = fetchPostsFromMastodon($url, 10);

    foreach ($posts as $post) {
        $authorProfileImage = getAuthorProfileImage($post['account']);
        echo "<div class='post'>";
        echo "<img class='author-img' src='{$authorProfileImage}' alt='Author Profile Image'>";
        echo "<p style='margin-bottom: 2px;'><strong>{$post['account']['display_name']}</strong><p class='post-time' style='margin-top: 0px;'>Posted&nbsp;" . getTimeElapsedString($post['created_at']) . "</p>";
        echo "<p>" . decodeEntities($post['content']) . "</p>";

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

$firstInstance = $instances[array_rand($instances)];
$initialPosts = fetchPostsFromMastodon($firstInstance, 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastofetch - Catch the fediverse in your hands</title>
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231878/mastofetch/favicon_io/apple-touch-icon_td8gsp.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231878/mastofetch/favicon_io/favicon-32x32_odtk7m.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231877/mastofetch/favicon_io/favicon-16x16_zlpxtr.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/dceum4nes/image/upload/v1748231878/mastofetch/favicon_io/favicon_bfxjif.ico">
    <link rel="manifest" href="https://res.cloudinary.com/dceum4nes/raw/upload/v1748232150/mastofetch/favicon_io/site_biohap.webmanifest">
    <meta name="description" content="Catch the fediverse in your hands with Mastofetch">
    <meta name="keywords" content="Mastodon, Mastofetch">
    <meta name="author" content="The Mastoget Organization">
    <meta property="og:title" content="Mastofetch" />
    <meta property="og:type" content="site" />
    <meta property="og:url" content="https://mastofetch.vercel.app" />
    <meta property="og:image" content="https://res.cloudinary.com/dceum4nes/image/upload/v1748231620/mastofetch/Logo_wgac9d.png" />
    <meta property="og:description" content="Catch the fediverse in your hands with Mastofetch">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://mastofetch.vercel.app">
    <meta property="twitter:url" content="https://mastofetch.vercel.app">
    <meta name="twitter:title" content="Google">
    <meta name="twitter:description" content="Catch the fediverse in your hands with Mastofetch">
    <meta name="twitter:image" content="https://res.cloudinary.com/dceum4nes/image/upload/v1748231620/mastofetch/Logo_wgac9d.png">
    <link rel="canonical" href="https://mastofetch.vercel.app" />
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
}

.mastogetlogo {
    display: block;
    margin: 20px auto;
}

    </style>

</head>
<body>
    <img class="mastogetlogo" width="128px" height="128px" src="https://res.cloudinary.com/dceum4nes/image/upload/f_auto,q_auto/v1/mastofetch/Logo_wgac9d">
    <p class="popup" style="color:white; text-align:center">
        <a class="refresh" href="#" onclick="location.reload(); return false;">Refresh Content</a><br>
        <a class="about" href="https://github.com/thedoggybrad/mastofetch/blob/main/README.md">About Mastofetch</a>
    </p><br>
    <div id="posts">
        <?php
        foreach ($initialPosts as $post) {
            $authorProfileImage = getAuthorProfileImage($post['account']);
            echo "<div class='post'>";
            echo "<img class='author-img' src='{$authorProfileImage}' alt='Author Profile Image'>";
            echo "<p style='margin-bottom: 2px;'><strong>{$post['account']['display_name']}</strong><p class='post-time' style='margin-top: 0px;'>Posted&nbsp;" . getTimeElapsedString($post['created_at']) . "</p>";
            echo "<p>" . decodeEntities(strip_tags($post['content'], '<p><a><br><strong><em>')) . "</p>";

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
    <p id="loader" style="text-align: center; color: #ffffff;">Loading more posts...</p>

    <script>
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
