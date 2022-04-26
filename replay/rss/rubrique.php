<?php include('../../connect_db_replay.php'); ?>

<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/">
  <channel>
    <title>News Replay Guadeloupe</title>
    <link>https://www.replay.gp/videos/category/690/sub__693?r=690&s=sub__693</link>
    <description>Replay Actualité TV : Votre revue de presse Guadeloupe</description>
    <language>en-us</language>
    <lastBuildDate><?php echo date("Y-m-d H:i:s"); ?></lastBuildDate>
    <?php
        // limitter la récupération des enregistrements
        $resultat = $db->query('SELECT * FROM videos WHERE sub_category="sub__693" ORDER BY id DESC LIMIT 5');
        while($col=$resultat->fetch()){
    ?>
        <item>
        <title><![CDATA[<?php echo($col['title']); ?>]]></title>
        <link>https://www.replay.gp/v/<?php echo($col['short_id']); ?></link>
        <guid><?php echo($col['id']); ?></guid>
        <pubDate><?php echo($col['time_date']); ?></pubDate>
        <author>Replay.gp</author>
        <description><?php echo($col['description']); ?></description>
        <content:encoded><![CDATA[<?php echo($col['description']); ?>]]></content:encoded>
        </item>
    <?php } ?>
  </channel>
</rss>


